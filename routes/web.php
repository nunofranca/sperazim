<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('login', function () {
    return view('admin.login');
})->name('login');


/*=======================================================
 Front Routes
=======================================================*/

Route::group(['middleware' => 'setlang'], function () {

    Route::get('/', 'Front\FrontendController@index')->name('front.index');
    Route::get('/duvidas-frequentes', 'Front\FrontendController@faq')->name('front.faq');
    Route::get('/quem-somos', 'Front\FrontendController@about')->name('front.about');
    Route::get('/service', 'Front\FrontendController@service')->name('front.service');
    Route::get('/service/{slug}', 'Front\FrontendController@service_details')->name('front.service.details');

    Route::get('/empreendimentos', 'Front\FrontendController@portfolio')->name('front.portfolio');
    Route::get('/empreendimentos/{slug}', 'Front\FrontendController@portfolio_details')->name('front.portfolio.details');

    Route::get('/package', 'Front\FrontendController@package')->name('front.package');

    Route::get('/quot', 'Front\FrontendController@quote')->name('front.quot');
    Route::post('/quot/submit', 'Front\FrontendController@quote_submit')->name('front.quote_submit');

    Route::get('/team', 'Front\FrontendController@team')->name('front.team');
    Route::get('/team/{id}', 'Front\FrontendController@team_details')->name('front.team_details');

    Route::get('/central-de-atendimento', 'Front\FrontendController@contact')->name('front.contact');
    Route::post('/contact/submit', 'Front\FrontendController@contactSubmit')->name('front.contact.submit');
    Route::post('/newsletter/store', 'Admin\NewsletterController@store')->name('front.newsletter');


    // Blog route
    Route::get('/blog', 'Front\FrontendController@blogs')->name('front.blogs');
    Route::get('/blog-details/{slug}', 'Front\FrontendController@blogdetails')->name('front.blogdetails');
    Route::get('/changelanguage/{lang}', 'Front\FrontendController@changeLanguage')->name('changeLanguage');

});


/*=======================================================
Admin Routes
=======================================================*/

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('/', 'Admin\LoginController@login')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@authenticate')->name('admin.auth');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'checkstatus']], function () {

    //Admin Logout Route
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');

    // Admin Profile Routs
    Route::get('/profile/edit', 'Admin\ProfileController@editProfile')->name('admin.editProfile');
    Route::post('/profile/update', 'Admin\ProfileController@updateProfile')->name('admin.updateProfile');
    Route::get('/profile/password/edit', 'Admin\ProfileController@editPassword')->name('admin.editPassword');
    Route::post('/profile/password/update', 'Admin\ProfileController@updatePassword')->name('admin.updatePassword');


    Route::group(['middleware' => 'checkpermission:General Setting'], function() {

        // Basic Information Route
        Route::get('/basicinfo', 'Admin\SettingController@basicinfo')->name('admin.basicinfo');
        Route::post('/basicinfo/update/{id}', 'Admin\SettingController@updateBasicinfo')->name('admin.setting.updateBasicinfo');

        //  Theme Version  Routes
        Route::get('/theme-version', 'Admin\SettingController@theme_version')->name('admin.theme_version');
        Route::post('/theme-version/post', 'Admin\SettingController@update_theme_version')->name('admin.theme_version.update');

        // SEO Information Route
        Route::get('/seoinfo', 'Admin\SettingController@seoinfo')->name('admin.seoinfo');
        Route::post('/seoinfo/update/{id}', 'Admin\SettingController@updateSeoinfo')->name('admin.setting.updateSeoinfo');

        // Socila Links Route
        Route::get('/slinks', 'Admin\SocialController@slinks')->name('admin.slinks');
        Route::post('/slinks/store', 'Admin\SocialController@storeSlinks')->name('admin.storeSlinks');
        Route::post('/slinks/update/{id}/', 'Admin\SocialController@updateSlinks')->name('admin.updateSlinks');
        Route::get('/slinks/edit/{id}/', 'Admin\SocialController@editSlinks')->name('admin.editSlinks');
        Route::post('/slinks/delete/{id}/', 'Admin\SocialController@deleteSlinks')->name('admin.deleteSlinks');

        // Scripts Route
        Route::get('/scripts', 'Admin\SettingController@scripts')->name('admin.scripts');
        Route::post('/scripts/update', 'Admin\SettingController@updateScripts')->name('admin.commonsetting.updateScripts');

        // Page Visibility  Title Route
        Route::get('/page-visibility', 'Admin\SettingController@pagevisibility')->name('admin.pagevisibility');
        Route::post('/page-visibility/update', 'Admin\SettingController@updatepagevisibility')->name('admin.pagevisibility.update');
		
        // Custom CSS
        Route::get('/custom-css', 'Admin\SettingController@custom_css')->name('admin.custom.css');
        Route::post('/custom-css/update', 'Admin\SettingController@custom_css_update')->name('admin.custom.css.update');

        // ADMIN EMAIL SETTINGS SECTION
        Route::get('/email-templates', 'Admin\EmailController@index')->name('admin.mail.index');
        Route::get('/email-templates/{id}', 'Admin\EmailController@edit')->name('admin.mail.edit');
        Route::post('/email-templates/{id}', 'Admin\EmailController@update')->name('admin.mail.update');
        Route::get('/email-config', 'Admin\EmailController@config')->name('admin.mail.config');
        Route::post('/email-config/submit', 'Admin\EmailController@configUpdate')->name('admin.mail.config.update');
        Route::get('/groupemail', 'Admin\EmailController@groupemail')->name('admin.group.show');
        Route::post('/groupemailpost', 'Admin\EmailController@groupemailpost')->name('admin.group.submit');
        Route::get('/mail-admin', 'Admin\EmailController@mailadmin')->name('admin.mailadmin');
        Route::post('/mail-admin/update', 'Admin\EmailController@mailadmin_update')->name('admin.mailadmin.update');

        // Admin Announcement Routes
        Route::get('/cookie-alert', 'Admin\SettingController@cookiealert')->name('admin.cookie.alert');
        Route::post('/cookie-alert/update/{langid}/', 'Admin\SettingController@updatecookie')->name('admin.cookie.update');

        // Admin Cookie Alert Routes
        Route::get('/announcement', 'Admin\SettingController@announcement')->name('admin.announcement.index');
        Route::post('/announcement/update/{langid}/', 'Admin\SettingController@update_announcement')->name('admin.update_announcement');

        // Admin maintanance mode Routes
        Route::get('/maintanance', 'Admin\SettingController@maintanance')->name('admin.maintanance.index');
        Route::post('/maintanance/update/', 'Admin\SettingController@update_maintanance')->name('admin.update_maintanance');

    });

    Route::group(['middleware' => 'checkpermission:Home'], function() {

        // Hero Slider Version
        Route::get('/slider', 'Admin\SliderController@slider')->name('admin.slider');
        Route::get('/slider/add', 'Admin\SliderController@add')->name('admin.slider.add');
        Route::post('/slider/store', 'Admin\SliderController@store')->name('admin.slider.store');
        Route::post('/slider/delete/{id}/', 'Admin\SliderController@delete')->name('admin.slider.delete');
        Route::get('/slider/edit/{id}/', 'Admin\SliderController@edit')->name('admin.slider.edit');
        Route::post('/slider/update/{id}/', 'Admin\SliderController@update')->name('admin.slider.update');

        // Hero Static Version
        Route::get('/hero/static/', 'Admin\HeroController@index')->name('admin.hero.index');
        Route::post('/hero/static/update/{id}/', 'Admin\HeroController@update')->name('admin.hero.update');

        // Hero Video Version
        Route::get('/hero/herovideo/', 'Admin\HeroController@herovideo')->name('admin.herovideo');
        Route::post('/hero/herovideo/update', 'Admin\HeroController@herovideo_update')->name('admin.herovideo.update');

        // Home Who we Section
        Route::get('/who-we-section/', 'Admin\SectionController@w_w_a')->name('admin.w_w_a');
        Route::post('/who-we-section/update/{id}/', 'Admin\SectionController@w_w_a_update')->name('admin.w_w_a_update');

        // Home About Section
        Route::get('/about-section/', 'Admin\SectionController@about_section')->name('admin.about_section');
        Route::post('/about-section/update/{id}/', 'Admin\SectionController@about_section_update')->name('admin.about_section_update');

        // Home Intro video Section
        Route::get('/intro-video/', 'Admin\SectionController@intro_video')->name('admin.intro_video');
        Route::post('/intro-video/update/{id}/', 'Admin\SectionController@intro_video_update')->name('admin.intro_video_update');

        // Home Why Choose Section Section
        Route::get('/why-choose-us/', 'Admin\SectionController@why_chooseus')->name('admin.why_chooseus');
        Route::post('/why-choose-us/update/{id}/', 'Admin\SectionController@why_chooseus_update')->name('admin.why_chooseus_update');

        Route::get('/why-choose/add/', 'Admin\WhyChooseController@add')->name('admin.wcu.add');
        Route::post('/why-choose/store/', 'Admin\WhyChooseController@store')->name('admin.wcu.store');
        Route::get('/why-choose/edit/{id}', 'Admin\WhyChooseController@edit')->name('admin.wcu.edit');
        Route::post('/why-choose/delete/{id}', 'Admin\WhyChooseController@delete')->name('admin.wcu.delete');
        Route::post('/why-choose/update/{id}', 'Admin\WhyChooseController@update')->name('admin.wcu.update');


        // Home Service Section
        Route::get('/service-section/', 'Admin\SectionController@service_section')->name('admin.service_section');
        Route::post('/service-section/update/{id}/', 'Admin\SectionController@service_section_update')->name('admin.service_section_update');

        // Home Project Section
        Route::get('/project-section/', 'Admin\SectionController@project_section')->name('admin.project_section');
        Route::post('/project-section/update/{id}/', 'Admin\SectionController@project_section_update')->name('admin.project_section_update');

        
        // Home Features Section
        Route::get('/feature', 'Admin\FeatureController@index')->name('admin.feature.index');
        Route::get('/feature/add', 'Admin\FeatureController@add')->name('admin.feature.add');
        Route::post('/feature/store', 'Admin\FeatureController@store')->name('admin.feature.store');
        Route::post('/feature/delete/{id}/', 'Admin\FeatureController@delete')->name('admin.feature.delete');
        Route::get('/feature/edit/{id}/', 'Admin\FeatureController@edit')->name('admin.feature.edit');
        Route::post('/feature/update/{id}/', 'Admin\FeatureController@update')->name('admin.feature.update');


        // Home Team Section
        Route::get('/team', 'Admin\TeamController@team')->name('admin.team');
        Route::get('/team/add', 'Admin\TeamController@add')->name('admin.team.add');
        Route::post('/team/store', 'Admin\TeamController@store')->name('admin.team.store');
        Route::post('/team/delete/{id}/', 'Admin\TeamController@delete')->name('admin.team.delete');
        Route::get('/team/edit/{id}/', 'Admin\TeamController@edit')->name('admin.team.edit');
        Route::post('/team/update/{id}/', 'Admin\TeamController@update')->name('admin.team.update');
        Route::post('/team-section/update/{id}/', 'Admin\SectionController@team_section_update')->name('admin.team_section_update');


        // Home Contact Section
        Route::get('/contact-section/', 'Admin\SectionController@contact_section')->name('admin.contact_section');
        Route::post('/contact-section/update/{id}/', 'Admin\SectionController@contact_section_update')->name('admin.contact_section_update');

        // Home Meet Us Section
        Route::get('/meet-us/', 'Admin\SectionController@meet_section')->name('admin.meet_section');
        Route::post('/meet-us/update/{id}/', 'Admin\SectionController@meet_section_update')->name('admin.meet_section_update');

        // Home Faq Section
        Route::get('/faq', 'Admin\FaqController@faq')->name('admin.faq');
        Route::get('/faq/add', 'Admin\FaqController@add')->name('admin.faq.add');
        Route::post('/faq/store', 'Admin\FaqController@store')->name('admin.faq.store');
        Route::post('/faq/delete/{id}/', 'Admin\FaqController@delete')->name('admin.faq.delete');
        Route::get('/faq/edit/{id}/', 'Admin\FaqController@edit')->name('admin.faq.edit');
        Route::post('/faq/update/{id}/', 'Admin\FaqController@update')->name('admin.faq.update');
        Route::post('/faq-section/update/{id}/', 'Admin\SectionController@faq_section_update')->name('admin.faq_section_update');


        // Home Counter Contact Section
        Route::get('/counter', 'Admin\FunfactController@index')->name('admin.counter.index');
        Route::get('/counter/add', 'Admin\FunfactController@add')->name('admin.counter.add');
        Route::post('/counter/store', 'Admin\FunfactController@store')->name('admin.counter.store');
        Route::post('/counter/delete/{id}/', 'Admin\FunfactController@delete')->name('admin.counter.delete');
        Route::get('/counter/edit/{id}/', 'Admin\FunfactController@edit')->name('admin.counter.edit');
        Route::post('/counter/update/{id}/', 'Admin\FunfactController@update')->name('admin.counter.update');


        // Home Blog Section
        Route::get('/blog-section/', 'Admin\SectionController@blog_section')->name('admin.blog_section');
        Route::post('/blog-section/update/{id}/', 'Admin\SectionController@blog_section_update')->name('admin.blog_section_update');


        // Home Clients Section
        Route::get('/client', 'Admin\ClientController@index')->name('admin.client.index');
        Route::get('/client/add', 'Admin\ClientController@add')->name('admin.client.add');
        Route::post('/client/store', 'Admin\ClientController@store')->name('admin.client.store');
        Route::post('/client/delete/{id}/', 'Admin\ClientController@delete')->name('admin.client.delete');
        Route::get('/client/edit/{id}/', 'Admin\ClientController@edit')->name('admin.client.edit');
        Route::post('/client/update/{id}/', 'Admin\ClientController@update')->name('admin.client.update');
		

        // Testimonial Route
        Route::get('/testimonial', 'Admin\TestimonialController@testimonial')->name('admin.testimonial');
        Route::get('/testimonial/add', 'Admin\TestimonialController@add')->name('admin.testimonial.add');
        Route::post('/testimonial/store', 'Admin\TestimonialController@store')->name('admin.testimonial.store');
        Route::post('/testimonial/delete/{id}/', 'Admin\TestimonialController@delete')->name('admin.testimonial.delete');
        Route::get('/testimonial/edit/{id}/', 'Admin\TestimonialController@edit')->name('admin.testimonial.edit');
        Route::post('/testimonial/update/{id}/', 'Admin\TestimonialController@update')->name('admin.testimonial.update');
        Route::post('/testimonial/testimonialcontent/{id}/', 'Admin\TestimonialController@testimonialcontent')->name('admin.testimonialcontent.update');

    });

    Route::group(['middleware' => 'checkpermission:About'], function() {
        //  History Section
        Route::get('/history', 'Admin\HistoryController@index')->name('admin.history.index');
        Route::get('/history/add', 'Admin\HistoryController@add')->name('admin.history.add');
        Route::post('/history/store', 'Admin\HistoryController@store')->name('admin.history.store');
        Route::post('/history/delete/{id}/', 'Admin\HistoryController@delete')->name('admin.history.delete');
        Route::get('/history/edit/{id}/', 'Admin\HistoryController@edit')->name('admin.history.edit');
        Route::post('/history/update/{id}/', 'Admin\HistoryController@update')->name('admin.history.update');
        Route::post('/history/historycontent/{id}/', 'Admin\HistoryController@historycontent')->name('admin.historycontent.update');
    });


    Route::group(['middleware' => 'checkpermission:Package'], function() {
        // Package Route
        Route::get('/package', 'Admin\PackagController@package')->name('admin.package');
        Route::get('/package/add', 'Admin\PackagController@add')->name('admin.package.add');
        Route::post('/package/store', 'Admin\PackagController@store')->name('admin.package.store');
        Route::post('/package/delete/{id}/', 'Admin\PackagController@delete')->name('admin.package.delete');
        Route::get('/package/edit/{id}/', 'Admin\PackagController@edit')->name('admin.package.edit');
        Route::post('/package/update/{id}/', 'Admin\PackagController@update')->name('admin.package.update');
        Route::post('/package/plancontent/{id}/', 'Admin\PackagController@plancontent')->name('admin.plancontent.update');
    });

    Route::group(['middleware' => 'checkpermission:Quote'], function() {
        // Admin Quote Routes
        Route::get('/all/quote', 'Admin\QuoteController@all')->name('admin.all.quote');
        Route::get('/pending/quote', 'Admin\QuoteController@pending')->name('admin.pending.quote');
        Route::get('/processing/quote', 'Admin\QuoteController@processing')->name('admin.processing.quote');
        Route::get('/completed/quote', 'Admin\QuoteController@completed')->name('admin.completed.quote');
        Route::get('/rejected/quote', 'Admin\QuoteController@rejected')->name('admin.rejected.quote');
        Route::post('/quote/status', 'Admin\QuoteController@status')->name('admin.quote.status');
        Route::post('/quote/delete/{id}', 'Admin\QuoteController@delete')->name('admin.quote.delete');
        Route::get('/quote/details/{id}', 'Admin\QuoteController@details')->name('admin.quote.details');
    });


    Route::group(['middleware' => 'checkpermission:Service'], function() {
        // Service Route
        Route::get('/service', 'Admin\ServiceController@service')->name('admin.service');
        Route::get('/service/add', 'Admin\ServiceController@add')->name('admin.service.add');
        Route::post('/service/store', 'Admin\ServiceController@store')->name('admin.service.store');
        Route::post('/service/delete/{id}/', 'Admin\ServiceController@delete')->name('admin.service.delete');
        Route::get('/service/edit/{id}/', 'Admin\ServiceController@edit')->name('admin.service.edit');
        Route::post('/service/update/{id}/', 'Admin\ServiceController@update')->name('admin.service.update');

    });


    Route::group(['middleware' => 'checkpermission:Contact'], function() {
        // Contact Page
        Route::get('/contact-page/', 'Admin\ContactController@contact_page')->name('admin.contact_page');
        Route::post('/contact-page/update/{id}/', 'Admin\ContactController@contact_page_update')->name('admin.contact_page_update');
    });


    Route::group(['middleware' => 'checkpermission:Portfolio'], function() {
        // Portfolio  Route
        Route::get('/portfolio', 'Admin\PortfolioController@index')->name('admin.portfolio.index');
        Route::get('/portfolio/add', 'Admin\PortfolioController@add')->name('admin.portfolio.add');
        Route::post('/portfolio/store', 'Admin\PortfolioController@store')->name('admin.portfolio.store');
        Route::post('/portfolio/delete/{id}/', 'Admin\PortfolioController@delete')->name('admin.portfolio.delete');
        Route::get('/portfolio/edit/{id}/', 'Admin\PortfolioController@edit')->name('admin.portfolio.edit');
        Route::post('/portfolio/update/{id}/', 'Admin\PortfolioController@update')->name('admin.portfolio.update');
        Route::get('portfolio/get/categoty/{id}', 'Admin\PortfolioController@portfolio_get_category')->name('admin.portfolio.portfolio_get_category');
		
    });



    Route::group(['middleware' => 'checkpermission:Blog'], function() {
        // Blog Category Route
        Route::get('/blog/blog-category', 'Admin\BcategoryController@bcategory')->name('admin.bcategory');
        Route::get('/blog/blog-category/add', 'Admin\BcategoryController@add')->name('admin.bcategory.add');
        Route::post('/blog/blog-category/store', 'Admin\BcategoryController@store')->name('admin.bcategory.store');
        Route::post('/blog/blog-category/delete/{id}/', 'Admin\BcategoryController@delete')->name('admin.bcategory.delete');
        Route::get('/blog/blog-category/edit/{id}/', 'Admin\BcategoryController@edit')->name('admin.bcategory.edit');
        Route::post('/blog/blog-category/update/{id}/', 'Admin\BcategoryController@update')->name('admin.bcategory.update');


        // Admin Blog Archive Routes
        Route::get('/archives', 'Admin\ArchiveController@index')->name('admin.archive');
        Route::get('/archive/add', 'Admin\ArchiveController@add')->name('admin.archive.add');
        Route::post('/archive/store', 'Admin\ArchiveController@store')->name('admin.archive.store');
        Route::get('/archive/edit/{id}/', 'Admin\ArchiveController@edit')->name('admin.archive.edit');
        Route::post('/archive/update/{id}/', 'Admin\ArchiveController@update')->name('admin.archive.update');
        Route::get('/archive/delete/{id}/', 'Admin\ArchiveController@delete')->name('admin.archive.delete');

        // Blog  Route
        Route::get('/blog', 'Admin\BlogController@blog')->name('admin.blog');
        Route::get('/blog/add', 'Admin\BlogController@add')->name('admin.blog.add');
        Route::post('/blog/store', 'Admin\BlogController@store')->name('admin.blog.store');
        Route::post('/blog/delete/{id}/', 'Admin\BlogController@delete')->name('admin.blog.delete');
        Route::get('/blog/edit/{id}/', 'Admin\BlogController@edit')->name('admin.blog.edit');
        Route::post('/blog/update/{id}/', 'Admin\BlogController@update')->name('admin.blog.update');
        Route::get('blog/get/categoty/{id}', 'Admin\BlogController@blog_get_category')->name('admin.blog.blog_get_category');
    });


    Route::group(['middleware' => 'checkpermission:Role Management'], function() {
        // Admin Roles Routes
        Route::get('/roles', 'Admin\RoleController@index')->name('admin.role.index');
        Route::get('/role/add', 'Admin\RoleController@add')->name('admin.role.add');
        Route::post('/role/store', 'Admin\RoleController@store')->name('admin.role.store');
        Route::get('/role/edit/{id}', 'Admin\RoleController@edit')->name('admin.role.edit');
        Route::post('/role/update/{id}', 'Admin\RoleController@update')->name('admin.role.update');
        Route::post('/role/{id}/delete', 'Admin\RoleController@delete')->name('admin.role.delete');
        Route::get('role/{id}/permissions/manage', 'Admin\RoleController@managePermissions')->name('admin.role.permissions.manage');
        Route::post('role/{id}/permissions/update', 'Admin\RoleController@updatePermissions')->name('admin.role.permissions.update');


        // Admin Users Routes
        Route::get('/users', 'Admin\UserController@index')->name('admin.user.index');
        Route::get('/user/add', 'Admin\UserController@add')->name('admin.user.add');
        Route::post('/user/store', 'Admin\UserController@store')->name('admin.user.store');
        Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::post('/user/update/{id}', 'Admin\UserController@update')->name('admin.user.update');
        Route::post('/user/delete/{id}', 'Admin\UserController@delete')->name('admin.user.delete');
    });


    Route::group(['middleware' => 'checkpermission:Subscribers'], function() {
        // Newsletter Route
        Route::get('/subscriber', 'Admin\NewsletterController@newsletter')->name('admin.newsletter');
        Route::get('/mailsubscriber', 'Admin\NewsletterController@mailsubscriber')->name('admin.mailsubscriber');
        Route::post('/subscribers/sendmail', 'Admin\NewsletterController@subscsendmail')->name('admin.subscribers.sendmail');
    
        Route::get('/subscriber/add', 'Admin\NewsletterController@add')->name('admin.newsletter.add');
        Route::post('/subscriber/store', 'Admin\NewsletterController@store')->name('admin.newsletter.store');
        Route::post('/subscriber/delete/{id}/', 'Admin\NewsletterController@delete')->name('admin.newsletter.delete');
        Route::get('/subscriber/edit/{id}/', 'Admin\NewsletterController@edit')->name('admin.newsletter.edit');
        Route::post('/subscriber/update/{id}/', 'Admin\NewsletterController@update')->name('admin.newsletter.update');

    });


    Route::group(['middleware' => 'checkpermission:Footer'], function() {
        // Admin Footer Logo Text Routes
        Route::get('/footer', 'Admin\FooterController@index')->name('admin.footer.index');
        Route::post('/footer/update/{id}', 'Admin\FooterController@update')->name('admin.footer.update');

        // Admin Footer Link Routes
        Route::get('/flink', 'Admin\FlinkController@index')->name('admin.flink.index');
        Route::get('/flink/add', 'Admin\FlinkController@add')->name('admin.flink.add');
        Route::post('/flink/store', 'Admin\FlinkController@store')->name('admin.flink.store');
        Route::post('/flink/delete/{id}/', 'Admin\FlinkController@delete')->name('admin.flink.delete');
        Route::get('/flink/edit/{id}/', 'Admin\FlinkController@edit')->name('admin.flink.edit');
        Route::post('/flink/update/{id}/', 'Admin\FlinkController@update')->name('admin.flink.update');
    });


    Route::group(['middleware' => 'checkpermission:Dynamic Page'], function() {
        // Dynamic Page  Route
        Route::get('/dynamic-page', 'Admin\DynamicpageController@dynamic_page')->name('admin.dynamic_page');
        Route::get('/dynamic-page/add', 'Admin\DynamicpageController@add')->name('admin.dynamic_page.add');
        Route::post('/dynamic-page/store', 'Admin\DynamicpageController@store')->name('admin.dynamic_page.store');
        Route::post('/dynamic-page/delete/{id}/', 'Admin\DynamicpageController@delete')->name('admin.dynamic_page.delete');
        Route::get('/dynamic-page/edit/{id}/', 'Admin\DynamicpageController@edit')->name('admin.dynamic_page.edit');
        Route::post('/dynamic-page/update/{id}/', 'Admin\DynamicpageController@update')->name('admin.dynamic_page.update');
    });


    Route::group(['middleware' => 'checkpermission:Language'], function() {
        // Admin Language Routes
        Route::get('/languages', 'Admin\LanguageController@index')->name('admin.language.index');
        Route::get('/language/add', 'Admin\LanguageController@add')->name('admin.language.add');
        Route::get('/language/{id}/edit', 'Admin\LanguageController@edit')->name('admin.language.edit');
        Route::get('/language/{id}/edit/keyword', 'Admin\LanguageController@editKeyword')->name('admin.language.editKeyword');
        Route::post('/language/store', 'Admin\LanguageController@store')->name('admin.language.store');

        Route::post('/language/upload', 'Admin\LanguageController@upload')->name('admin.language.upload');
        Route::post('/language/{id}/uploadUpdate', 'Admin\LanguageController@uploadUpdate')->name('admin.language.uploadUpdate');

        Route::post('/language/{id}/default', 'Admin\LanguageController@default')->name('admin.language.default');

        Route::post('/language/{id}/delete', 'Admin\LanguageController@delete')->name('admin.language.delete');
        Route::post('/language/{id}/update', 'Admin\LanguageController@update')->name('admin.language.update');
        Route::post('/language/{id}/update/keyword', 'Admin\LanguageController@updateKeyword')->name('admin.language.updateKeyword');
    });


    Route::group(['middleware' => 'checkpermission:Clear Cache'], function() {
        // Admin Cache Clear Routes
        Route::get('/cache-clear', 'Admin\CacheController@clear')->name('admin.cache.clear');
    });


});


Route::group(['middleware' => 'setlang'], function () {

    Route::get('/{slug}', 'Front\FrontendController@front_dynamic_page')->name('front.front_dynamic_page');

});