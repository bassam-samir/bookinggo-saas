<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LoginDetail;
use App\Models\Plan;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Workdo\GoogleCaptcha\Events\VerifyReCaptchaToken;
use App\Facades\ModuleFacade as Module;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function __construct()
    {
        if(!file_exists(storage_path() . "/installed"))
        {
            header('location:install');
            die;
        }
        $admin_settings = getAdminAllSetting();
        if(module_is_active('GoogleCaptcha') && (isset($admin_settings['google_recaptcha_is_on']) ? $admin_settings['google_recaptcha_is_on'] : 'off') == 'on' )
        {
            config(['captcha.secret' => isset($admin_settings['google_recaptcha_secret']) ? $admin_settings['google_recaptcha_secret'] : '']);
            config(['captcha.sitekey' => isset($admin_settings['google_recaptcha_key']) ? $admin_settings['google_recaptcha_key'] : '']);
        }
    }
    public function create($lang = '')
    {
        if($lang == '')
        {
            $lang = getActiveLanguage();
        }
        else
        {
            $lang = array_key_exists($lang, languages()) ? $lang : 'en';
        }
        \App::setLocale($lang);
        return view('auth.login',compact('lang'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if(module_is_active('GoogleCaptcha') && admin_setting('google_recaptcha_is_on') == 'on' )
        {
            if(admin_setting('google_recaptcha_version') == 'v2'){
                $validation['g-recaptcha-response'] = 'required|captcha';

            }elseif(admin_setting('google_recaptcha_version') == 'v3'){
                $result = event(new VerifyReCaptchaToken($request));
                if (!isset($result[0]['status']) || $result[0]['status'] != true) {
                    $key = 'g-recaptcha-response';
                    $request->merge([$key => null]); // Set the key to null

                }
                $validation['g-recaptcha-response'] = 'required';

            }else{
                $validation = [];
            }
        }else{
            $validation = [];
        }
        $this->validate($request, $validation);

        $request->authenticate();

        $request->session()->regenerate();

        //  User logs

        $ip = $_SERVER['REMOTE_ADDR']; // your ip address here

        $query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip));

        if(isset($query['status']) && $query['status'] == 'success')
        {
            $whichbrowser = new \WhichBrowser\Parser($_SERVER['HTTP_USER_AGENT']);
            if ($whichbrowser->device->type == 'bot')
            {
                return redirect()->intended(RouteServiceProvider::HOME);
            }

            $referrer = isset($_SERVER['HTTP_REFERER']) ? parse_url($_SERVER['HTTP_REFERER']) : null;

            /* Detect extra details about the user */
            $query['browser_name'] = $whichbrowser->browser->name ?? null;
            $query['os_name'] = $whichbrowser->os->name ?? null;
            $query['browser_language'] = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? mb_substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : null;
            $query['device_type'] = GetDeviceType($_SERVER['HTTP_USER_AGENT']);
            $query['referrer_host'] = !empty($referrer['host']);
            $query['referrer_path'] = !empty($referrer['path']);

            $json = json_encode($query);

            $login_detail = new LoginDetail();
            $login_detail->user_id = Auth::user()->id;
            $login_detail->ip = $ip;
            $login_detail->date = date('Y-m-d H:i:s');
            $login_detail->Details = $json;
            $login_detail->type = Auth::user()->type;
            $login_detail->created_by = creatorId();
            $login_detail->business = (Auth::user()->type == 'super admin') ? null : getActiveBusiness();
            $login_detail->save();
        }

         // Update wizard
        if(Auth::user()->type == 'super admin')
        {
            $ranMigrations = DB::table('migrations')->pluck('migration');
            // $modules = Module::all();
            $modules = Module::allModules();

            $migrationFiles = collect(File::glob(database_path('migrations/*.php')))
            ->map(function ($path) {
                return File::name($path);
            });
          
            foreach ($modules as $key => $module) {
                // Get the module directorie in your project
                $directory = "packages/workdo/".$module->package_name."/src/Database/Migrations";

                $files = collect(File::glob("{$directory}/*.php"))
                    ->map(function ($path) {
                        return File::name($path);
                    });
                $migrationFiles = $migrationFiles->merge($files);
            }
            // Calculate the pending migrations by diffing the two lists
            $pendingMigrations = $migrationFiles->diff($ranMigrations);
            if(count($pendingMigrations) > 0)
            {
                return redirect()->route('LaravelUpdater::welcome');
            }
        }
        elseif(Auth::user()->type == 'company')
        {
            $user = User::where('id', Auth::user()->id)->first();

            if($user->plan_expire_date > (!empty($user->trial_expire_date) ? $user->trial_expire_date :''))
            {
                $datetime1 = new \DateTime($user->plan_expire_date);
            }else{
                $datetime1 = new \DateTime($user->trial_expire_date);
            }
            $datetime2 = new \DateTime(date('Y-m-d'));
            $interval = $datetime2->diff($datetime1);
            $days     = $interval->format('%r%a');
            if($days <= 0)
            {
                $plan = Plan::where('is_free_plan',1)->first();
                if($plan)
                {
                    $user->assignPlan($plan->id,'Month',$plan->modules,0,$user->id);
                }
                return redirect()->route('active.plans')->with('error', __('Your Plan is expired.'));
            }

        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
