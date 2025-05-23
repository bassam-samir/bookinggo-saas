<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Events\DefaultData;
use App\Events\GivePermissionToRole;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Paddle\Billable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements LaratrustUser,MustVerifyEmail,JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions,Impersonate, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile_no',
        'email_verified_at',
        'password',
        'remember_token',
        'type',
        'active_status',
        'active_business',
        'avatar',
        'dark_mode',
        'requested_plan',
        'messenger_color',
        'active_plan',
        'billing_type',
        'active_module',
        'plan_expire_date',
        'total_user',
        'total_business',
        'seeder_run',
        'business_id',
        'created_by',
        'lang',
        'is_enable_login',
        'is_disable',
        'trial_expire_date',
        'is_trial_done',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static $superadmin_activated_module = [
        'LandingPage',
    ];

    public static $not_edit_role = [
        'super admin',
        'company',
        'client',
        'manager',
        'customer',
        'vendor',
        'staff',
        'driver',
        'salesagent',
        'hr'
    ];
    public  $not_emp_type = [
        'super admin',
        'company',
        'client',
        'vendor',
        'driver',
        'salesagent',
        'hr'
    ];
    public function plan()
    {
        return  $this->hasOne(Plan::class,'id','active_plan');
    }
    public function scopeEmp($query)
    {
        return $query->whereNotIn('type', $this->not_emp_type);
    }
    public static function hex2rgb($hex)
    {
        $hex = str_replace("#", "", $hex);

        if(strlen($hex) == 3)
        {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        }
        else
        {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array(
            $r,
            $g,
            $b,
        );

        return $rgb; // returns an array with the rgb values
    }
    public static function getFontColor($color_code)
    {
        $rgb = self::hex2rgb($color_code);
        $R   = $G = $B = $C = $L = $color = '';

        $R = (floor($rgb[0]));
        $G = (floor($rgb[1]));
        $B = (floor($rgb[2]));

        $C = [
            $R / 255,
            $G / 255,
            $B / 255,
        ];

        for($i = 0; $i < count($C); ++$i)
        {
            if($C[$i] <= 0.03928)
            {
                $C[$i] = $C[$i] / 12.92;
            }
            else
            {
                $C[$i] = pow(($C[$i] + 0.055) / 1.055, 2.4);
            }
        }

        $L = 0.2126 * $C[0] + 0.7152 * $C[1] + 0.0722 * $C[2];

        if($L > 0.179)
        {
            $color = 'black';
        }
        else
        {
            $color = 'white';
        }

        return $color;
    }

    public function MakeRole()
    {
        $data = [];
        $staff_role_permission = [
            'user profile manage',
            'user logs history',

        ];
        $client_role_permission = [
            'user profile manage',
            'user logs history',

        ];
        $customer_role_permission = [
            'customer manage',
            'customer create',
            'customer edit',
            'customer delete',

        ];
        $client_role = Role::where('name','manager')->where('created_by',$this->id)->where('guard_name','web')->first();
        if(empty($client_role))
        {
            $client_role                   = new Role();
            $client_role->name             = 'manager';
            $client_role->guard_name       = 'web';
            $client_role->module           = 'Base';
            $client_role->created_by       = $this->id;
            $client_role->save();

            foreach($client_role_permission as $permission_c){
                $permission = Permission::where('name',$permission_c)->first();
                $client_role->givePermission($permission);
            }
        }
        $staff_role = Role::where('name','staff')->where('created_by',$this->id)->where('guard_name','web')->first();
        if(empty($staff_role))
        {
            $staff_role                   = new Role();
            $staff_role->name             = 'staff';
            $staff_role->guard_name       = 'web';
            $staff_role->module           = 'Base';
            $staff_role->created_by       = $this->id;
            $staff_role->save();

            foreach($staff_role_permission as $permission_s){
                $permission = Permission::where('name',$permission_s)->first();
                $staff_role->givePermission($permission);
            }
        }
        $customer_role = Role::where('name','customer')->where('created_by',$this->id)->where('guard_name','web')->first();
        if(empty($customer_role))
        {
            $customer_role                   = new Role();
            $customer_role->name             = 'customer';
            $customer_role->guard_name       = 'web';
            $customer_role->module           = 'Base';
            $customer_role->created_by       = $this->id;
            $customer_role->save();

            foreach($customer_role_permission as $permission_cu){
                $permission = Permission::where('name',$permission_cu)->first();
                $customer_role->givePermission($permission);
            }
        }

        $data['client_role'] = $client_role;
        $data['staff_role'] = $staff_role;
        $data['customer_role'] = $customer_role;

        return $data;
    }
    public static function CompanySetting($id = null,$businee_id = null)
    {

        if(!empty($id))
        {
            $company = User::find($id);
            if(empty($businee_id))
            {
                $businee_id = $company->active_business;
            }
            $admin_settings = getAdminAllSetting();


            $company_setting = [
                "currency_format" => !empty($admin_settings['currency_format']) ? $admin_settings['currency_format'] : "1",
                "defult_currancy" => !empty($admin_settings['defult_currancy']) ? $admin_settings['defult_currancy'] : "USD",
                "defult_currancy_symbol" => !empty($admin_settings['defult_currancy_symbol']) ? $admin_settings['defult_currancy_symbol'] : "$",
                "defult_language" => !empty($admin_settings['defult_language']) ? $admin_settings['defult_language'] : 'en',
                "defult_timezone" => !empty($admin_settings['defult_timezone']) ? $admin_settings['defult_timezone'] : 'Asia/Kolkata',
                "site_currency_symbol_position" => "pre",
                "site_date_format" => "d-m-Y",
                "site_time_format" => "g:i A",
                "title_text" => !empty($admin_settings['title_text']) ? $admin_settings['title_text'] : "BookingGo",
                "footer_text" => !empty($admin_settings['footer_text']) ? $admin_settings['footer_text'] :"Copyright © BookingGo",
                "site_rtl" => !empty($admin_settings['site_rtl']) ? $admin_settings['site_rtl'] : "off",
                "cust_darklayout" => !empty($admin_settings['cust_darklayout']) ? $admin_settings['cust_darklayout'] :"off",
                "site_transparent" => !empty($admin_settings['site_transparent']) ? $admin_settings['site_transparent'] : "on",
                "color" => "theme-1",

            ];
            foreach ($company_setting as $key => $value) {
                // Define the data to be updated or inserted
                $data = [
                    'key' => $key,
                    'business' => $businee_id,
                    'created_by' => $id,
                ];
                // Check if the record exists, and update or insert accordingly
                Setting::updateOrInsert($data, ['value' => $value]);
            }
        }
    }
    public function ActiveBusinessName()
    {
        $name = $this->name;
        $business = Business::find(getActiveBusiness());
        if($business)
        {
            $name = $business->name;
        }
        return $name;
    }
    public function countCompany()
    {
        return User::where('type', '=', 'company')->where('created_by', '=',creatorId())->count();
    }
    public function countPaidCompany()
    {
        return  User::where('type', '=', 'company')->whereNotIn('active_plan', [0,1])->where('created_by', '=', creatorId())->count();
    }
    public function assignPlan($plan_id = null,$duration = null,$modules = null,$counter = null,$user_id = null)
    {
        if($user_id != null)
        {
            $user = User::find($user_id);
        }
        else
        {
            $user =  User::find(Auth::user()->id);
        }
        if($plan_id != null){

            $plan = Plan::find($plan_id);
        }else
        {
            $plan = Plan::where('is_free_plan',1)->first();
        }
        $oldplan= Plan::where('id',$user->active_plan)->first();
        if($plan)
        {

            $user->active_plan = $plan->id;

            if(!empty($duration))
            {
                if($duration == 'Month')
                {
                    $user->plan_expire_date = Carbon::now()->addMonths(1)->isoFormat('YYYY-MM-DD');
                }
                elseif($duration == 'Year')
                {
                    $user->plan_expire_date = Carbon::now()->addYears(1)->isoFormat('YYYY-MM-DD');
                }
                elseif($duration == 'Trial')
                {
                    $user->trial_expire_date =  Carbon::now()->addDays((int) $plan->trial_days)->isoFormat('YYYY-MM-DD');
                    if($user->plan_expire_date)
                    {
                        $user->plan_expire_date = null;
                    }
                }
                else{
                    $user->plan_expire_date = null;
                }
            }else
            {
                $user->plan_expire_date = null;
            }
            if(!empty($modules))
            {
                $modules_array = explode(',',$modules);
                $currentActiveModules = userActiveModule::where('user_id', $user->id)->pluck('module')->toArray();

                if(($plan->custom_plan) && (isset($oldplan) && $oldplan->custom_plan == 1))
                {
                    $user_module = $currentActiveModules;
                    foreach ($modules_array as $module) {
                        if(!in_array($module,$user_module)){
                            array_push($user_module,$module);
                        }
                    }

                    $newModules = array_diff($user_module, $currentActiveModules);

                    foreach ($newModules as $moduleName) {
                        userActiveModule::create([
                            'user_id' => $user->id,
                            'module' => $moduleName,
                        ]);
                    }
                }
                else
                {
                    userActiveModule::where('user_id', $user->id)->delete();

                    $user_module = $modules_array;

                    // if(!in_array('ProductService',$user_module)){

                    //     array_push($user_module,"ProductService");
                    // }

                    foreach ($user_module as $moduleName) {
                        userActiveModule::create([
                            'user_id' => $user->id,
                            'module' => $moduleName,
                        ]);
                    }
                }


                $user->active_module = implode(',',$user_module);
                event(new DefaultData($user->id,null,$modules));

                $client_role = Role::where('name','manager')->where('created_by',$user->id)->first();
                $staff_role = Role::where('name','staff')->where('created_by',$user->id)->first();
                $vendor_role = Role::where('name','vendor')->where('created_by',$user->id)->first();
                $hr_role = Role::where('name','hr')->where('created_by',$user->id)->first();


                if(!empty($client_role))
                {
                    event(new GivePermissionToRole($client_role->id,'manager',$modules));
                }
                if(!empty($staff_role))
                {
                    event(new GivePermissionToRole($staff_role->id,'staff',$modules));
                }
                if(!empty($vendor_role))
                {
                    event(new GivePermissionToRole($vendor_role->id,'vendor',$modules));
                }
                if(!empty($hr_role))
                {
                    event(new GivePermissionToRole($hr_role->id,'hr',$modules));
                }
            }

            if($counter != null && !empty($oldplan->custom_plan) == 1 && !empty($plan->custom_plan )==1)
            {
                $plan->number_of_business = ($user->total_business == -1) ? $counter['business_counter'] : $counter['business_counter'] + $user->total_business;
                $plan->number_of_user = ($user->total_user == -1) ? $counter['user_counter'] : $counter['user_counter'] + $user->total_user;
            }
            elseif($counter != null && $plan->custom_plan == 1)
            {
                $plan->number_of_business = $counter['business_counter'];
                $plan->number_of_user = $counter['user_counter'];
            }
            //For Business enable/disablenumber_of_business
            $plan->number_of_business = !empty($plan->number_of_business) ? $plan->number_of_business : -1 ;
            $business = Business::where('created_by',$user->id)->where('is_disable',1)->get();
            $total= $business->count();
            if($plan->number_of_business > 0)
            {
                if($total > $plan->number_of_business)
                {
                    $count = $total - $plan->number_of_business;
                    $WspToDisable = Business::orderBy('created_at', 'desc')->where('created_by',$user->id)->where('is_disable',1)->take($count)->get();
                    foreach($WspToDisable as $item){
                        $item->is_disable = 0;
                        $item->save();
                        if($user->active_business == $item->id){
                            $switchwsp = Business::where('created_by',$user->id)->where('is_disable',1)->first();
                            $user->active_business = $switchwsp->id;
                        }
                        $users = User::where('business_id',$item->id)->get();
                        foreach($users as $item){
                            $item->is_disable = 0;
                            $item->save();
                        }
                        $WspActive = Business::where('created_by',$user->id)->where('id','!=',$item)->get();
                        foreach($WspActive as $active)
                        {
                            $this->Usercount($active->id,$plan);

                        }
                    }
                }else
                {
                    foreach($business as $item){
                        $this->Usercount($item->id,$plan);
                    }
                    $count =  $plan->number_of_business - $total;
                    $businesses = Business::where('created_by',$user->id)->where('is_disable',0)->take($count)->get();
                    foreach($businesses as $item)
                    {
                            $item->is_disable = 1;
                            $this->Usercount($item->id,$plan);
                            $item->save();
                    }
                }

            }elseif($plan->number_of_business == -1)
            {
                $business = Business::where('created_by',$user->id)->get();
                foreach($business as $item)
                    {
                        $item->is_disable = 1;
                        $item->save();
                        $this->Usercount($item->id,$plan);
                    }
            }
            $user->total_user = $plan->number_of_user;
            $user->total_business = $plan->number_of_business;
            $user->save();

            if(Auth::check())
            {
                // Settings Cache forget
                comapnySettingCacheForget();
                sideMenuCacheForget();
            }
            return ['is_success' => true];
        }
        else
        {
            return [
                'is_success' => false,
                'error' => 'Plan is deleted.',
            ];
        }
    }

    public function UserCount($id,$plan)
    {

        if(!empty($id) && !empty($plan)){

            $users = User::where('business_id',$id)->where('is_disable',1)->where('type','!=','company')->get();
            $total_users =  $users->count();
            if($plan->number_of_user > 0)
            {
                if($total_users > $plan->number_of_user){
                        $count_user = $total_users - $plan->number_of_user;
                        $usersToDisable = User::orderBy('created_at', 'desc')->where('business_id',$id)->where('is_disable',1)->where('type','!=','company')->take($count_user)->get();
                        foreach($usersToDisable as $item){
                            $item->is_disable = 0;
                            $item->save();
                        }
                    }else{
                        $count_user =  $plan->number_of_user - $total_users ;
                        $users = User::where('business_id',$id)->where('is_disable',0)->where('type','!=','company')->take($count_user)->get();
                        foreach($users as $item){
                            $item->is_disable = 1;
                            $item->save();
                        }
                    }
                }elseif($plan->number_of_user == -1){
                    $users = User::where('business_id',$id)->get();
                    foreach($users as $item){
                        $item->is_disable = 1;
                        $item->save();
                    }
                }
        }
    }
}
