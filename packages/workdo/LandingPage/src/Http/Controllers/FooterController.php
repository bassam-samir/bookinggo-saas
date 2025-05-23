<?php

namespace Workdo\LandingPage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Workdo\LandingPage\Entities\LandingPageSetting;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
 
    public function index()
    {
        if(Auth::user()->isAbleTo('landingpage manage')){

            $settings = LandingPageSetting::settings();
            $footer_sections_details = json_decode($settings['footer_sections_details'], true) ?? [];
            return view('landing-page::landingpage.footer.index', compact('settings','footer_sections_details'));
        }else{

            return redirect()->back()->with('error',__('Permission Denied!'));
        }
    }

    public function create()
    {
        return view('landing-page::footer.create');
    }


    public function store(Request $request)
    {
        
        $data['footer_status']= 'on';

        $data['all_rights_reserve_text']= $request->all_rights_reserve_text;
        $data['all_rights_reserve_website_name']= $request->all_rights_reserve_website_name;
        $data['all_rights_reserve_website_url']= $request->all_rights_reserve_website_url;
        $data['footer_live_demo_link']= $request->footer_live_demo_link;
        $data['footer_gotoshop_button_text']= $request->footer_gotoshop_button_text;
        $data['footer_support_link']= $request->footer_support_link;
        $data['footer_support_button_text']= $request->footer_support_button_text;
        $data['footer_description']= $request->footer_description;

        if( $request->footer_logo){
            $footer_logo = time()."-footer_logo." . $request->footer_logo->getClientOriginalExtension();
            $dir        = 'uploads/landing_page_image';
            $path = upload_file($request,'footer_logo',$footer_logo,'landing_page_image',[]);
            if($path['flag']==0){
                return redirect()->back()->with('error', __($path['msg']));
            }

            // old img delete
            if(!empty($data['footer_logo']) && strpos($data['footer_logo'],'avatar.png') == false && check_file($data[$key]['footer_logo']))
            {
                delete_file($data[$key]['footer_logo']);
            }

            $data['footer_logo'] = $path['url'];
        }

        foreach($data as $key => $value){

            LandingPageSetting::updateOrCreate(['name' =>  $key],['value' => $value]);
        }

        return redirect()->back()->with(['success'=> 'Setting update successfully']);
    }

    public function show($id)
    {
        return view('landing-page::footer.show');
    }


    public function edit($id)
    {
        return view('landing-page::footer.edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function footer_section_create()
    {

        return view('landing-page::landingpage.custom.footer.section_create');

    }
    public function footer_section_store(Request $request)
    {
        $settings = LandingPageSetting::settings();
        $data = json_decode($settings['footer_sections_details'], true);

        $datas['footer_section_heading']= $request->footer_section_heading;
        $datas['footer_section_text']= $request->footer_section_text;

        $data[] = $datas;
        $data = json_encode($data);
        LandingPageSetting::updateOrCreate(['name' =>  'footer_sections_details'],['value' => $data]);

        return redirect()->back()->with(['success'=> 'Footer Section Added successfully']);
    }
    public function footer_section_edit($key)
    {
        $settings = LandingPageSetting::settings();
        $footer_sections = json_decode($settings['footer_sections_details'], true);
        $footer_section = $footer_sections[$key];

        return view('landing-page::landingpage.custom.footer.section_edit',compact('footer_section','key'));

    }
    public function footer_section_update(Request $request , $key)
    {
        $settings = LandingPageSetting::settings();
        $data = json_decode($settings['footer_sections_details'], true);

        $data[$key]['footer_section_heading']= $request->footer_section_heading;
        $data[$key]['footer_section_text']= $request->footer_section_text;

        $data = json_encode($data);
        LandingPageSetting::updateOrCreate(['name' =>  'footer_sections_details'],['value' => $data]);

        return redirect()->back()->with(['success'=> 'Footer Section update successfully']);
    }
    public function footer_section_delete($key)
    {
        $settings = LandingPageSetting::settings();
        $pages = json_decode($settings['footer_sections_details'], true);
        unset($pages[$key]);
        LandingPageSetting::updateOrCreate(['name' =>  'footer_sections_details'],['value' => $pages]);
        return redirect()->back()->with(['success'=> 'Footer Section delete successfully']);
    }
}
