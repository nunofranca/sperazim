@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')

<!--====== BANNER PART START ======-->
@if($commonsetting->is_t2_hero_section == 1)
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
        <div class="banner-area" style="background-image: url({{ asset('assets/front/') }}/images/banner-gradient-bg.png)">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner-content pt-100">
                            <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">{{ $sinfo->hero_sub_title }}</span>
                            <h1 class="title wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s">{{ $sinfo->hero_title }}</h1>
                            <ul>
                                @if($sinfo->hero_f_icon1 && $sinfo->hero_f_text1)
                                <li>
                                    <a class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="1s" href="#"><span><i class="{{ $sinfo->hero_f_icon1 }}"></i></span>
                                        <p>{{ $sinfo->hero_f_text1 }}</p>
                                    </a>
                                </li>
                                @endif
                                @if($sinfo->hero_f_icon2 && $sinfo->hero_f_text2)
                                <li>
                                    <a class="btn-2 fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.5s" href="#"><span><i class="{{ $sinfo->hero_f_icon2 }}"></i></span>
                                        <p>{{ $sinfo->hero_f_text2 }}</p>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
                <div class="banner-shape d-none d-lg-block">
                    <img src="{{ asset('assets/front/img/'.$sinfo->hero_image) }}" alt="">
                </div>
            </div> <!-- container -->
        </div>
    @endif
@endif
<!--====== BANNER PART ENDS ======-->

<!--====== ABOUT PART START ======-->
@if($commonsetting->is_t2_about_section == 1)
<div class="about-area pt-90 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="about-thumb mt-30">
                    <img src="{{ asset('assets/front/img/'.$sinfo->about_image) }}" alt="">
                </div> <!-- about thumb -->
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
                <div class="about-item mt-30">
                    <span>{{ $sinfo->about_sub_title }}</span>
                    <h3 class="title">{{ $sinfo->about_title }}</h3>
                    <div>
                        <p>{!! (strlen(strip_tags(Helper::convertUtf8($sinfo->about_text))) > 280) ? substr(strip_tags(Helper::convertUtf8($sinfo->about_text)), 0, 280) . '...' : strip_tags(Helper::convertUtf8($sinfo->about_text)) !!}</p>
                    </div>
                    {{-- <p>{{ $sinfo->about_text }}</p> --}}
                    <div class="about-experience">
                        <h3>{{ $sinfo->about_experince_yers }}</h3>
                        <span>{{ __('Years Of Experience') }}</span>
                    </div>
                    <ul>
                        <li><a class="main-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" href="{{ route('front.about') }}">{{ __('Learn More') }}</a></li>
                        <li><a class="video-popup main-btn main-btn-2 wow fadeInUp" href="{{ $sinfo->about_intro_video }}" data-wow-duration="2s" data-wow-delay=".5s" ><i class="fal fa-video"></i> {{ __('Intro Video') }}</a></li>
                    </ul>
                </div> <!-- about item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== ABOUT PART ENDS ======-->



<!--====== SERVICES ITEM PART START ======-->
@if($commonsetting->is_t2_service_section == 1)
<div class="services-item-area gray-bg pt-90 pb-120">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center text-center">
                        <span>{{ $sinfo->service_sub_title }}</span>
                        <h3 class="title">{{ $sinfo->service_title }}</h3>
                    </div> <!-- services title item -->
                </div>
            </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach ($services as $item)
            <div class="col-lg-4 col-md-6 col-sm-8">
				<a href="{{ route('front.service.details', $item->slug) }}" class="single-services-item mt-30">
					<div class="img" style="background-image: url({{ asset('assets/front/img/service/'.$item->image) }})"></div>
					<div class="services-overlay">
						<i class="{{ $item->icon }}"></i>
						<h4 class="title">{{ $item->title }}</h4>
						<p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 100) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 100) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
					</div>
				</a> <!-- single services -->
			</div>
            @endforeach
            
        </div> <!-- row -->
    </div> <!-- container -->
</div> 
@endif
<!--====== SERVICES ITEM PART ENDS ======-->


<!--====== INTRO VIDEO PART START ======-->
@if($commonsetting->is_t2_intro_video_section == 1)
<div class="intro-video-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->video_bg_image) }});">
    <div class="intro-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="intro-video-content mt-30">
                        <span>{{ $sinfo->video_sub_title }}</span>
                        <h2 class="title">{{ $sinfo->video_title }}</h2>
                        <p class="text-1">{{ $sinfo->video_text }}</p>
                        <p class="text-2">{{ $sinfo->video_content }}</p>
                    </div> <!-- intro video content -->
                </div>
                <div class="col-lg-6">
                    <div class="intro-thumb mt-30">
                        <img src="{{ asset('assets/front/img/'.$sinfo->video_image) }}" alt="">
                        <a class="video-popup" href="{{ $sinfo->video_link }}"><i class="fas fa-play"></i></a>
                    </div> <!-- intro thumb -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</div>
@endif
<!--====== INTRO VIDEO PART ENDS ======-->

<!--====== LEADERSHIP PART START ======-->
@if($commonsetting->is_t2_team_section == 1)
<div class="leadership-area gray-bg pt-105 pb-160">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pl-25 pr-25">
                    <span>{{ $sinfo->team_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->team_title }}</h2>
                </div> <!-- section title 2 -->
            </div>
        </div> <!-- row -->
        <div class="row leadership-active">
            @foreach ($teams as $item)
            <div class="col-lg-4">
                <div class="leadership-item mt-30">
                    <img src="{{ asset('assets/front/img/team/'.$item->image) }}" alt="">
                    <div class="leadership-content">
                        <a href="{{ route('front.team_details', $item->id) }}" class="d-block"><h5 class="title">{{ $item->name }}</h5></a>
                        <span>{{ $item->dagenation }}</span>
                    </div>
                </div> <!-- leadership item -->
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== LEADERSHIP PART ENDS ======-->

<!--====== PROGRESS BAR PART START ======-->
@if($commonsetting->is_t2_counter_section == 1)
<div class="Progress-bar-area mt-150 mb-95">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($counters as $item)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".1s">
                    <div class="Progress-bar-content text-center">
                        <i class="{{ $item->icon }}"></i>
                        <h3 class="title"><span class="counter">{{ $item->number }}</span>+</h3>
                        <p>
                            {{ $item->title }}
                        </p>
                    </div>
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== PROGRESS BAR PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->
@if($commonsetting->is_t2_testimonial_section == 1)
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

<!--====== QUOTE PART START ======-->
@if($commonsetting->is_t2_contact_section == 1)
<div class="quote-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->contact_section_bg_image) }});">
    <div class="quote-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pl-25 pr-25">
                        <span class="text-white">{{ $sinfo->contact_sub_title }}</span>
                        <h2 class="title text-white">{{ $sinfo->contact_title }}</h2>
                    </div> <!-- section title 2 -->
                </div>
            </div> <!-- row -->
            <div class="quote-form">
                <form action="{{ route('front.contact.submit') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-box mt-30">
                                <input type="text" placeholder="{{ __('Full Name Here') }}" name="name">
                                <i class="fal fa-user"></i>
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{ $errors->first('name') }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mt-30">
                                <input type="email" placeholder="{{ __('Email Here') }}" name="email">
                                <i class="fal fa-envelope"></i>
                                @if ($errors->has('email'))
                                    <p class="text-danger"> {{ $errors->first('email') }} </p>
                                @endif
                            </div>
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
                            <div class="input-box text-center mt-30">
                                <textarea name="message" id="#" cols="30" rows="10" placeholder="{{ __('Message Us') }}"></textarea>
                                @if ($errors->has('message'))
                                <p class="text-danger"> {{ $errors->first('message') }} </p>
                                @endif
                             
                            </div>
                        </div>
                        <div class="col-lg-12  mt-30">
                            @if ($commonsetting->is_recaptcha == 1)
                            <div class="d-inline-block">
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
                            <div class="input-box text-center">
                               
                                <button class="main-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" type="submit">{{ __('Message Us') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- quote form -->
        </div> <!-- container -->
    </div>
</div>
@endif
<!--====== QUOTE PART ENDS ======-->


<!--====== ANSWERS PART START ======-->
@if($commonsetting->is_t2_faq_section == 1)
<div class="asnwers-area pt-105 pb-100 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>{{ $sinfo->faq_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->faq_title }}</h2>
                
                </div> <!-- section title 2 -->
                <div class="faq-accordion-2 mt-30">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $item)
                        <div class="card wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">
                            <div class="card-header" id="heading{{ $item->id }}">
                                <a class="{{ $loop->first ? '' : 'collapsed' }}" href="" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $item->id }}">
                                   {{ $item->title }}
                                </a>
                            </div>

                            <div id="collapse{{ $item->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $item->id }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $item->content !!}
                                </div>
                            </div>
                        </div> <!-- card -->
                        @endforeach
                    </div>
                </div> <!-- faq accordion -->
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="answers-thumb">
                    <div class="answers-thumb-1 text-right">
                        <img src="{{ asset('assets/front/img/'.$sinfo->faq_image2) }}" alt="">
                    </div>
                    <div class="answers-thumb-2">
                        <img src="{{ asset('assets/front/img/'.$sinfo->faq_image1) }}" alt="">
                    </div>
                </div> <!-- answers thumb -->
            </div>
        </div> <!-- row -->
    </div> <!-- containter -->
</div>
@endif
<!--====== ANSWERS PART ENDS ======-->

<!--====== ACTION 2 PART START ======-->
@if($commonsetting->is_t2_quote_section == 1)
<div class="action-2-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->contact_section_bg_image) }});">
    <div class="action-overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="action-item mt-30">
                        <h2 class="title">{{ __('Get A Quote right now.') }}</h2>
                    </div> <!-- action item -->
                </div>
                <div class="col-lg-7">
                    <div class="action-support d-flex mt-30">
                        <div class="action-support-item wow bounceInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                            <p>{{ __('Mail Us') }}</p>
                            <span>
                                @php
                                $number = explode( ',', $commonsetting->number );
                                @endphp
                                {{ $number[0] }}
                            </span>
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="action-support-item action-support-item-2 wow bounceInUp" data-wow-duration=".7s" data-wow-delay=".7s">
                            <p>{{ __('Make A Call') }}</p>
                            <span>
                                @php
                                $email = explode( ',', $commonsetting->email );
                                @endphp
                                {{ $email[0] }}
                            </span>
                            <i class="fal fa-phone"></i>
                        </div>
                    </div> <!-- action support -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</div> 
@endif
<!--====== ACTION 2 PART ENDS ======-->

<!--====== LATEST NEWS PART START ======-->
@if($commonsetting->is_t2_news_section == 1)
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

<!--====== BRAND 2 PART START ======-->
@if($commonsetting->is_t2_client_section == 1)
<div class="brand-2-area pb-120">
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
<!--====== BRAND 2 PART ENDS ======-->

@endsection
