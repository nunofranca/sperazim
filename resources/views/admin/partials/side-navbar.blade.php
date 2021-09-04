@php
$lang_code = $currentLang->code;

$admin = Auth::guard('admin')->user();
  if (!empty($admin->role)) {
    $permissions = $admin->role->permissions;
    $permissions = json_decode($permissions, true);
}
@endphp

<aside class="main-sidebar elevation-4 main-sidebar elevation-4 sidebar-light-primary">
    <!-- Sidebar -->
    <div class="sidebar pt-0 mt-0">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <a href="{{ route('front.index') }}" class="name text-dark" target="_blank">
                <img src="{{ asset('assets/front/img/'.$setting->header_logo) }}" alt="">
            </a>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link @if(request()->path() == 'admin/dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ __('Painel de Controle') }}
                        </p>
                    </a>
                </li>

                @if (empty($admin->role) || (!empty($permissions) && in_array('General Setting', $permissions)))
                    <li class="nav-item has-treeview
                        @if(request()->path() == 'admin/basicinfo') menu-open
                        @elseif(request()->path() == 'admin/seoinfo') menu-open
                        @elseif(request()->path() == 'admin/custom-css') menu-open
                        @elseif(request()->path() == 'admin/slinks') menu-open
                        @elseif(request()->path() == 'admin/email-config') menu-open
                        @elseif(request()->path() == 'admin/scripts') menu-open
                        @elseif(request()->path() == 'admin/theme-version') menu-open
                        @elseif(request()->path() == 'admin/announcement') menu-open
                        @elseif(request()->path() == 'admin/cookie-alert') menu-open
                        @elseif(request()->path() == 'admin/mail-admin') menu-open
                        @elseif(request()->path() == 'admin/page-visibility') menu-open
                        @elseif(request()->is('admin/slinks/edit/*')) menu-open
                        @endif">
                        <a href="#" class="nav-link
                            @if(request()->path() == 'admin/basicinfo') active
                            @elseif(request()->path() == 'admin/seoinfo') active
                            @elseif(request()->path() == 'admin/custom-css') active
                            @elseif(request()->path() == 'admin/slinks') active
                            @elseif(request()->path() == 'admin/theme-version') active
                            @elseif(request()->path() == 'admin/scripts') active
                            @elseif(request()->path() == 'admin/announcement') active
                            @elseif(request()->path() == 'admin/cookie-alert') active
                            @elseif(request()->path() == 'admin/mail-admin') active
                            @elseif(request()->path() == 'admin/email-config') active
                            @elseif(request()->path() == 'admin/page-visibility') active
                            @elseif(request()->is('admin/slinks/edit/*')) active
                            @endif">
                            <i class="nav-icon fas fas fa-cog"></i>
                            <p>
                                {{ __('General Setting') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('admin.basicinfo'). '?language=' . $lang_code }}"
                                    class="nav-link @if(request()->path() == 'admin/basicinfo') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Basic Information') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.theme_version') }}" class="nav-link
                            @if(request()->path() == 'admin/theme-version') active
                            @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Theme Versions') }}</p>
                                </a>
                            </li>
                            <li class="nav-item ]
                            @if(request()->path() == 'admin/email-config')  menu-open 
                            @elseif(request()->path() == 'admin/mail-admin')  menu-open 
                            @endif">
                                <a href="#" class="nav-link 
                                @if(request()->path() == 'admin/email-config')  active 
                                @elseif(request()->path() == 'admin/mail-admin')  active 
                                @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Email Configuration') }}</p>
                                    <i class="right fas fa-angle-left"></i>
                                </a>
                                <ul class="nav nav-treeview 
                                    @if(request()->path() == 'admin/email-config')  menu-open @endif
                                    " >
                                    <li class="nav-item">
                                        <a href="{{ route('admin.mail.config') }}"" class="nav-link 
                                        @if(request()->path() == 'admin/email-config')  active @endif
                                        ">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>{{ __('Mail From Admin') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.mailadmin') }}" class="nav-link 
                                        @if(request()->path() == 'admin/mail-admin')  active @endif
                                        ">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>{{ __('Mail To Admin') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.slinks') }}" class="nav-link
                                @if(request()->path() == 'admin/slinks') active
                                @elseif(request()->is('admin/slinks/edit/*')) active
                                    @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Social Links') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.seoinfo'). '?language=' . $lang_code }}"
                                    class="nav-link @if(request()->path() == 'admin/seoinfo') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('SEO Information') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.scripts') }}"
                                    class="nav-link @if(request()->path() == 'admin/scripts') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Scripts') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.pagevisibility') }}"
                                    class="nav-link  @if(request()->path() == 'admin/page-visibility') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Pages Visibility') }}</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('admin.maintanance.index') }}"
                                    class="nav-link  @if(request()->path() == 'admin/maintanance') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Maintanance Mode') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.announcement.index'). '?language=' . $lang_code }}"
                                    class="nav-link  @if(request()->path() == 'admin/announcement') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Announcement') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.cookie.alert'). '?language=' . $lang_code }}"
                                    class="nav-link  @if(request()->path() == 'admin/cookie-alert') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Cookie Alert') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.custom.css') }}"
                                    class="nav-link  @if(request()->path() == 'admin/custom-css') active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Custom CSS') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                @if (empty($admin->role) || (!empty($permissions) && in_array('Home', $permissions)))
                    <li class="nav-item
                        @if(request()->path() == 'admin/hero/static') menu-open
                        @elseif(request()->path() == 'admin/who-we-section') menu-open
                        @elseif(request()->path() == 'admin/intro-video') menu-open
                        @elseif(request()->path() == 'admin/about-section') menu-open
                        @elseif(request()->path() == 'admin/feature') menu-open
                        @elseif(request()->path() == 'admin/project-section') menu-open
                        @elseif(request()->path() == 'admin/service-section') menu-open
                        @elseif(request()->path() == 'admin/why-choose-us') menu-open
                        @elseif(request()->path() == 'admin/contact-section') menu-open
                        @elseif(request()->path() == 'admin/blog-section') menu-open
                        @elseif(request()->path() == 'admin/counter') menu-open
                        @elseif(request()->path() == 'admin/slider') menu-open
                        @elseif(request()->path() == 'admin/hero/herovideo') menu-open
                        @elseif(request()->path() == 'admin/slider/add') menu-open
                        @elseif(request()->path() == 'admin/meet-us') menu-open
                        @elseif(request()->path() == 'admin/team') menu-open
                        @elseif(request()->path() == 'admin/team/add') menu-open
                        @elseif(request()->is('admin/team/edit/*')) menu-open
                        @elseif(request()->path() == 'admin/counter/add') menu-open
                        @elseif(request()->is('admin/counter/edit/*')) menu-open
                        @elseif(request()->path() == 'admin/client') menu-open
                        @elseif(request()->path() == 'admin/client/add') menu-open
                        @elseif(request()->is('admin/client/edit/*')) menu-open
						@elseif(request()->path() == 'admin/faq') menu-open
                        @elseif(request()->path() == 'admin/faq/add') menu-open
                        @elseif(request()->is('admin/faq/edit/*')) menu-open
                        @elseif(request()->is('admin/slider/edit/*')) menu-open
                        @elseif(request()->path() == 'admin/testimonial') menu-open
                        @elseif(request()->path() == 'admin/testimonial/add') menu-open
                        @elseif(request()->is('admin/testimonial/edit/*')) menu-open
						@elseif(request()->path() == 'admin/history') menu-open
						@elseif(request()->path() == 'admin/history/add') menu-open
                        @elseif(request()->is('admin/history/edit/*')) menu-open
                        @endif
                        ">
                        <a href="#" class="nav-link
                        @if(request()->path() == 'admin/hero/static') active
                        @elseif(request()->path() == 'admin/who-we-section') active
                        @elseif(request()->path() == 'admin/intro-video') active
                        @elseif(request()->path() == 'admin/about-section') active
                        @elseif(request()->path() == 'admin/feature') active
                        @elseif(request()->path() == 'admin/hero/herovideo') active
                        @elseif(request()->path() == 'admin/project-section') active
                        @elseif(request()->path() == 'admin/service-section') active
                        @elseif(request()->path() == 'admin/why-choose-us') active
                        @elseif(request()->path() == 'admin/contact-section') active
                        @elseif(request()->path() == 'admin/blog-section') active
                        @elseif(request()->path() == 'admin/counter') active
                        @elseif(request()->path() == 'admin/slider') active
                        @elseif(request()->path() == 'admin/slider/add') active
                        @elseif(request()->path() == 'admin/meet-us') active
                        @elseif(request()->path() == 'admin/team') active
                        @elseif(request()->path() == 'admin/team/add') active
                        @elseif(request()->path() == 'admin/counter/add') active
                        @elseif(request()->is('admin/counter/edit/*')) active
                        @elseif(request()->is('admin/team/edit/*')) active
                        @elseif(request()->path() == 'admin/faq') active
                        @elseif(request()->path() == 'admin/faq/add') active
                        @elseif(request()->is('admin/team/faq/*')) active
                        @elseif(request()->path() == 'admin/client') active
                        @elseif(request()->path() == 'admin/client/add') active
                        @elseif(request()->is('admin/team/client/*')) active
                        @elseif(request()->is('admin/slider/edit/*')) active
                        @elseif(request()->path() == 'admin/testimonial') active
                        @elseif(request()->path() == 'admin/testimonial/add') active
                        @elseif(request()->is('admin/testimonial/edit/*')) active
						@elseif(request()->path() == 'admin/history/add') active
                        @elseif(request()->is('admin/history/edit/*')) active
                        @endif
                        ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                {{ __('Home') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
						
						@if (empty($admin->role) || (!empty($permissions) && in_array('General Setting', $permissions)))
                            <li class="nav-item
                            @if(request()->path() == 'admin/hero/static') menu-open
                            @elseif(request()->path() == 'admin/slider') menu-open
                            @elseif(request()->path() == 'admin/hero/herovideo') menu-open
                            @elseif(request()->path() == 'admin/slider/add') menu-open
                            @elseif(request()->is('admin/slider/edit/*')) menu-open
                            @endif
                            ">
                                <a href="#" class="nav-link
                                @if(request()->path() == 'admin/hero/static') active
                                @elseif(request()->path() == 'admin/slider') active
                                @elseif(request()->path() == 'admin/hero/herovideo') active
                                @elseif(request()->path() == 'admin/slider/add') active
                                @elseif(request()->is('admin/slider/edit/*')) active
                                @endif
                                ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Hero Section') }} <i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview
                                @if(request()->path() == 'admin/slider') menu-open
                                @elseif(request()->path() == 'admin/slider/add') menu-open
                                @elseif(request()->path() == 'admin/hero/herovideo') menu-open
                                @elseif(request()->is('admin/slider/edit/*')) menu-open
                                @endif
                                ">
								
								
                                    <li class="nav-item">
                                        <a href="{{ route('admin.hero.index'). '?language=' . $lang_code }}" class="nav-link
                                @if(request()->path() == 'admin/hero/static') active @endif
                                ">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>{{ __('Static Version') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.slider'). '?language=' . $lang_code }}" class="nav-link
                                            @if(request()->path() == 'admin/slider') active
                                            @elseif(request()->path() == 'admin/slider/add') active
                                            @elseif(request()->is('admin/slider/edit/*')) active
                                            @endif
                                            ">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>{{ __('Slider Version') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.herovideo') }}" class="nav-link
                                            @if(request()->path() == 'admin/hero/herovideo') active @endif
                                            ">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>{{ __('Video Version') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
							
							<li class="nav-item">
                                <a href="{{ route('admin.w_w_a'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/who-we-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Who We Are Section') }}</p>
                                </a>
                            </li>
							
							<li class="nav-item">
                                <a href="{{ route('admin.intro_video'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/intro-video') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Intro Video Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.why_chooseus'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/why-choose-us') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Why Choose Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.service_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/service-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Service Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.project_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/project-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Project Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.testimonial'). '?language=' . $lang_code }}" class="nav-link
                                @if(request()->path() == 'admin/testimonial') active
                                @elseif(request()->path() == 'admin/testimonial/add') active
                                @elseif(request()->is('admin/testimonial/edit/*')) active
                                @endif
                                ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Testimonial Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.team'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/team') active
                            @elseif(request()->path() == 'admin/team/add') active
                            @elseif(request()->is('admin/team/edit/*')) active
                            @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Team Section') }}</p>
                                </a>
                            </li>
							
							<li class="nav-item">
                                <a href="{{ route('admin.counter.index'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/counter') active 
                            @elseif(request()->path() == 'admin/counter/add') active
                            @elseif(request()->is('admin/counter/edit/*')) active
                            @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Counter Section') }}</p>
                                </a>
                            </li>
							
							<li class="nav-item">
                                <a href="{{ route('admin.contact_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/contact-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Contact Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.blog_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/blog-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Blog Section') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.client.index'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/client') active 
                            @elseif(request()->path() == 'admin/client/add') active
                            @elseif(request()->is('admin/client/edit/*')) active
                            @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Client Section') }}</p>
                                </a>
                            </li>
							
							@endif
							
                            <li class="nav-item">
                                <a href="{{ route('admin.about_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/about-section') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Empresa') }}</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('admin.feature.index'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/feature') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Portifólio') }}</p>
                                </a>
                            </li>
							
							
							<li class="nav-item">
								<a href="{{ route('admin.history.index'). '?language=' . $lang_code }}" class="nav-link
								@if(request()->path() == 'admin/history') active @endif
								">
									<i class="far fa-circle nav-icon"></i>
									<p>{{ __('Sustentabilidade') }}</p>
								</a>
							</li>

                            
                            <li class="nav-item">
                                <a href="{{ route('admin.faq'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/faq') active
                            @elseif(request()->path() == 'admin/faq/add') active
                            @elseif(request()->is('admin/team/faq/*')) active
                            @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Perguntas Frequentes') }}</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('admin.meet_section'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/meet-us') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('CUB') }}</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                @endif


                


                @if (empty($admin->role) || (!empty($permissions) && in_array('Package', $permissions)))
                    <li class="nav-item">
                        <a href="{{ route('admin.package'). '?language=' . $lang_code }}" class="nav-link
                            @if(request()->path() == 'admin/package') active
                            @elseif(request()->path() == 'admin/package/add') active
                            @elseif(request()->is('admin/package/edit/*')) active
                            @endif">
                            <i class="nav-icon fas fa-box-open"></i>
                            <p>
                                {{ __('Package') }}
                            </p>
                        </a>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Quote', $permissions)))
                    <li class="nav-item 
                        @if(request()->path() == 'admin/all/quote') menu-open 
                        @elseif(request()->path() == 'admin/all/quote') menu-open 
                        @elseif(request()->path() == 'admin/pending/quote') menu-open 
                        @elseif(request()->path() == 'admin/processing/quote') menu-open 
                        @elseif(request()->path() == 'admin/completed/quote') menu-open 
                        @elseif(request()->path() == 'admin/rejected/quote') menu-open 
                        @elseif(request()->is('admin/quote/details/*')) menu-open
                        @endif
                        ">
                        <a href="#" class="nav-link @if(request()->path() == 'admin/all/quote') active 
                            @elseif(request()->path() == 'admin/pending/quote') active 
                            @elseif(request()->path() == 'admin/processing/quote') active 
                            @elseif(request()->path() == 'admin/completed/quote') active
                            @elseif(request()->path() == 'admin/rejected/quote') active
                            @elseif(request()->is('admin/quote/details/*')) active
                            @endif">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                            {{ __('Quote') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.all.quote') }}" class="nav-link  @if(request()->path() == 'admin/all/quote') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('All Quote') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pending.quote') }}" class="nav-link  @if(request()->path() == 'admin/pending/quote') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Pending Quote') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.processing.quote') }}" class="nav-link  @if(request()->path() == 'admin/processing/quote') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Processing Quote') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.completed.quote') }}" class="nav-link  @if(request()->path() == 'admin/completed/quote') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Completed Quote') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.rejected.quote') }}" class="nav-link  @if(request()->path() == 'admin/rejected/quote') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Rejected Quote') }}</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                @endif
    
                @if (empty($admin->role) || (!empty($permissions) && in_array('Service', $permissions)))
                    <li class="nav-item">
                        <a href="{{ route('admin.service'). '?language=' . $lang_code  }}" class="nav-link
                            @if(request()->path() == 'admin/service') active
                            @elseif(request()->path() == 'admin/service/add') active
                            @elseif(request()->is('admin/service/edit/*')) active
                            @endif">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                {{ __('Service') }}
                            </p>
                        </a>
                    </li>
                @endif


                @if (empty($admin->role) || (!empty($permissions) && in_array('Contact', $permissions)))
                    <li class="nav-item">
                        <a href="{{ route('admin.contact_page'). '?language=' . $lang_code  }}" class="nav-link
                            @if(request()->path() == 'admin/contact-page') active
                            @endif">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>
                                {{ __('Contact') }}
                            </p>
                        </a>
                    </li>
                @endif
          
                @if (empty($admin->role) || (!empty($permissions) && in_array('Portfolio', $permissions)))
                    <li class="nav-item">
                        <a href="{{ route('admin.portfolio.index'). '?language=' . $lang_code  }}" class="nav-link
                            @if(request()->path() == 'admin/portfolio') active
                            @elseif(request()->path() == 'admin/portfolio/add') active
                            @elseif(request()->is('admin/portfolio/edit/*')) active
                            @endif">
                            <i class="nav-icon fas fa-heartbeat"></i>
                            <p>
                                {{ __('Empreendimentos') }}
                            </p>
                        </a>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Blog', $permissions)))
                    <li class="nav-item 
                        @if(request()->path() == 'admin/blog') menu-open
                        @elseif(request()->path() == 'admin/blog/blog-category') menu-open
                        @elseif(request()->path() == 'admin/blog/blog-category/add') menu-open
                        @elseif(request()->path() == 'admin/blog/add') menu-open
                        @elseif(request()->path() == 'admin/archives') menu-open
                        @elseif(request()->path() == 'admin/archive/add') menu-open
                        @elseif(request()->is('admin/blog/blog-category/edit/*')) menu-open
                        @elseif(request()->is('admin/blog/edit/*')) menu-open
                        @elseif(request()->is('admin/archive/edit/*')) menu-open
                        @endif">
                        <a href="#" class="nav-link
                            @if(request()->path() == 'admin/blog') active
                            @elseif(request()->path() == 'admin/blog/blog-category') active
                            @elseif(request()->path() == 'admin/blog/blog-category/add') active
                            @elseif(request()->path() == 'admin/blog/add') active
                            @elseif(request()->path() == 'admin/archives') active
                            @elseif(request()->path() == 'admin/archive/add') active
                            @elseif(request()->is('admin/blog/blog-category/edit/*')) active
                            @elseif(request()->is('admin/blog/edit/*')) active
                            @elseif(request()->is('admin/archive/edit/*')) active
                            @endif">
                            <i class="nav-icon fab fa-blogger-b"></i>
                            <p>
                                {{ __('Blog') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.bcategory'). '?language=' . $lang_code }}" class="nav-link
                                    @if(request()->path() == 'admin/blog/blog-category') active 
                                    @elseif(request()->path() == 'admin/blog/blog-category/add') active
                                    @elseif(request()->is('admin/blog/blog-category/edit/*')) active 
                                    @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Category') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.archive'). '?language=' . $lang_code }}" class="nav-link
                                    @if(request()->path() == 'admin/archives') active 
                                    @elseif(request()->path() == 'admin/archive/add') active
                                    @elseif(request()->is('admin/archive/edit/*')) active
                                    @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Arcive') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.blog'). '?language=' . $lang_code }}" class="nav-link
                                    @if(request()->path() == 'admin/blog') active 
                                    @elseif(request()->path() == 'admin/blog/add') active
                                    @elseif(request()->is('admin/blog/edit/*')) active
                                    @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Blog') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                @if (empty($admin->role) || (!empty($permissions) && in_array('Role Management', $permissions)))
                    <li class="nav-item
                        @if(request()->path() == 'admin/roles') menu-open 
                        @elseif(request()->path() == 'admin/role/add') menu-open
                        @elseif(request()->path() == 'admin/users') menu-open
                        @elseif(request()->path() == 'admin/user/add') menu-open
                        @elseif(request()->is('admin/user/*/edit')) menu-open
                        @elseif(request()->is('admin/role/edit/*')) menu-open
                        @elseif(request()->is('admin/role/*/permissions/manage')) menu-open
                        @endif
                        ">
                        <a href="#" class="nav-link
                            @if(request()->path() == 'admin/roles') active
                            @elseif(request()->path() == 'admin/role/add') active
                            @elseif(request()->path() == 'admin/users') active
                            @elseif(request()->path() == 'admin/user/add') active
                            @elseif(request()->is('admin/user/*/edit')) active
                            @elseif(request()->is('admin/role/edit/*')) active
                            @elseif(request()->is('admin/role/*/permissions/manage')) active
                            @endif
                            ">
                        <i class="nav-icon fas fa-unlock-alt"></i>
                        <p>
                            {{ __('Role Management') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.role.index') }}" class="nav-link
                                @if(request()->path() == 'admin/roles') active
                                @elseif(request()->path() == 'admin/role/add') active
                                @elseif(request()->is('admin/role/edit/*')) active
                                @elseif(request()->is('admin/role/*/permissions/manage')) active
                                @endif
                                ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __("Role Permission") }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link
                                @if(request()->path() == 'admin/users') active
                                @elseif(request()->path() == 'admin/user/add') active
                                @elseif(request()->is('admin/user/*/edit')) active
                                @endif
                                ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('User Role') }}</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Subscribers', $permissions)))
                    <li class="nav-item 
                        @if(request()->path() == 'admin/subscriber') menu-open 
                        @elseif(request()->path() == 'admin/subscriber/add') menu-open
                        @elseif(request()->path() == 'admin/mailsubscriber') menu-open
                        @endif
                            ">
                        <a href="#" class="nav-link
                        @if(request()->path() == 'admin/subscriber') active 
                        @elseif(request()->path() == 'admin/subscriber/add') active
                        @elseif(request()->path() == 'admin/mailsubscriber') active
                        @endif
                        ">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>
                                {{ __('Subscribers') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.newsletter')}}" class="nav-link
                            @if(request()->path() == 'admin/subscriber') active 
                            @elseif(request()->path() == 'admin/subscriber/add') active
                            @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Subscribers') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.mailsubscriber')}}" class="nav-link
                            @if(request()->path() == 'admin/mailsubscriber') active @endif
                            ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('Mail to Subscribers') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Footer', $permissions)))
                    <li class="nav-item
                        @if(request()->path() == 'admin/footer') menu-open 
                        @elseif(request()->path() == 'admin/flink') menu-open
                        @elseif(request()->path() == 'admin/flink/add') menu-open
                        @elseif(request()->is('admin/flink/edit/*')) menu-open
                        @endif
                        ">
                        <a href="#" class="nav-link
                            @if(request()->path() == 'admin/footer') active 
                            @elseif(request()->path() == 'admin/flink') active
                            @elseif(request()->path() == 'admin/flink/add') active
                            @elseif(request()->is('admin/flink/edit/*')) active
                            @endif
                            ">
                        <i class="nav-icon fas fa-feather-alt"></i>
                        <p>
                            {{ __('Footer') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.footer.index'). '?language=' . $lang_code }}" class="nav-link  
                            @if(request()->path() == 'admin/footer') active @endif
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Footer Info') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.flink.index'). '?language=' . $lang_code  }}" class="nav-link
                            @if(request()->path() == 'admin/flink') active 
                            @elseif(request()->path() == 'admin/flink/add') active
                            @elseif(request()->is('admin/flink/edit/*')) active
                            @endif
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Footer Link') }}</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Dynamic Page', $permissions)))
                    <li class="nav-item">
                        <a href="{{ route('admin.dynamic_page'). '?language=' . $lang_code }}"
                            class="nav-link @if(request()->path() == 'admin/dynamic-page') active @endif">

                            <i class="nav-icon  fab fa-sith"></i>
                            <p>
                                {{ __('Dynamic Page') }}
                            </p>
                        </a>
                    </li>
                @endif
                
                @if (empty($admin->role) || (!empty($permissions) && in_array('Language', $permissions)))
                    <li class="nav-item">
                        <a href="{{route('admin.language.index')}}" class="nav-link
                            @if(request()->path() == 'admin/languages') active
                            @elseif(request()->path() == 'admin/language/add') active
                            @elseif(request()->is('admin/language/21/edit')) active
                            @elseif(request()->is('admin/language/*/edit/keyword')) active
                            @endif">
                            <i class="nav-icon fas fa-language"></i>
                            <p>
                                {{ __('Language') }}
                            </p>
                        </a>
                    </li>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Clear Cache', $permissions)))
                <li class="nav-item">
                    <a href="{{ route('admin.cache.clear') }}" class="nav-link">
                        <i class="nav-icon fas fa-broom"></i>
                        <p>
                            {{ __('Limpar Cache') }}
                        </p>
                    </a>
                </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>