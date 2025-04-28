<?php

namespace App\Http\Controllers;

use App\DataTables\AppointmentDataTable;
use App\Events\AdditionalServicePayment;
use App\Events\CreateAppoinment;
use App\Models\Appointment;
use App\Models\AppointmentPayment;
use App\Models\Location;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Customer;
use App\Models\BusinessHours;
use App\Models\Business;
use App\Models\BusinessHoliday;
use App\Models\User;
use App\Models\Role;
use App\Models\Setting;
use App\Models\File;
use App\Models\CustomField;
use App\Models\EmailTemplate;
use App\Models\CustomStatus;
use App\Models\ThemeSetting;
use App\Models\Testimonial;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Workdo\CollaborativeServices\Entities\CollaborativeServiceUtility;
use Workdo\CompoundService\Entities\CompoundUtility;
use Workdo\ShoppingCart\Entities\ShoppingCart;
use Workdo\TrackingPixel\Entities\PixelFields;
use App\Events\AppointmentStatus;
use Workdo\FlexibleHours\Entities\FlexibleHour;
use App\Events\AppointmentPaymentData;
use App\Events\DeleteAppointment;
use Workdo\RepeatAppointments\Entities\Utility;
use Workdo\SequentialAppointment\Entities\SequentialUtility;
use Workdo\SequentialAppointment\Events\CreateSequentialAppointment;
use Workdo\FlexibleDays\Entities\FlexibleDayUtility;
use Workdo\FlexibleDays\Entities\FlexibleStaffHours;
use Cookie;
use Illuminate\Support\Facades\DB;
use Workdo\GoogleCalendar\Entities\CalendarUtility;
use Workdo\BulkAppointments\Entities\BulkAppointment;
use Workdo\FlexibleDuration\Entities\FlexibleDurationUtility;
use Workdo\OutlookCalendar\Entities\OutlookUtility;
use Workdo\ServiceSlotScheduler\Entities\ServiceScheduleDay;
use Workdo\ServiceSlotScheduler\Entities\ServiceScheduleUtility;
use Workdo\TeamBooking\Entities\TeamBooking;
use App\Facades\ModuleFacade as Module;
use Workdo\WaitingList\Entities\WaitingListUtility;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request,  AppointmentDataTable $dataTable)
    {
        if (Auth::user()->isAbleTo('appointment manage')) {
            $business       = Business::find(($request->business) ?  $request->business : getActiveBusiness());
            if (!empty($business)) {
                $service        = Service::where('created_by', $business->created_by)->where('business_id', $business->id)->select('name', 'id')->get()->prepend(['id' => null, 'name' => 'Select Service'])->pluck('name', 'id');
                $company_settings = getCompanyAllSetting($business->created_by,$business->id);
                $dataTable->getBusinessAndSettings($business,$company_settings);
                return $dataTable->with('request', $request)->render('appointment.index', compact('service'));
            } else {
                return abort(404);
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->isAbleTo('appointment create')) {
            $location = Location::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'id')->get()->prepend(['id' => null, 'name' => 'Select Location'])->pluck('name', 'id');

            $service = Service::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'id')->get()->prepend(['id' => null, 'name' => 'Select Service'])->pluck('name', 'id');

            $customer = Customer::where('created_by', creatorId())->where('business_id', getActiveBusiness())->get()->pluck('name', 'user_id')->prepend('select customer');


            $staff = Staff::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'user_id')->get()->prepend(['user_id' => null, 'name' => 'Select Staff'])->pluck('name', 'user_id');


            $customer = Customer::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'user_id')->get()->prepend(['user_id' => null, 'name' => 'Select Customer'])->pluck('name', 'user_id');


            $busineshours = BusinessHours::where('created_by', creatorId())
                ->where('business_id', getActiveBusiness())
                ->where('day_off', 'on')
                ->select('day_name')
                ->get()
                ->pluck('day_name')
                ->map(function ($day) {
                    return date('w', strtotime($day));
                })
                ->toArray();

            $businesholiday = BusinessHoliday::where('created_by', creatorId())
                ->where('business_id', getActiveBusiness())
                ->pluck('date')
                ->map(function ($date) {
                    return Carbon::parse($date)->format('d-m-Y');
                })
                ->toArray();
            // $combinedArray = array_merge($busineshours, $businesholiday);
            $combinedArray = $busineshours;


            return view('appointment.create', compact('location', 'service', 'staff', 'customer', 'busineshours', 'busineshours', 'businesholiday', 'combinedArray'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->isAbleTo('appointment create')) {
            $validator = \Validator::make(
                $request->all(),
                [
                    'customer' => 'required',
                    'location' => 'required',
                    'service' => 'required',
                    'staff' => 'required',
                    'appointment_date' => 'required',
                    'duration' => 'required',
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }
            $default_status = company_setting('default_status', creatorId(), getActiveBusiness());
            $service = Service::find($request->service);

            $appointment                   = new Appointment();
            $appointment->customer_id      = $request->customer;
            $appointment->location_id      = $request->location;
            $appointment->service_id       = $request->service;
            $appointment->staff_id         = $request->staff;
            $appointment->date             = !empty($request->appointment_date) ? $request->appointment_date : '';
            $appointment->time             = !empty($request->duration) ? $request->duration : '';
            $appointment->notes            = !empty($request->notes) ? $request->notes : '';
            $appointment->appointment_status   = !empty($default_status) ? $default_status : 'Pending';
            $appointment->payment_type   = !empty($request->payment_type) ? $request->payment_type : 'Manually';
            $appointment->business_id      = getActiveBusiness();
            $appointment->created_by       = creatorId();
            $appointment->save();

            $payment = AppointmentPayment::create([
                'appointment_id' => $appointment->id,
                'payment_type' => $appointment->payment_type,
                'amount' => $service->price,
                'payment_date' => now(),
                'business_id' => $appointment->business_id,
                'created_by' => $appointment->created_by,
            ]);


            $appointment_number = Appointment::appointmentNumberFormat($appointment->id, $appointment->created_by, $appointment->business_id);
            //Email notification
            $company_settings = getCompanyAllSetting();

            if ((!empty($company_settings['Create Appointment']) && $company_settings['Create Appointment']  == true)) {
                $business = Business::where('id', getActiveBusiness())->first();
                $trackingUrl = route('find.appointment', ['businessSlug' => $business->slug]);
                $uArr = [
                    'company_name' => $request->input('name'),
                    'service' => $appointment->ServiceData ? $appointment->ServiceData->name : '-',
                    'location' => $appointment->LocationData ? $appointment->LocationData->name : '-',
                    'staff' => $appointment->StaffData->user ? $appointment->StaffData->user->name : '-',
                    'appointment_date' => $request->input('appointment_date'),
                    'appointment_time' => $request->input('duration'),
                    'appointment_number' => $appointment_number,
                    'tracking_url' => $trackingUrl,
                   
                ];
                $resp = EmailTemplate::sendEmailTemplate('Create Appointment', [$appointment->CustomerData->customer->email], $uArr);
            }
            event(new CreateAppoinment($appointment, $request));

            return redirect()->route('appointment.index')->with('success', __('Appointment successfully created.') . ((!empty($resp) && $resp['is_success'] == false && !empty($resp['error'])) ? '<br> <span class="text-danger">' . $resp['error'] . '</span>' : ''));

            // return redirect()->back()->with('success', __('Appointment successfully created.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $appointment = Appointment::with('payment')->where('id', $id)->first();

        return view('appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        if (Auth::user()->isAbleTo('appointment edit')) {
            $location = Location::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'id')->get()->prepend(['id' => null, 'name' => 'Select Location'])->pluck('name', 'id');

            $service = Service::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'id')->get()->prepend(['id' => null, 'name' => 'Select Service'])->pluck('name', 'id');

            $customer = Customer::where('created_by', creatorId())->where('business_id', getActiveBusiness())->get()->pluck('name', 'user_id')->prepend('select customer');


            $staff = Staff::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'user_id')->get()->prepend(['user_id' => null, 'name' => 'Select Staff'])->pluck('name', 'user_id');

            $customer = Customer::where('created_by', creatorId())->where('business_id', getActiveBusiness())->select('name', 'user_id')->get()->prepend(['user_id' => null, 'name' => 'Select Customer'])->pluck('name', 'user_id');


            $busineshours = BusinessHours::where('created_by', creatorId())
                ->where('business_id', getActiveBusiness())
                ->where('day_off', 'on')
                ->select('day_name')
                ->get()
                ->pluck('day_name')
                ->map(function ($day) {
                    return date('w', strtotime($day));
                })
                ->toArray();

            $businesholiday = BusinessHoliday::where('created_by', creatorId())
                ->where('business_id', getActiveBusiness())
                ->pluck('date')
                ->map(function ($date) {
                    return Carbon::parse($date)->format('d-m-Y');
                })
                ->toArray();
            // $combinedArray = array_merge($busineshours, $businesholiday);
            $combinedArray = $busineshours;

            // if(module_is_active('CompoundService', getActiveBusiness())){
            //     $timeSlots = CompoundUtility::compoundTimeSlote($appointment->service_id, $appointment->date);
            // } else {
            $timeSlots = timeSlot($appointment->service_id, $appointment->date);
            // }


            return view('appointment.edit', compact('location', 'service', 'staff', 'customer', 'busineshours', 'busineshours', 'appointment', 'timeSlots', 'combinedArray', 'businesholiday'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        if (Auth::user()->isAbleTo('appointment edit')) {

            $validator = \Validator::make(
                $request->all(),
                [
                    // 'customer' => 'required',
                    'location' => 'required',
                    'service' => 'required',
                    'staff' => 'required',
                    'appointment_date' => 'required',
                    'duration' => 'required',
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            $service = Service::find($request->service);

            $appointment->customer_id      = $request->customer;
            $appointment->location_id      = $request->location;
            $appointment->service_id       = $request->service;
            $appointment->staff_id         = $request->staff;
            $appointment->date             = !empty($request->appointment_date) ? $request->appointment_date : '';
            $appointment->time             = !empty($request->duration) ? $request->duration : '';
            $appointment->notes            = !empty($request->notes) ? $request->notes : '';
            $appointment->save();

            $AppointmentPayment = AppointmentPayment::where('appointment_id', $appointment->id)->first();
            $AppointmentPayment->amount = $service->price;
            $AppointmentPayment->save();

            return redirect()->back()->with('success', __('Appointment updated successfully!'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        if (Auth::user()->isAbleTo('appointment delete')) {
            event(new DeleteAppointment($appointment));
            $appointment->delete();
            return redirect()->back()->with('error', __('Appointment successfully delete.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    public function appointmentDuration(Request $request)
    {
        $service = Service::find($request->service);

        if (empty($service)) {
            return response()->json(['error' => __('Service not found!')], 404);
        }        

        $service_data = null;
        $flexible_data = null;

        if (module_is_active('CompoundService', $service->created_by) && $service->service_type == 'compound') {
            $compoundTimeSlot = CompoundUtility::compoundTimeSlote($request->service, $request->date);

            return response()->json(['timeSlots' => $compoundTimeSlot, 'result' => 'success']);
        }
        if (module_is_active('WaitingList', $service->created_by)) {
            $waitingListTimeSlot = WaitingListUtility::waitingListTimeSlote($request->service, $request->date);
            return response()->json(['timeSlots' => $waitingListTimeSlot, 'result' => 'success']);
        }

        if (module_is_active('CollaborativeServices',  $service->created_by) && $service->service_type == 'collaborative') {
            $slots = CollaborativeServiceUtility::collaborativeTimeSlote($request->service, $request->date);

            return response()->json(['timeSlots' => $slots, 'result' => 'success']);
        }

        if (!empty($request->service) && !empty($request->date)) {
            if (module_is_active('FlexibleHours', $service->created_by)) {
                $flexible_data = FlexibleHour::where('staff_id', $request->staff)
                    ->where('service_id', $request->service)
                    ->get();
            }
            if (module_is_active('FlexibleDays', $service->created_by)) {
                $flexible_days = FlexibleStaffHours::where('created_by', $service->created_by)
                    ->where('business_id', $service->business_id)
                    ->where('staff_id', $request->staff)->get();
                if ($flexible_days->isNotEmpty()) {
                    $flexibleDayTimeSlot = FlexibleDayUtility::flexibleDayTimeSlot($request->service, $request->date, $request->staff, $flexible_data);
                    return response()->json(['timeSlots' => $flexibleDayTimeSlot, 'result' => 'success']);
                }
            }
            if (module_is_active('ServiceSlotScheduler', $service->created_by) && !module_is_active('FlexibleDays', $service->created_by)) {
                $ServiceDayTimeSlot = ServiceScheduleUtility::ServiceDayTimeSlot($request->service, $request->date, $request->staff, $service_data);
                return response()->json(['timeSlots' => $ServiceDayTimeSlot, 'result' => 'success']);
            }
            if (module_is_active('FlexibleDuration', $service->created_by)) {
                $ServiceDurationTimeSlot = FlexibleDurationUtility::ServiceDurationTimeSlot($request->service, $request->date, $request->staff, $request->serviceduration);
                return response()->json(['timeSlots' => $ServiceDurationTimeSlot, 'result' => 'success']);
            }
            if (module_is_active('TeamBooking', $service->created_by) && !empty($request->team)) {
                $bookingTimeSlot = TeamBooking::timeSlot($request->service, $request->date, $flexible_data, $request->team);

                return response()->json(['timeSlots' => $bookingTimeSlot, 'result' => 'success']);
            }
            return response()->json(['timeSlots' => timeSlot($request->service, $request->date, $flexible_data, $service_data), 'result' => 'success']);
        } else {
            return response()->json(['result' => 'error']);
        }
    }


    public function appointmentForm(Request $request,  $slug = null, $appointment = null)
    {
        $slug = $request->slug;

        $business = Business::where('slug', $slug)->first();
        if ($business) {
            $services = Service::where('business_id', $business->id)->get();
            $locations = Location::where('business_id', $business->id)->get();
            $staffs = Staff::where('business_id', $business->id)->get();

            if (module_is_active('FlexibleDays', $business->created_by)) {
                $busineshours = FlexibleStaffHours::where('created_by', $business->created_by)
                    ->where('business_id', $business->id)
                    ->where('day_off', 'on')
                    ->select('day_name')
                    ->get()
                    ->pluck('day_name')
                    ->map(function ($day) {
                        return date('w', strtotime($day));
                    })
                    ->toArray();
            } elseif (module_is_active('ServiceSlotScheduler', $business->created_by) && !module_is_active('FlexibleDays', $business->created_by)) {
                $busineshours = ServiceScheduleDay::where('created_by', $business->created_by)
                    ->where('business_id', $business->id)
                    ->where('day_off', 'on')
                    ->select('day_name')
                    ->get()
                    ->pluck('day_name')
                    ->map(function ($day) {
                        return date('w', strtotime($day));
                    })
                    ->toArray();
            } else {
                $busineshours = BusinessHours::where('created_by', $business->created_by)
                    ->where('business_id', $business->id)
                    ->where('day_off', 'on')
                    ->select('day_name')
                    ->get()
                    ->pluck('day_name')
                    ->map(function ($day) {
                        return date('w', strtotime($day));
                    })
                    ->toArray();
            }
            $businesholiday = BusinessHoliday::where('created_by', $business->created_by)
                ->where('business_id', $business->id)
                ->pluck('date')
                ->map(function ($date) {
                    return Carbon::parse($date)->format('d-m-Y');
                })
                ->toArray();
            // $combinedArray = array_merge($busineshours, $businesholiday);
            $combinedArray = $busineshours;
            $files = File::where('business_id', $business->id)->where('created_by', $business->created_by)->first();

            $company_settings = getCompanyAllSetting($business->created_by, $business->id);
            $bookingModes = isset($company_settings['booking_mode']) ? explode(',', $company_settings['booking_mode']) : [];
            $customCss = isset($company_settings['custom_css']) ? $company_settings['custom_css'] : null;
            $customJs = isset($company_settings['custom_js']) ? $company_settings['custom_js'] : null;

            $custom_field = company_setting('custom_field_enable', $business->created_by, $business->id);

            $excludedTypes = ['checkbox', 'radio', 'time', 'select'];
            $custom_fields = CustomField::where('created_by', $business->created_by)
                ->where('business_id',  $business->id)
                ->whereNotIn('type', $excludedTypes)
                ->get();
            $options = [];
            foreach ($custom_fields as $customs) {
                if ($customs->type == 'checkbox' || $customs->type == 'radio' || $customs->type == 'select') {
                    $options[$customs->id] = json_decode($customs->option, true) ?? [];
                } else {
                    $options[$customs->id] = []; // Initialize empty array for non-checkbox fields
                }
            }

            $workingDays = BusinessHours::where('created_by', $business->created_by)
                ->where('business_id', $business->id)
                ->get();
            $pixelScript = [];
            if (module_is_active('TrackingPixel', $business->created_by)) {
                $pixels = PixelFields::where('created_by', $business->created_by)->where('business_id', $business->id)->get();
                foreach ($pixels as $pixel) {
                    $pixelScript[] = pixelSourceCode($pixel['platform'], $pixel['pixel_id']);
                }
            }
            if (!empty($appointment)) {
                $appointments = Appointment::find($appointment);
                if (!empty($appointments)) {
                    $number =  Appointment::appointmentNumberFormat($appointment, $business->created_by, $business->id);
                }
                if ($appointment != 'failed' && $appointments != null && (strpos($number, isset($company_settings['appointment_prefix']) ? $company_settings['appointment_prefix'] : '#APP') === 0)) {
                    $appointment_number = $number;
                } elseif ($appointment == 'failed') {
                    $appointment_number = 'failed';
                } else {
                    $appointment_number = '';
                }
            } else {
                $appointment_number = '';
            }
            if ($business->form_type == 'form-layout') {
                return view('form_layout.' . $business->layouts . '.index', compact('slug', 'business', 'services', 'locations', 'staffs', 'customCss', 'customJs', 'combinedArray', 'files', 'custom_field', 'custom_fields', 'options', 'businesholiday', 'appointment_number', 'pixelScript', 'company_settings','bookingModes'));
            } else {

                $module = $business->layouts;


                if (module_is_active($business->layouts, $business->created_by)) {
                    $themeSetting = ThemeSetting::where('theme', $module)->where('business_id', $business->id)->pluck('value', 'key');
                    $testimonials = Testimonial::where('business_id', $business->id)->where('theme', $module)->get();
                    $blogs = Blog::where('business_id', $business->id)->where('theme', $module)->get();
                    $modules = Module::find($business->layouts);

                    return view($modules->package_name . '::form_layout.index', compact('slug', 'business', 'services', 'locations', 'staffs', 'customCss', 'customJs', 'combinedArray', 'files', 'custom_field', 'custom_fields', 'options', 'module', 'themeSetting', 'workingDays', 'testimonials', 'blogs', 'businesholiday', 'appointment_number', 'pixelScript', 'company_settings','bookingModes'));
                } else {
                    return view('web_layouts.module_not_found', compact('module'));
                    //    return redirect()->back()->with('error', __('please activate this module '.$business->layouts));
                }
            }
        }

        // return view('embeded_appointment.index',compact('slug','business','services','locations','staffs','customCss','customJs','combinedArray','files','custom_field','custom_fields'));
    }



    public function appointmentFormSubmit(Request $request)
    {
       
        $business = Business::find($request->business_id);
        $service = Service::find($request->service);

        if (module_is_active('CompoundService', $business->created_by) && $service->service_type == 'compound') {
            $data = CompoundUtility::storeCompoundService($request->all());
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $data]);
            return response()->json(['status' => 'success', 'message' => 'The Payment has been added successfully.' ,'url' => $redirecturl]);
        }
        if (module_is_active('CollaborativeServices', $business->created_by) && $service->service_type == 'collaborative') {
            $data = CollaborativeServiceUtility::storeCollaborativeService($request->all());
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $data]);
            return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' ,'url' => $redirecturl]);
        }
        if (module_is_active('ShoppingCart', $business->created_by) && $request->has('selectedCartIds')) {
            $data = ShoppingCart::Appointments($request->all());
            $business = Business::find($request->business_id);
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $data['appointment_id']]);
            return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
        }

        if (module_is_active('TeamBooking', $business->created_by) && $request->person) {
            $data = TeamBooking::teamBooking($request->all());
            $business = Business::find($request->business_id);
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $data]);
            return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
        }

        if (module_is_active('BulkAppointments', $business->created_by) && $request->quantity) {
            $data = BulkAppointment::bulkAppointment($request->all());
            $business = Business::find($request->business_id);
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $data]);
            return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
        }
        if (!empty($request->service) && !empty($request->staff) && !empty($request->appointment_date) && !empty($request->email) && !empty($request->business_id) && !empty($request->payment)) {
            $service = Service::find($request->service);

            if (module_is_active('RepeatAppointments', $business->created_by)) {
                if (!empty($request->date) && !empty($request->booked_slot)) {
                    $event = Utility::RepeatAppointmentStore($request->all());
                    $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $event]);
                    return response()->json(['status' => 'success', 'message' => 'The Payment has been added successfully.' ,'url' => $redirecturl]);
                }
            }
            if (module_is_active('SequentialAppointment', $business->created_by) && $request->sequential_services) {
                $sequential_utility = SequentialUtility::storeSequentialAppointment($request->all());
                $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $sequential_utility]);
                return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
            }

            if ($request->hasFile('attachment')) {
                $filenameWithExt = $request->file('attachment')->getClientOriginalName();
                $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension       = $request->file('attachment')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;

                $uplaod = upload_file($request, 'attachment', $fileNameToStore, 'Appointment');
                if ($uplaod['flag'] == 1) {
                    $url = $uplaod['url'];
                } else {
                    return response()->json(['status' => 'error', 'message' => 'The Payment has been added successfully.' ,'error' => $uplaod['msg']]);
                }
            }

            if ($request->type == 'new-user') {
                $roles = Role::where('name', 'customer')->where('created_by', $business->created_by)->first();
                if ($roles) {
                    $user = User::create(
                        [
                            'name' => !empty($request->name) ? $request->name : null,
                            'email' => !empty($request->email) ? $request->email : null,
                            'mobile_no' => !empty($request->contact) ? $request->contact : null,
                            'email_verified_at' => date('Y-m-d h:i:s'),
                            'password' => !empty($request->password) ? Hash::make($request->password) : null,
                            'avatar' => 'uploads/users-avatar/avatar.png',
                            'type' => 'customer',
                            'lang' => 'en',
                            'business_id' => $business->id,
                            'created_by' => $business->created_by,
                        ]
                    );
                    $user->addRole($roles);

                    $customer                      = new Customer();
                    $customer->name                = $request->name;
                    $customer->user_id             = $user->id;
                    $customer->gender              = !empty($request->gender) ? $request->gender : '';
                    $customer->dob                 = !empty($request->dob) ? $request->dob : '';
                    $customer->description         = !empty($request->description) ? $request->description : '';
                    $customer->business_id         = $user->business_id;
                    $customer->created_by          = $user->created_by;
                    $customer->save();
                }
            }

            if ($request->type == 'existing-user') {
                $email = $request->email;
                $user = User::where('email', $email)->where('type', 'customer')->first();
                if (!empty($request->password) && !empty($user)) {
                    $check_password = Hash::check($request->password, $user->password);
                    if ($check_password) {
                        $customer = Customer::where('user_id', $user->id)->first();
                    } else {
                        return response()->json(['status' => 'error','message' => 'The Payment has been added successfully.' , 'error' => 'Enter correct password']);
                    }
                } else {
                    return response()->json(['status' => 'error', 'message' => 'The Payment has been added successfully.' ,'error' => 'Please enter valid email']);
                }
            }

            $default_status = company_setting('default_status', $business->created_by, getActiveBusiness());
            
            $Appointment                   = new Appointment();
            if ($request->type == 'new-user' || $request->type == 'existing-user') {
                $Appointment->customer_id      = !empty($customer) ? $customer->user_id : null;
            } else {
                $Appointment->customer_id      = !empty($request->customer) ? $request->customer : null;
            }
            $Appointment->location_id      = $request->location;
            $Appointment->service_id       = $request->service;
            $Appointment->staff_id         = $request->staff;

            if ($request->type == 'guest-user') {
                $Appointment->name         = $request->name;
                $Appointment->email         = $request->email;
                $Appointment->contact         = $request->contact;
            }

            $Appointment->date             = !empty($request->appointment_date) ? $request->appointment_date : '';
            $Appointment->time             = !empty($request->duration) ? $request->duration : '';
            $Appointment->notes            = !empty($request->notes) ? $request->notes : '';
            $Appointment->payment_type      = !empty($request->payment) ? $request->payment : 'Manually';
            $Appointment->appointment_status  = !empty($default_status) ? $default_status : 'Pending';
            $Appointment->attachment           = !empty($request->attachment) ? $url : null;

            $customFieldValues = [];
            $custom_field = company_setting('custom_field_enable', $business->created_by, $business->id);
            // Process the values from the request
            if (!empty($custom_field) && $custom_field == 'on') {
                foreach ($request->values as $type => $fields) {
                    foreach ($fields as $label => $value) {
                        if (is_array($value)) {
                            if ($type === 'checkbox') {
                                $customFieldValues[$label] = implode(',', $value);
                            } else {
                                $customFieldValues[$label] = json_encode($value);
                            }
                        } else {
                            $customFieldValues[$label] = $value;
                        }
                    }
                }
            }
            $Appointment->custom_field = !empty($customFieldValues) ? json_encode($customFieldValues) : null;

            $Appointment->business_id      = $business->id;
            $Appointment->created_by       = $business->created_by;
            $Appointment->save();

            if (module_is_active('FlexibleHours', $business->created_by) && isset($request->flexible_id)) {
                $flexible_hour = FlexibleHour::find($request->flexible_id);
            }

            $final_amount = $service->price;

            $promo_code_id = 0;
            $after_promo_price = 0;
            if (module_is_active('PromoCodes') && $request->promo_code_id != null) {
                $promo_code_id = $request->promo_code_id;
            }
            if (module_is_active('PromoCodes') && $request->after_promo_price != null) {
                $after_promo_price = $service->price - $request->after_promo_price;
                $final_amount = $service->price - $after_promo_price;
            }

            if (module_is_active('PromoCodes') && module_is_active('ServiceTax')) {
                $after_promo_price = $service->price - $request->service_price;
                $final_amount = $request->final_amount;
            }

            if (module_is_active('FlexibleHours', $business->created_by) && isset($request->flexible_id)) {
                $flexible_hour = FlexibleHour::find($request->flexible_id);
            }

            if (module_is_active('Discount', $business->created_by) && isset($request->discount_amount)) {
                $final_amount = $service->price - $request->discount_amount;
            }

            $payment = AppointmentPayment::create([
                'appointment_id' => $Appointment->id,
                'payment_type' => $Appointment->payment_type,
                'amount' => module_is_active('FlexibleHours', $business->id) && !empty($flexible_hour) ? $flexible_hour->price : $service->price,
                'payment_date' => now(),
                'business_id' => $business->id,
                'created_by' => $business->created_by,
            ]);

            event(new AppointmentPaymentData($request->all(), $payment, $service));

            if (module_is_active('AdditionalServices', $business->created_by) && isset($request->additional_service) && isset($request->additional_service_price)) {
                event(new AdditionalServicePayment($request->all(), $payment, $service));
            }


            $appointment_number = Appointment::appointmentNumberFormat($Appointment->id, $business->created_by, $business->id);

            $company_settings = getCompanyAllSetting($Appointment->created_by, $Appointment->business_id);
            $customCss = isset($company_settings['custom_css']) ? $company_settings['custom_css'] : null;
            $customJs = isset($company_settings['custom_js']) ? $company_settings['custom_js'] : null;

            event(new CreateAppoinment($Appointment, $request));

            //Email notification
            if ((!empty($company_settings['Create Appointment']) && $company_settings['Create Appointment']  == true)) {
                $uArr = [
                    'company_name' => $request->input('name'),
                    'service' => $Appointment->ServiceData ? $Appointment->ServiceData->name : '-',
                    'location' => $Appointment->LocationData ? $Appointment->LocationData->name : '-',
                    'staff' => $Appointment->StaffData->user ? $Appointment->StaffData->user->name : '-',
                    'appointment_date' => $Appointment->date,
                    'appointment_time' => $Appointment->time,
                    'appointment_number' => $appointment_number,
                ];
                $resp = EmailTemplate::sendEmailTemplate('Create Appointment', [$Appointment->CustomerData ? $Appointment->CustomerData->customer->email : $Appointment->email], $uArr, $Appointment->created_by);

                $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $Appointment->id]);
                return response()->json(['status' => 'success', 'message' => 'The Payment has been added successfully.' ,'url' => $redirecturl]);
            }

            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => $Appointment->id]);
            return response()->json(['status' => 'success','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
        } else {
            $redirecturl = route("appointments.form", ["slug" => $business->slug, "appointment" => 'failed']);
            return response()->json(['status' => 'failed','message' => 'The Payment has been added successfully.' , 'url' => $redirecturl]);
        }
    }

    public function appointmentStatusChange($id)
    {
        $appointment = Appointment::find($id);

        $CustomStatus = CustomStatus::where('created_by', creatorId())->where('business_id', getActiveBusiness())->pluck('title', 'id')->prepend('Pending', '0');

        if (module_is_active('WaitingList') && $appointment->appointment_status == 'Waiting List') {
            $CustomStatus = CustomStatus::where('created_by', creatorId())->where('business_id', getActiveBusiness())->pluck('title', 'id')->prepend('Waiting List', '0');
        }

        return view('appointment.change-status', compact('appointment', 'CustomStatus'));
    }

    public function appointmentStatusUpdate(Request $request)
    {

        $appointment = Appointment::find($request->appointment_id);
        $appointment->appointment_status =  $request->status;
        $appointment->save();

        $appointment_number = Appointment::appointmentNumberFormat($appointment->id, $appointment->created_by, $appointment->business_id);
        //Email notification
        $company_settings = getCompanyAllSetting();


        event(new AppointmentStatus($appointment, $request));


        if ((!empty($company_settings['Appointment Status Change']) && $company_settings['Appointment Status Change']  == true)) {
            $uArr = [
                'company_name' => $request->input('name'),
                'service' => $appointment->ServiceData ? $appointment->ServiceData->name : '-',
                'appointment_date' => $appointment->date,
                'appointment_time' => $appointment->time,
                'appointment_number' => $appointment_number,
            ];

            $resp = EmailTemplate::sendEmailTemplate('Appointment Status Change', [$appointment->CustomerData ? $appointment->CustomerData->customer->email : $appointment->email], $uArr);

            // return redirect()->route('appointment.index')->with('success', __('Appointment successfully created.'). ((!empty($resp) && $resp['is_success'] == false && !empty($resp['error'])) ? '<br> <span class="text-danger">' . $resp['error'] . '</span>' : ''));
            return redirect()->back()->with('success', __('Appointment status change successfully.') . ((!empty($resp) && $resp['is_success'] == false && !empty($resp['error'])) ? '<br> <span class="text-danger">' . $resp['error'] . '</span>' : ''));
        }


        return redirect()->back()->with('success', __('Appointment status change successfully.'));
    }

    public function appointmentDone(Request $request, $slug, $id)
    {
        $appointment = Appointment::find($id);
        if (!empty($appointment)) {
            $company_settings = getCompanyAllSetting($appointment->created_by, $appointment->business_id);
            $customCss = isset($company_settings['custom_css']) ? $company_settings['custom_css'] : null;
            $customJs = isset($company_settings['custom_js']) ? $company_settings['custom_js'] : null;

            $appointment_number = Appointment::appointmentNumberFormat($appointment->id, $appointment->created_by, $appointment->business_id);

            //Email notification
            if ((!empty($company_settings['Create Appointment']) && $company_settings['Create Appointment']  == true)) {
                $uArr = [
                    'company_name' => $request->input('name'),
                    'service' => $appointment->ServiceData ? $appointment->ServiceData->name : '-',
                    'location' => $appointment->LocationData ? $appointment->LocationData->name : '-',
                    'staff' => $appointment->StaffData->user ? $appointment->StaffData->user->name : '-',
                    'appointment_date' => $appointment->date,
                    'appointment_time' => $appointment->time,
                    'appointment_number' => $appointment_number,
                ];
                $resp = EmailTemplate::sendEmailTemplate('Create Appointment', [$appointment->CustomerData ? $appointment->CustomerData->customer->email : $appointment->email], $uArr, $appointment->created_by);
                return view('embeded_appointment.appointment', compact('appointment_number', 'slug', 'customCss', 'customJs'))->with('success', __('Appointment successfully created.') . ((!empty($resp) && $resp['is_success'] == false && !empty($resp['error'])) ? '<br> <span class="text-danger">' . $resp['error'] . '</span>' : ''));
            }
            return view('embeded_appointment.appointment', compact('appointment_number', 'slug', 'customCss', 'customJs'));
        }
    }

    public function appointmentCalendar(Request $request)
    {
        $appointments = [];
        $type = [];
        $type = 'appointment';

        if ($request->get('calendar_type') == 'google_calendar') {
            $appointments = CalendarUtility::getCalendarData($type);
            $weekStartDay = company_setting('week_start_day', auth()->user()->id, getActiveBusiness());
            $weekStartDay = isset($weekStartDay) ? $weekStartDay : '0';
            if (isset($appointments['error'])) {
                return redirect()->back()->with('error', $appointments['error']);
            }
        } elseif ($request->get('calendar_type') == 'outlook_calendar') {
            $appointments = OutlookUtility::getOutlookCalendarData($type);
            $weekStartDay = company_setting('week_start_day', auth()->user()->id, getActiveBusiness());
            $weekStartDay = isset($weekStartDay) ? $weekStartDay : '0';
            if (isset($appointments['error'])) {
                return redirect()->back()->with('error', $appointments['error']);
            }
        } else {
            if ($type == "appointment" || $type == null  || $type == []) {
                $appointments = Appointment::where('business_id', getActiveBusiness())->where('created_by', creatorId())->get();

                $appointments = $appointments->map(function ($appointment) {
                    $carbonDate = Carbon::parse($appointment['date']);
                    $appointment['title'] = $appointment['time'];
                    $appointment['start'] = $carbonDate->format('Y-m-d');
                    $appointment['end'] = $carbonDate->format('Y-m-d');
                    $appointment['time'] = $appointment['time'];
                    $appointment['url'] = route('appointment.details', $appointment->id);
                    return $appointment;
                });

                $weekStartDay = company_setting('week_start_day', auth()->user()->id, getActiveBusiness());
                $weekStartDay = isset($weekStartDay) ? $weekStartDay : '0';
            } else {
                unset($type['appointment']);
            }
        }
        return view('appointment.calendar', compact('appointments', 'weekStartDay'));
    }

    public function appointmentDetails($id)
    {
        $appointments = Appointment::find($id);
        return view('appointment.appointment_details', compact('appointments'));
    }

    public function appointmentAttachmentDelete($id)
    {
        $appointment = Appointment::find($id);

        if (!empty($appointment->attachment)) {
            delete_file($appointment->$appointment);
            $appointment->attachment = null;
            $appointment->save();
        }
        return redirect()->back()->with('error', __('Attachment successfully delete.'));
    }

    public function appointmentRtlSetting(Request $request)
    {
        $status = $request->status;
        Cookie::queue('THEME_RTL', $status, 120);

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function checkUser(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->where('type', 'customer')->first();
        if (!empty($request->password) && !empty($user)) {
            $check_password = Hash::check($request->password, $user->password);
            if ($check_password) {
                $customer = Customer::where('user_id', $user->id)->first();
            } else {
                return response()->json(['status' => 'error','message' => 'Enter correct password.']);
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Please enter valid email.']);
        }
    }

}
