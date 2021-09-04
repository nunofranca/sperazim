<?php

namespace App\Http\Controllers\Admin;


use App\Models\Setting;
use App\Models\Language;
use Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
   public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function basicinfo(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;
        $basicinfo = Setting::where('language_id', $lang)->first();

        return view('admin.settings.basicinfo', compact('basicinfo'));
    }

   //  Theme Version
   public function theme_version(){
      return view('admin.settings.theme.index');
   }

   public function update_theme_version(Request $request) {
		$setting = Setting::first();
		$setting->theme_version = $request->theme_version;
		$setting->save();

      $notification = array(
         'messege' => $request->theme_version.' version activated successfully!',
         'alert' => 'success'
     );
     return redirect()->back()->with('notification', $notification);
   }

    // Update SEO Information
    public function seoinfo(Request $request){
      $lang = Language::where('code', $request->language)->first()->id;
      $seo = Setting::where('language_id', $lang)->first();
       return view('admin.settings.seo', compact('seo'));
    }

    public function updateSeoinfo(Request $request, $id){
      
      $seo = Setting::where('language_id', $id)->first();

      $seo->meta_keywords = $request->meta_keywords;
      $seo->meta_description = $request->meta_description;
      $seo->save();

      $notification = array(
         'messege' => 'SEO Info Updated Successfully!',
         'alert' => 'success'
     );
     return redirect(route('admin.seoinfo').'?language='.$this->lang->code)->with('notification', $notification);

   }

   // Update General Settings
   public function gsettings(){
      return view('admin.settings.gsettings');
   }

   // Update Scripts
   public function scripts(){
      return view('admin.settings.scripts');
   }

   public function updateScripts(Request $request){

    

      $scriptsettings = Setting::first();


      $scriptsettings->disqus = $request->disqus;
      $scriptsettings->tawk_to = $request->tawk_to;
      $scriptsettings->google_analytics = $request->google_analytics;
      $scriptsettings->google_recaptcha_site_key = $request->google_recaptcha_site_key;
      $scriptsettings->google_recaptcha_secret_key = $request->google_recaptcha_secret_key;

      
      
      if($request->is_tawk_to == 'on'){
         $scriptsettings->is_tawk_to = 1;
      }else{
         $scriptsettings->is_tawk_to = 0;
      }

      if($request->is_disqus == 'on'){
         $scriptsettings->is_disqus = 1;
      }else{
         $scriptsettings->is_disqus = 0;
      }

      if($request->is_google_analytics == 'on'){
         $scriptsettings->is_google_analytics = 1;
      }else{
         $scriptsettings->is_google_analytics = 0;
      }

      if($request->is_recaptcha == 'on'){
         $scriptsettings->is_recaptcha = 1;
      }else{
         $scriptsettings->is_recaptcha = 0;
      }

      $scriptsettings->save();

      $notification = array(
         'messege' => 'Scripts Updated Successfully!',
         'alert' => 'success'
     );
     return redirect()->back()->with('notification', $notification);
     
   }

   public function updateBasicinfo(Request $request, $id){

   
      $request->validate([
         'website_title' => 'required|max:250',
         'base_color' => 'required',
         'header_logo' => 'mimes:jpeg,jpg,png',
         'fav_icon' => 'mimes:jpeg,jpg,png',
         'breadcrumb_image' => 'mimes:jpeg,jpg,png'
       ]);
  
  
      $basicinfo = Setting::where('language_id', $id)->first();


      if($request->hasFile('header_logo')){
         @unlink('assets/front/img/'. $basicinfo->header_logo);
         $file = $request->file('header_logo');
         $extension = $file->getClientOriginalExtension();
         $header_logo = 'header_logo_'.time().rand().'.'.$extension;
         $file->move('assets/front/img/', $header_logo);
         $basicinfo->header_logo = $header_logo;
     }
     
      if($request->hasFile('fav_icon')){
         @unlink('assets/front/img/'. $basicinfo->fav_icon);
         $file = $request->file('fav_icon');
         $extension = $file->getClientOriginalExtension();
         $fav_icon = 'fav_icon_'.time().rand().'.'.$extension;
         $file->move('assets/front/img/', $fav_icon);
         $basicinfo->fav_icon = $fav_icon;
     }

      if($request->hasFile('breadcrumb_image')){
         @unlink('assets/front/img/'. $basicinfo->breadcrumb_image);
         $file = $request->file('breadcrumb_image');
         $extension = $file->getClientOriginalExtension();
         $breadcrumb_image = 'breadcrumb_image_'.'.'.$extension;
         $file->move('assets/front/img/', $breadcrumb_image);
         $basicinfo->breadcrumb_image = $breadcrumb_image;
     }

       $basicinfo->website_title = $request->website_title;

       $new_base_color = ltrim($request->base_color, '#');
       $basicinfo->base_color = $new_base_color;

       $basicinfo->save();


      $notification = array(
            'messege' => 'Basic Info Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.basicinfo').'?language='.$this->lang->code)->with('notification', $notification);
   }

   // Page Visibility 
   public function pagevisibility(){
      return view('admin.settings.page-visibility');
   }

   public function updatepagevisibility(Request $request){

      $pagevisibility = Setting::first();


	   if($request->is_t1_slider_section == 'on'){
		   $pagevisibility->is_t1_slider_section = 1;
	   }else{
		   $pagevisibility->is_t1_slider_section = 0;
      }

	   if($request->is_t1_who_we_are_section == 'on'){
		   $pagevisibility->is_t1_who_we_are_section = 1;
	   }else{
		   $pagevisibility->is_t1_who_we_are_section = 0;
      }

	   if($request->is_t1_intro_video_section == 'on'){
		   $pagevisibility->is_t1_intro_video_section = 1;
	   }else{
		   $pagevisibility->is_t1_intro_video_section = 0;
      }

	   if($request->is_t1_service_section == 'on'){
		   $pagevisibility->is_t1_service_section = 1;
	   }else{
		   $pagevisibility->is_t1_service_section = 0;
      }

	   if($request->is_t1_why_choose_us_section == 'on'){
		   $pagevisibility->is_t1_why_choose_us_section = 1;
	   }else{
		   $pagevisibility->is_t1_why_choose_us_section = 0;
      }

	   if($request->is_t1_portfolio_section == 'on'){
		   $pagevisibility->is_t1_portfolio_section = 1;
	   }else{
		   $pagevisibility->is_t1_portfolio_section = 0;
      }

	   if($request->is_t1_testimonial_section == 'on'){
		   $pagevisibility->is_t1_testimonial_section = 1;
	   }else{
		   $pagevisibility->is_t1_testimonial_section = 0;
      }

	   if($request->is_t1_team_section == 'on'){
		   $pagevisibility->is_t1_team_section = 1;
	   }else{
		   $pagevisibility->is_t1_team_section = 0;
      }

	   if($request->is_t1_contact_section == 'on'){
		   $pagevisibility->is_t1_contact_section = 1;
	   }else{
		   $pagevisibility->is_t1_contact_section = 0;
      }

	   if($request->is_t1_faq_counter_section == 'on'){
		   $pagevisibility->is_t1_faq_counter_section = 1;
	   }else{
		   $pagevisibility->is_t1_faq_counter_section = 0;
      }

	   if($request->is_t1_meet_us_section == 'on'){
		   $pagevisibility->is_t1_meet_us_section = 1;
	   }else{
		   $pagevisibility->is_t1_meet_us_section = 0;
      }

	   if($request->is_t1_blog_section == 'on'){
		   $pagevisibility->is_t1_blog_section = 1;
	   }else{
		   $pagevisibility->is_t1_blog_section = 0;
      }

	   if($request->is_t1_clint_section == 'on'){
		   $pagevisibility->is_t1_clint_section = 1;
	   }else{
		   $pagevisibility->is_t1_clint_section = 0;
      }

	   if($request->is_t2_hero_section == 'on'){
		   $pagevisibility->is_t2_hero_section = 1;
	   }else{
		   $pagevisibility->is_t2_hero_section = 0;
      }

	   if($request->is_t2_about_section == 'on'){
		   $pagevisibility->is_t2_about_section = 1;
	   }else{
		   $pagevisibility->is_t2_about_section = 0;
      }

	   if($request->is_t2_service_section == 'on'){
		   $pagevisibility->is_t2_service_section = 1;
	   }else{
		   $pagevisibility->is_t2_service_section = 0;
      }

	   if($request->is_t2_intro_video_section == 'on'){
		   $pagevisibility->is_t2_intro_video_section = 1;
	   }else{
		   $pagevisibility->is_t2_intro_video_section = 0;
      }

	   if($request->is_t2_team_section == 'on'){
		   $pagevisibility->is_t2_team_section = 1;
	   }else{
		   $pagevisibility->is_t2_team_section = 0;
      }

	   if($request->is_t2_counter_section == 'on'){
		   $pagevisibility->is_t2_counter_section = 1;
	   }else{
		   $pagevisibility->is_t2_counter_section = 0;
      }

	   if($request->is_t2_testimonial_section == 'on'){
		   $pagevisibility->is_t2_testimonial_section = 1;
	   }else{
		   $pagevisibility->is_t2_testimonial_section = 0;
      }

	   if($request->is_t2_contact_section == 'on'){
		   $pagevisibility->is_t2_contact_section = 1;
	   }else{
		   $pagevisibility->is_t2_contact_section = 0;
      }

	   if($request->is_t2_faq_section == 'on'){
		   $pagevisibility->is_t2_faq_section = 1;
	   }else{
		   $pagevisibility->is_t2_faq_section = 0;
      }

	   if($request->is_t2_quote_section == 'on'){
		   $pagevisibility->is_t2_quote_section = 1;
	   }else{
		   $pagevisibility->is_t2_quote_section = 0;
      }

	   if($request->is_t2_news_section == 'on'){
		   $pagevisibility->is_t2_news_section = 1;
	   }else{
		   $pagevisibility->is_t2_news_section = 0;
      }

	   if($request->is_t2_client_section == 'on'){
		   $pagevisibility->is_t2_client_section = 1;
	   }else{
		   $pagevisibility->is_t2_client_section = 0;
      }

	   if($request->is_t3_hero_section == 'on'){
		   $pagevisibility->is_t3_hero_section = 1;
	   }else{
		   $pagevisibility->is_t3_hero_section = 0;
      }

	   if($request->is_t3_service_section == 'on'){
		   $pagevisibility->is_t3_service_section = 1;
	   }else{
		   $pagevisibility->is_t3_service_section = 0;
      }

	   if($request->is_t3_portfolio_section == 'on'){
		   $pagevisibility->is_t3_portfolio_section = 1;
	   }else{
		   $pagevisibility->is_t3_portfolio_section = 0;
      }

	   if($request->is_t3_testimonial_section == 'on'){
		   $pagevisibility->is_t3_testimonial_section = 1;
	   }else{
		   $pagevisibility->is_t3_testimonial_section = 0;
      }

	   if($request->is_t3_faq_section == 'on'){
		   $pagevisibility->is_t3_faq_section = 1;
	   }else{
		   $pagevisibility->is_t3_faq_section = 0;
      }

	   if($request->is_t3_team_section == 'on'){
		   $pagevisibility->is_t3_team_section = 1;
	   }else{
		   $pagevisibility->is_t3_team_section = 0;
      }

	   if($request->is_t3_meet_us_section == 'on'){
		   $pagevisibility->is_t3_meet_us_section = 1;
	   }else{
		   $pagevisibility->is_t3_meet_us_section = 0;
      }

	   if($request->is_t3_news_section == 'on'){
		   $pagevisibility->is_t3_news_section = 1;
	   }else{
		   $pagevisibility->is_t3_news_section = 0;
      }

	   if($request->is_t3_client_section == 'on'){
		   $pagevisibility->is_t3_client_section = 1;
	   }else{
		   $pagevisibility->is_t3_client_section = 0;
      }

	   if($request->is_t4_hero_section == 'on'){
		   $pagevisibility->is_t4_hero_section = 1;
	   }else{
		   $pagevisibility->is_t4_hero_section = 0;
      }

	   if($request->is_t4_client_section == 'on'){
		   $pagevisibility->is_t4_client_section = 1;
	   }else{
		   $pagevisibility->is_t4_client_section = 0;
      }

	   if($request->is_t4_about_section == 'on'){
		   $pagevisibility->is_t4_about_section = 1;
	   }else{
		   $pagevisibility->is_t4_about_section = 0;
      }

	   if($request->is_t4_feature_section == 'on'){
		   $pagevisibility->is_t4_feature_section = 1;
	   }else{
		   $pagevisibility->is_t4_feature_section = 0;
      }

	   if($request->is_t4_who_we_are_section == 'on'){
		   $pagevisibility->is_t4_who_we_are_section = 1;
	   }else{
		   $pagevisibility->is_t4_who_we_are_section = 0;
      }

	   if($request->is_t4_intro_video_section == 'on'){
		   $pagevisibility->is_t4_intro_video_section = 1;
	   }else{
		   $pagevisibility->is_t4_intro_video_section = 0;
      }

	   if($request->is_t4_portfolio_section == 'on'){
		   $pagevisibility->is_t4_portfolio_section = 1;
	   }else{
		   $pagevisibility->is_t4_portfolio_section = 0;
      }

	   if($request->is_t4_counter_section == 'on'){
		   $pagevisibility->is_t4_counter_section = 1;
	   }else{
		   $pagevisibility->is_t4_counter_section = 0;
      }

	   if($request->is_t4_testmonial_section == 'on'){
		   $pagevisibility->is_t4_testmonial_section = 1;
	   }else{
		   $pagevisibility->is_t4_testmonial_section = 0;
      }

	   if($request->is_t4_faq_section == 'on'){
		   $pagevisibility->is_t4_faq_section = 1;
	   }else{
		   $pagevisibility->is_t4_faq_section = 0;
      }

	   if($request->is_t4_contact_section == 'on'){
		   $pagevisibility->is_t4_contact_section = 1;
	   }else{
		   $pagevisibility->is_t4_contact_section = 0;
      }

	   if($request->about_page == 'on'){
		   $pagevisibility->about_page = 1;
	   }else{
		   $pagevisibility->about_page = 0;
      }

	   if($request->service_page == 'on'){
		   $pagevisibility->service_page = 1;
	   }else{
		   $pagevisibility->service_page = 0;
      }

	   if($request->poerfolio_page == 'on'){
		   $pagevisibility->poerfolio_page = 1;
	   }else{
		   $pagevisibility->poerfolio_page = 0;
      }

	   if($request->package_page == 'on'){
		   $pagevisibility->package_page = 1;
	   }else{
		   $pagevisibility->package_page = 0;
      }

	   if($request->team_page == 'on'){
		   $pagevisibility->team_page = 1;
	   }else{
		   $pagevisibility->team_page = 0;
      }

	   if($request->faq_page == 'on'){
		   $pagevisibility->faq_page = 1;
	   }else{
		   $pagevisibility->faq_page = 0;
      }

	   if($request->blog_page == 'on'){
		   $pagevisibility->blog_page = 1;
	   }else{
		   $pagevisibility->blog_page = 0;
      }

	   if($request->contact_page == 'on'){
		   $pagevisibility->contact_page = 1;
	   }else{
		   $pagevisibility->contact_page = 0;
      }

	   if($request->quote_page == 'on'){
		   $pagevisibility->quote_page = 1;
	   }else{
		   $pagevisibility->quote_page = 0;
      }

	   if($request->is_blog_share_links == 'on'){
		   $pagevisibility->is_blog_share_links = 1;
	   }else{
		   $pagevisibility->is_blog_share_links = 0;
      }

	   if($request->is_cooki_alert == 'on'){
		   $pagevisibility->is_cooki_alert = 1;
	   }else{
		   $pagevisibility->is_cooki_alert = 0;
      }

	   if($request->about_about == 'on'){
		   $pagevisibility->about_about = 1;
	   }else{
		   $pagevisibility->about_about = 0;
      }

	   if($request->about_w_w_a == 'on'){
		   $pagevisibility->about_w_w_a = 1;
	   }else{
		   $pagevisibility->about_w_w_a = 0;
      }

	   if($request->about_choose_us == 'on'){
		   $pagevisibility->about_choose_us = 1;
	   }else{
		   $pagevisibility->about_choose_us = 0;
      }

	   if($request->about_history == 'on'){
		   $pagevisibility->about_history = 1;
	   }else{
		   $pagevisibility->about_history = 0;
      }

	   if($request->is_whatsapp == 'on'){
		   $pagevisibility->is_whatsapp = 1;
	   }else{
		   $pagevisibility->is_whatsapp = 0;
      }

	   if($request->is_call_button == 'on'){
		   $pagevisibility->is_call_button = 1;
	   }else{
		   $pagevisibility->is_call_button = 0;
      }



      
      $pagevisibility->save();

      $notification = array(
         'messege' => 'Page visibility Updated Successfully!',
         'alert' => 'success'
     );
     return redirect()->back()->with('notification', $notification);
   }


   // Custom CSS
   public function custom_css()
   {
       $custom_css = '/* Write Custom Css Here */';
       if (file_exists('assets/front/css/dynamic-css.css')) {
           $custom_css = file_get_contents('assets/front/css/dynamic-css.css');
       }
       return view('admin.settings.custom-css')->with(['custom_css' => $custom_css]);
   }

   public function custom_css_update(Request $request)
   {
       file_put_contents('assets/front/css/dynamic-css.css', $request->custom_css_area);

       $notification = array(
         'messege' => 'Custom Style Added Success!',
         'alert' => 'success'
     );
     return redirect()->back()->with('notification', $notification);
   }

   public function maintanance(){
	return view('admin.settings.maintanance');
   }

   public function update_maintanance(Request $request){

	$request->validate([
		'maintainance_text' => 'required',
		'maintainance_image' => 'mimes:jpeg,jpg,png',
	  ]);

	$setting = Setting::first();

	if($request->hasFile('maintainance_image')){
		@unlink('assets/front/img/'. $setting->maintainance_image);
		$file = $request->file('maintainance_image');
		$extension = $file->getClientOriginalExtension();
		$maintainance_image = time().rand().'.'.$extension;
		$file->move('assets/front/img/', $maintainance_image);
		$setting->maintainance_image = $maintainance_image;
	}

	$setting->maintainance_text = $request->maintainance_text;

	if($request->is_maintainance_mode == 'on'){
		$setting->is_maintainance_mode = 1;
	}else{
		$setting->is_maintainance_mode = 0;
    }

	$setting->save();

	if ($request->is_maintainance_mode == 'on') {
		Artisan::call('down');
	} else {
		@unlink('core/storage/framework/down');
	}
	
	$notification = array(
		'messege' => 'Maintainance Mode Updated successfully!',
		'alert' => 'success'
	);
	return redirect()->back()->with('notification', $notification);

   }

   // Announcement Popup
   public function announcement(Request $request)
   {
	$lang = Language::where('code', $request->language)->first()->id;
	$st = Setting::where('language_id', $lang)->first();

	return view('admin.settings.announcement', compact('st'));
   }

   public function update_announcement(Request $request, $id){
	   
	$request->validate([
		'announcement_delay' => 'required',
		'announcement' => 'mimes:jpeg,jpg,png',
	  ]);
 
 
	 $st = Setting::where('language_id', $id)->first();


	 if($request->hasFile('announcement')){
		@unlink('assets/front/img/'. $st->announcement);
		$file = $request->file('announcement');
		$extension = $file->getClientOriginalExtension();
		$announcement = time().rand().'.'.$extension;
		$file->move('assets/front/img/', $announcement);
		$st->announcement = $announcement;
	}

	if ($request->filled('announcement_delay')) {
		$st->announcement_delay = $request->announcement_delay;
	} else {
		$st->announcement_delay = 0.00;
	}

	if($request->is_announcement == 'on'){
		$st->is_announcement = 1;
	}else{
		$st->is_announcement = 0;
    }

	$st->save();


	 $notification = array(
		   'messege' => 'Announcement Info Updated successfully!',
		   'alert' => 'success'
	   );
	   return redirect(route('admin.announcement.index').'?language='.$this->lang->code)->with('notification', $notification);
   }


   public function cookiealert(Request $request)
   {
      $lang = Language::where('code', $request->language)->first()->id;
     
      $data['cookie'] = Setting::where('language_id', $lang)->first();

       return view('admin.settings.cookie', $data);
   }

   public function updatecookie(Request $request, $langid)
   {
       $request->validate([
           'cookie_alert_text' => 'required'
       ]);

       $be = Setting::where('language_id', $langid)->firstOrFail();
       $be->cookie_alert_text = $request->cookie_alert_text;
       $be->save();

       $notification = array(
         'messege' => 'Cookie alert updated successfully!',
         'alert' => 'success'
     );
     return redirect()->back()->with('notification', $notification);
   }

}