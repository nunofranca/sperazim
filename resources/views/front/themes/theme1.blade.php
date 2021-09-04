@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')

    <!--====== BANNER PART START ======-->

    @if($commonsetting->is_t1_slider_section == 1)

        @if ($commonsetting->is_video_hero == 1)
        <div id="herovideo" class="banner-area-2 bg_cover mt-0 video-section" style="background-image: url({{ asset('assets/front/img/'.$sinfo->hero_bg_image ) }});">
            <div id="bgndVideo" data-property="{videoURL:'{{ $commonsetting->hero_section_video_link }}',containment:'#herovideo', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>{{ $sinfo->hero_sub_title }}</span>
                                <h1 class="title">{{ $sinfo->hero_title }}</h1>
                                <p>{{ $sinfo->hero_text }}</p>
                                <ul>
                                    <li><a class="main-btn wow fadeInUp" href="{{ route('front.quot') }}" data-wow-duration=".3s" data-wow-delay=".5s">{{ __('Gate A Quote') }}</a></li>
                                    <li><a class="main-btn main-btn-2 wow fadeInUp" href="{{ route('front.about') }}" data-wow-duration=".7s" data-wow-delay=".7s">{{ __('Learn More') }}</a></li>
                                </ul>
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>
        @else
        <div class="banner-active">
            @foreach ($sliders as $item)
            <div class="single-banner bg_cover" style="background-image: url({{ asset('assets/front/img/slider/'.$item->image) }}">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row @if($currentLang->direction == 'rtl') justify-content-end  @endif">
                            <div class="col-lg-6">
                                <div class="banner-content">
								
								<a data-animation="fadeInUp" data-delay="1.6s" href="#" class="active-home">Em Construção</a><br><br>
								
									
                                    <span data-animation="fadeInLeft" data-delay="0.5s">{{ $item->subtitle }}</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.9s" class="title">{{ $item->title }}</h1>
                                    <p data-animation="fadeInLeft" data-delay="1.3s">{{ $item->text }}</p>
                                    <a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ $item->button_link }}">{{ $item->button_text }} <i class="fal fa-long-arrow-right"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            @endforeach
        </div>
        @endif
       
    @endif
    <!--====== BANNER PART ENDS ======-->
    
    <!--====== WHO WE ARE PART START ======-->

    @if($commonsetting->is_t1_who_we_are_section == 1)
    <div class="who-we-are-area pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="section-title">
                        <span>{{ $sinfo->w_we_are_sub_title }}</span>
                        <h2 class="title">{{ $sinfo->w_we_are_title }}</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight"  data-wow-duration="1.5s" data-wow-delay="0s">
                    <div class="section-title">
                        <p>{{ $sinfo->w_we_are_text }}</p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($features as $item)
                <div class="col-lg-{{ $item->icon }} col-md-6 col-sm-8 wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="what-we-do-item text-center mt-30">
                        <p>{{ $item->subtitle }}</p>
                        <h5 class="title">{{ $item->title }}</h5>
                        <p>{{ $item->text }}</p>
                    </div> <!-- what we do item -->
                </div> 
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="what-we-are-shape-1">
            <img src="{{ asset('assets/front/') }}/images/what-we-are-shape-1.png" alt="shape">
        </div>
        <div class="what-we-are-shape-2">
            <img src="{{ asset('assets/front/') }}/images/what-we-are-shape-2.png" alt="shape">
        </div>
    </div>
    @endif

    <!--====== WHO WE ARE PART ENDS ======-->

    <!--====== SOLUTION PART START ======-->
    @if($commonsetting->is_t1_intro_video_section == 1)
    <div class="solution-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->video_bg_image) }}">
        <div class="solution-overlay pt-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-box">
                            <div class="solution-content">
                                <h4 class="title">{{ $sinfo->video_title }}</h4>
                                <p>{{ $sinfo->video_content }}</p>
                                <div class="solution-play text-right mr-30 d-block d-lg-none">
                                    <a class="video-popup" href="{{ $sinfo->video_link }}"><i class="fas fa-play"></i></a>
                                </div> <!-- solution play -->
                            </div>
                        </div> <!-- solution box -->
                    </div>
                    <div class="col-lg-6">
                        <div class="solution-play text-right mr-30 d-none d-lg-block">
                            <a class="video-popup" href="{{ $sinfo->video_link }}"><i class="fas fa-play"></i></a>
                        </div> <!-- solution play -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>
    @endif
    <!--====== SOLUTION PART ENDS ======-->

    <!--====== SERVICES TITLE PART START ======-->
    @if($commonsetting->is_t1_service_section == 1)
    <div class="services-title-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="services-title-item text-center">
                        <div class="ring-shape"></div>
                        <span>{{ $sinfo->service_sub_title }}</span>
                        <h3 class="title">{{ $sinfo->service_title }}</h3>
                    </div> <!-- services title item -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @endif
    <!--====== SERVICES TITLE PART ENDS ======-->

    <!--====== LATEST SERVICES PART START ======-->
    @if($commonsetting->is_t1_service_section == 1)
    <div class="latest-services-area">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($services as $item)
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="single-services mt-30 mb-55">
                        <div class="services-thumb">
                            <img src="{{ asset('assets/front/img/service/'.$item->image) }}" alt="">
                        </div>
                        <div class="services-content">
                            <h4 class="title">{{ $item->title }}</h4>
                            <p>
                                {{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 140) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 140) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}
                            </p>
                            <a href="{{ route('front.service.details', $item->slug) }}">{{ __('Read More') }} <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @endif
    <!--====== LATEST SERVICES PART ENDS ======-->

    <!--====== WHY CHOOSE PART START ======-->
    @if($commonsetting->is_t1_why_choose_us_section == 1)
    <div class="why-choose-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
						<h2 class="title">{{  $sinfo->w_c_us_title  }}</h2>
                        <span>{{  $sinfo->w_c_us_sub_title  }}</span>                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($why_selects as $item)
                <div class="col-lg-4 col-md-6 col-sm-9 wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="single-choose text-center mt-30">
                        <div class="icon-box">
                            <span></span>
                            <i class="{{ $item->icon }}"></i>
                        </div>
						<p>{{ $item->text }}</p>
                        <h4 class="title">{{ $item->title }}</h4>                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="choose-dot">
            <img src="{{ asset('assets/front/') }}/images/choose-dot.png" alt="">
        </div>
        <div class="choose-shape">
            <img src="{{ asset('assets/front/') }}/images/choose-shape.png" alt="">
        </div>
    </div>
    @endif
    <!--====== WHY CHOOSE PART ENDS ======-->

    <!--====== CASE STUDIES PART START ======-->
    @if($commonsetting->is_t1_portfolio_section == 1)
    <div class="case-studies-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span>{{  $sinfo->portfolio_sub_title  }}</span>
                        <h2 class="title">{{  $sinfo->portfolio_title  }}</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid pl-70 pr-70">
            <div class="row no-gutters case-studies-active">
                @foreach ($portfolios as $item)
                <div class="col-lg-3">
                    <div class="single-case-studies mt-30">
                        <div class="img" style="background-image: url({{ asset('assets/front/img/portfolio/'.$item->featured_image) }})"></div>
                        <div class="case-overlay">
                            <div class="item">
                                <span>{{ $item->service->title }}</span>
                                <h5 class="title">
                                    {{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}
                                </h5>
                            </div>
                            <a href="{{ route('front.portfolio.details', $item->slug) }}"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single case studies -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- containe fluid -->
    </div>
    @endif
    <!--====== CASE STUDIES PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    @if($commonsetting->is_t1_testimonial_section == 1)
    <div class="testimonial-area" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>{{  $sinfo->testimonial_subtitle  }}</span>
                        <h2 class="title">{{  $sinfo->testimonial_title  }}</h2>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row no-gutters testimonail-active">
                @foreach ($testimonials as $item)
                <div class="col-md-6 display-content">
                    <div class="single-testimonial">
                        <img src="{{asset('assets/front/img/'.$item->image) }}" alt="case-studies">
                        <div class="t-content">
                          <div class="star">
                                @for ($i = 0; $i < $item->rating; $i++)
									<i class="fas fa-star"></i>
								@endfor
                          </div>
                          <p>
                            {{ $item->message }}
                        </p>
                        <h4 class="name">
                            {{ $item->name }}
                        </h4>                       
                        </div>
                        
                    </div> <!-- single case studies -->
                </div>  
                @endforeach
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </div>
    @endif
    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM MEMBER PART START ======-->
    @if($commonsetting->is_t1_team_section == 1)
    <div class="team-member-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>{{  $sinfo->team_sub_title  }}</span>
                        <h2 class="title">{{  $sinfo->team_title  }}</h2>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($teams as $item)
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-team-member mt-30">
                        <img src="{{ asset('assets/front/img/team/'.$item->image) }}" alt="team-member">
                        <div class="team-member-overlay">
                            <ul>
                                @if($item->url1 && $item->icon1)
                                <li>
                                    <a href="{{ $item->url1 }}">
                                        <i class="{{ $item->icon1 }}"></i>
                                    </a>
                                </li>
                                @endif
                                @if($item->url2 && $item->icon2)
                                <li>
                                    <a href="{{ $item->url2 }}">
                                        <i class="{{ $item->icon2 }}"></i>
                                    </a>
                                </li>
                                @endif
                                @if($item->url3 && $item->icon3)
                                <li>
                                    <a href="{{ $item->url3 }}">
                                        <i class="{{ $item->icon3 }}"></i>
                                    </a>
                                </li>
                                @endif
                                @if($item->url4 && $item->icon4)
                                <li>
                                    <a href="{{ $item->url4 }}">
                                        <i class="{{ $item->icon4 }}"></i>
                                    </a>
                                </li>
                                @endif
                                @if($item->url5 && $item->icon5)
                                <li>
                                    <a href="{{ $item->url5 }}">
                                        <i class="{{ $item->icon5 }}"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                            <a href="{{ route('front.team_details', $item->id) }}" class="d-block"><h4 class="title">{{ $item->name }}</h4></a>
                            <span>I{{ $item->dagenation }}</span>
                        </div>
                    </div> <!-- single team member -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </div>
    @endif
    <!--====== TEAM MEMBER PART ENDS ======-->

    <!--====== CONTACT US PART START ======-->
    @if($commonsetting->is_t1_contact_section == 1)
    <div class="contact-us-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->contact_section_bg_image) }}">
        <div class="contact-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <span>{{ $sinfo->contact_sub_title }}</span>
                            <h2 class="title">{{ $sinfo->contact_title }}</h2>
                        </div> <!-- sevtion title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-details d-flex">
                            <div class="contact-thumb wow slideInLeft" data-wow-duration=".5s" data-wow-delay="0s">
                                <img src="{{ asset('assets/front/img/'.$sinfo->contact_form_image) }}" alt="">
                            </div>
                            <div class="contact-form-area">
                                <form action="{{ route('front.contact.submit') }}" method="POST">
                                    @csrf
                                    <div class="input-title">
                                        <h3 class="title">{{ $sinfo->contact_form_title }}</h3>
                                    </div> <!-- input title -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="{{ __('Full Name Here') }}" name="name">
                                                <i class="fal fa-user"></i>
                                            </div> <!-- input box -->
                                            @if ($errors->has('name'))
                                                <p class="text-danger"> {{ $errors->first('name') }} </p>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="email" placeholder="{{ __('Email Here') }}" name="email">
                                                <i class="fal fa-envelope-open"></i>
                                            </div> <!-- input box -->
                                            @if ($errors->has('email'))
                                                <p class="text-danger"> {{ $errors->first('email') }} </p>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="{{ __('Phone No') }}" name="phone">
                                                <i class="fal fa-phone"></i>
                                            </div> <!-- input box -->
                                            @if ($errors->has('phone'))
                                                <p class="text-danger"> {{ $errors->first('phone') }} </p>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="{{ __('Subject') }}" name="subject">
                                                <i class="fal fa-edit"></i>
                                                @if ($errors->has('subject'))
                                                <p class="text-danger"> {{ $errors->first('subject') }} </p>
                                            @endif
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mt-30">
                                                <textarea name="message" id="#" cols="30" rows="10" placeholder="{{ __('Message Us') }}"></textarea>
                                                <i class="fal fa-pencil"></i>
                                                @if ($errors->has('message'))
                                                <p class="text-danger"> {{ $errors->first('message') }} </p>
                                                @endif
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <div class="contact-btn-captcha-wrapper">
												
                                                    <button class="main-btn wow slideInUp d-inline-block" data-wow-duration="1.5s" data-wow-delay="0s" type="submit">{{ __('Send Message') }}
                                                    <i class="fal fa-long-arrow-right"></i></button>
                                                
                                                </div>
                                            </div> <!-- input box -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- contact details -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>
    @endif
    <!--====== CONTACT US PART ENDS ======-->

    <!--====== OUE CHOOSE PART START ======-->
    @if($commonsetting->is_t1_faq_counter_section == 1)
    <div class="our-choose-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-30">
                        <span>{{ $sinfo->faq_sub_title }}</span>
                        <h2 class="title">{{ $sinfo->faq_title }}</h2>
                    </div> <!-- section title -->
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $item)
                        <div class="card">
                            <div class="card-header" id="heading{{ $item->id }}">
                                <a class="{{ $loop->first ? '' : 'collapsed' }}" href="" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $item->id }}">
                                    <i class="fal fa-long-arrow-right"></i> {{ $item->title }}
                                </a>
                            </div>

                            <div id="collapse{{ $item->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{!! $item->content !!}</p>
                                </div>
                            </div>
                        </div> <!-- card -->
                        @endforeach
                    </div> <!-- accordion -->
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="our-choose-counter-area mt-30">
                        <div class="row">
                            @foreach ($counters as $item)
                            <div class="col-md-6 col-sm-6">
                                <div class="our-choose-counter wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                                    <sub class="c-wrap"><span class="counter">{{ $item->number }}</span> <sup>+</sup></sub>
                                    <span>{{ $item->title }}</span>
                                    <p>{{ $item->text }}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div> <!-- row -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @endif
    <!--====== OUE CHOOSE PART ENDS ======-->

    <!--====== LATEST NEWS PART START ======-->
    @if($commonsetting->is_t1_blog_section == 1)
    <div class="latest-news-area gray-bg">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>{{ $sinfo->blog_sub_title }}</span>
                        <h2 class="title">{{ $sinfo->blog_title }}</h2>
                    </div> <!-- sction title -->
                </div>
            </div> <!-- row -->
            <div class="row news-area justify-content-center">
                @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="single-news mt-30">
                        <div class="img" style="background-image: url({{ asset('assets/front/img/blog/'.$item->image) }})"></div>
                        <div class="single-news-overlay">
                            <span>{{ $item->bcategory->name }}</span>
                            <h5 class="title"><a href="{{route('front.blogdetails', $item->slug)}}">{{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}</a></h5>
                            <a href="{{route('front.blogdetails', $item->slug)}}"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single news -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
       
    </div>
    @endif
    <!--====== LATEST NEWS PART ENDS ======-->
    
    

@endsection
