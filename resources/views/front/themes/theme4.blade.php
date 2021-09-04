@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')

<!--====== BANNER PART START ======-->
@if($commonsetting->is_t4_hero_section == 1)
    @if ($commonsetting->is_video_hero == 1)
        <div id="herovideo" class="banner-area-2 bg_cover mt-0 video-section" style="background-image: url({{ asset('assets/front/img/'.$sinfo->hero_bg_image ) }});">
            <div id="bgndVideo" data-property="{videoURL:'{{ $commonsetting->hero_section_video_link }}',containment:'#herovideo', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
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
        <div class="banner-area-3 bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->hero_bg_image ) }});">
            <div class="banner-overlay">
                <img class="item-1" src="{{ asset('assets/front/') }}/images/banner-shape-1.png" alt="">
                <img class="item-2" src="{{ asset('assets/front/') }}/images/banner-shape-2.png" alt="">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-9">
                            <div class="banner-content mt-100 text-center">
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
    @endif
@endif
<!--====== BANNER PART ENDS ======-->

@if($commonsetting->is_t4_client_section == 1)
<div class="brand-2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active">
                    @foreach ($clients as $item)
                    <a href="{{ $item->link }}" class="brand-item">
                        <img src="{{ asset('assets/front/img/client/'.$item->image) }}" alt="{{ $item->name }}">
                    </a> 
                    @endforeach
                </div> <!-- brand item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif

<!--====== FEATURES PART START ======-->
@if($commonsetting->is_t4_about_section == 1)
<div class="features-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="features-item">
                    <div class="image">
                        <img class="" src="{{ asset('assets/front/img/'.$sinfo->about_image) }}" alt="">
                    </div>
                    <div class="content">
                        <strong>{{ $sinfo->about_sub_title }}</strong>
                        <h2 class="title">{{ $sinfo->about_title }}</h2>
                        <p>{!! (strlen(strip_tags(Helper::convertUtf8($sinfo->about_text))) > 280) ? substr(strip_tags(Helper::convertUtf8($sinfo->about_text)), 0, 280) . '...' : strip_tags(Helper::convertUtf8($sinfo->about_text)) !!}</p>
                        <div class="about-experience">
                            <h3>{{ $sinfo->about_experince_yers }}</h3>
                            <span>{{ __('Years Of Experience') }}</span>
                        </div>
                        <ul>
                            <li><a class="main-btn wow fadeInUp" href="{{ route('front.about') }}" data-wow-duration=".5s" data-wow-delay=".4s">{{ __('Learn More') }}</a></li>
                            <li><a class="video-popup main-btn main-btn-2 wow fadeInUp" href="{{ $sinfo->about_intro_video }}" data-wow-duration="1s" data-wow-delay=".6s"> <i class="fal fa-video"></i>{{ __('About Video') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @if($setting->is_t4_feature_section == 1)
        <div class="row">
            @foreach ($features as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                <div class="what-we-do-item text-center mt-30">
                    <i class="{{ $item->icon }}"></i>
                    <h5 class="title">{{ $item->title }}</h5>
                    <p>{{ $item->text }}</p>
                </div> <!-- what we do item -->
            </div> 
            @endforeach
        </div> <!-- row -->
        @endif
    </div>
</div> 
@endif
<!--====== FEATURES PART ENDS ======-->

<!--====== CHOOSE PART START ======-->
@if($commonsetting->is_t4_who_we_are_section == 1)
<div class="choose-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>{{  $sinfo->w_c_us_sub_title  }}</span>
                    <h3 class="title">{{  $sinfo->w_c_us_title  }}</h3>
                </div>
                <div class="choose-cat">
                    @foreach ($why_selects as $item)
                    <div class="choose-cat-item mt-40 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".4s">
                        <h4 class="title">{{ $item->title }}</h4>
                        <p>{{ $item->text }}</p>
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-thumb-area mt-30">
                    <div class="choose-thumb-1">
                        <img class="item-1" src="{{ asset('assets/front/img/'.$sinfo->w_c_us_image1 ) }}" alt="">
                    </div>
                    <div class="choose-thumb-2">
                        <img class="item-2" src="{{ asset('assets/front/img/'.$sinfo->w_c_us_image2 ) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @if($setting->is_t4_intro_video_section == 1)
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-video-thumb mt-115">
                    <img src="{{ asset('assets/front/img/'.$sinfo->video_bg_image ) }}" alt="">
                    <a class="video-popup" href="{{  $sinfo->video_link  }}"><i class="fal fa-play"></i></a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div> 
@endif
<!--====== CHOOSE PART ENDS ======-->

<!--====== PORTFOLIO 3 PART START ======-->
@if($commonsetting->is_t4_portfolio_section == 1)  
<div class="portfolio-3-area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>{{ $sinfo->portfolio_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->portfolio_title }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($portfolios as $item)
            <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="single-portfolio mt-30">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('assets/front/img/portfolio/'.$item->featured_image) }}" alt="">
                    </div>
                    <div class="portfolio-content">
                        <span>{{ $item->service->title }}</span>
                        <a href="{{ route('front.portfolio.details', $item->slug) }}"><h4 class="title">
                            {{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}
                            </h4></a>
                        <p>T{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> 
@endif
<!--====== PORTFOLIO 3 PART ENDS ======-->

<!--====== COUNTER PART START ======-->
@if($commonsetting->is_t4_counter_section == 1)  
<div class="counter-area bg_cover pt-80 pb-115" style="background-image: url({{ asset('assets/front/') }}/images/video-bg.jpg);">
    <div class="container">
        <div class="row">
            @foreach ($counters as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mt-30">
                    <h3 class="title"><span class="counter">{{ $item->number }}</span>+</h3>
                    <p>{{ $item->title }}</p>
                    <i class="{{ $item->icon }}"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> 
@endif
<!--====== COUNTER PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->
@if($commonsetting->is_t4_testmonial_section == 1)  
<div class="testimonial-area gray-bg"  style="background-image: url({{ asset('assets/front/images/map.png') }}">
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
            <div class="col-md-6">
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
                    <span class="designation">{{ $item->position }}</span>
                    </div>
                    
                </div> <!-- single case studies -->
            </div>  
            @endforeach
        </div> <!-- row -->
    </div> <!-- container fluid -->
</div>
@endif
<!--====== TESTIMONIAL PART ENDS ======-->
    
<!--====== FAQ PART START ======-->
@if($commonsetting->is_t4_faq_section == 1)  
<div class="faq-area faq-area-3 pt-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 d-none d-sm-block">
                <div class="faq-thumb">
                    <div class="faq-thumb-1 text-right">
                        <img src="{{ asset('assets/front/img/'.$sinfo->faq_image2) }}" alt="">
                    </div>
                    <div class="faq-thumb-2">
                        <img src="{{ asset('assets/front/img/'.$sinfo->faq_image1) }}" alt="">
                    </div>
                </div> <!-- faq thumb -->
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="section-title text-left">
                    <span>{{ $sinfo->faq_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->faq_title }}</h2>
                </div> <!-- section title -->
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $item)
                        <div class="card">
                            <div class="card-header" id="heading{{ $item->id }}">
                                <a class="{{ $loop->first ? '' : 'collapsed' }}" href="" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $item->id }}">
                                    {{ $item->title }}
                                </a>
                            </div>

                            <div id="collapse{{ $item->id }}" class="collapse  {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $item->id }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{!! $item->content !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- faq accordion -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== FAQ PART ENDS ======-->

<!--====== GET IN TOUCH PART START ======-->
@if($commonsetting->is_t4_contact_section == 1)   
<div class="get-in-touch-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>{{ $sinfo->contact_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->contact_title }}</h2>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-area">
                    <form action="{{ route('front.contact.submit') }}" method="POST">
                        @csrf
                        <div class="input-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                            <input type="text" placeholder="{{ __('Full Name Here') }}" name="name">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="email" placeholder="{{ __('Email Here') }}" name="email">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="text" placeholder="{{ __('Phone No') }}" name="phone">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="text" placeholder="{{ __('Subject') }}" name="subject">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.4s" data-wow-delay=".6s">
                            <textarea name="message" id="#" cols="30" rows="10" placeholder="{{ __('Message Us') }}"></textarea>
                        </div>
                        <div class="input-box mt-20">
                            @if ($commonsetting->is_recaptcha == 1)
                            <div class="">
                              {!! NoCaptcha::renderJs() !!}
                              {!! NoCaptcha::display() !!}
                              @if ($errors->has('g-recaptcha-response'))
                                @php
                                    $errmsg = $errors->first('g-recaptcha-response');
                                @endphp
                                <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                              @endif
                            </div>
                        @endif
                            <button class="main-btn wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" type="submit">{{ __('Send Message') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="get-map d-none d-lg-block">
                    {!! $sinfo->contact_map !!}
                </div>
            </div>
        </div>
    </div>
</div> 
@endif
<!--====== GET IN TOUCH PART ENDS ======-->

@endsection