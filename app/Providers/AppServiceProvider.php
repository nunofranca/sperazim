<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Social;
use App\Models\Setting;
use App\Models\Language;
use App\Models\Daynamicpage;
use App\Models\Flink;
use App\Sectiontitle;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        View::composer('*', function ($view) {
            $socials = Social::orderBy('serial_number', 'asc')->get();
            
            $commonsetting = Setting::where('id', 1)->first();
            $lang = Language::where('is_default', '1')->first();


            if (session()->has('lang')) {

                $currentLang = Language::where('code', session()->get('lang'))->first();

                $setting = Setting::where('language_id', $currentLang->id)->first();
                $sinfo = Sectiontitle::where('language_id', $currentLang->id)->first();
                $flinks = Flink::where('language_id', $currentLang->id)->orderBy('serial_number', 'asc')->get();
                $front_dynamic_pages = Daynamicpage::where('status', 1)->where('language_id', $currentLang->id)->orderBy('serial_number', 'asc')->get();

                $view->with('setting', $setting);
                $view->with('currentLang', $currentLang);
                $view->with('sinfo', $sinfo);
                $view->with('flinks', $flinks );
                $view->with('front_dynamic_pages', $front_dynamic_pages );

              }else {

                $currentLang = Language::where('is_default', 1)->first();

                $setting = Setting::where('language_id', $currentLang->id)->first();
                $sinfo = Sectiontitle::where('language_id', $currentLang->id)->first();
                $flinks = Flink::where('language_id', $currentLang->id)->orderBy('serial_number', 'asc')->get();
                $front_dynamic_pages = Daynamicpage::where('status', 1)->where('language_id', $currentLang->id)->orderBy('serial_number', 'asc')->get();

                $view->with('setting', $setting);
                $view->with('currentLang', $currentLang);
                $view->with('sinfo', $sinfo);
                $view->with('flinks', $flinks );
                $view->with('front_dynamic_pages', $front_dynamic_pages );

            }



            $langs = Language::all();
            $view->with('langs', $langs );
            $view->with('lang', $lang );
            $view->with('socials', $socials );
            $view->with('commonsetting', $commonsetting );
            
        });
    }
}


//basicinfo