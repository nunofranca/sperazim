@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')


 <!--====== BANNER PART START ======-->
 @if($commonsetting->is_t3_hero_section == 1)
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
        <div class="banner-area-2 bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->hero_bg_image ) }});">
            <div class="banner-overlay">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="banner-content text-center">
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

<!--====== SERVICES PART START ======-->
@if($commonsetting->is_t3_service_section == 1)
<div class="services-area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>{{ $sinfo->service_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->service_title }}</h2>
                </div><!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach ($services as $item)
            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-duration=".1s" data-wow-delay=".3s">
                <div class="single-services text-center mt-30">
                    <div class="icon">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <h4 class="title">{{ $item->title }}</h4>
                    <p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
                    <a href="{{ route('front.service.details', $item->slug) }}"><i class="fal fa-angle-right"></i> {{ __('Read More') }}</a>
                </div> <!-- singke services -->
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== SERVICES PART ENDS ======-->

<!--====== VIDEO PART START ======-->
@if($commonsetting->is_t3_portfolio_section == 1)
<div class="video-area bg_cover" style="background-image: url({{ asset('assets/front/') }}/images/video-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-item">
                    <a class="video-popup" href="{{ $sinfo->video_link }}"><i class="fal fa-play"></i></a><br>
                    <span>{{ $sinfo->portfolio_sub_title }}</span>
                    <h3 class="title">{{ $sinfo->portfolio_title }}</h3>
                </div> <!-- video item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="video-thumb-1">
        <img src="{{ asset('assets/front/img/'.$sinfo->video_image_left) }}" alt="">
    </div>
    <div class="video-thumb-2">
        <img src="{{ asset('assets/front/img/'.$sinfo->video_image_right) }}" alt="">
    </div>
</div>
@endif
<!--====== VIDEO PART ENDS ======-->

<!--====== PORTFOLIO PART START ======-->
@if($commonsetting->is_t3_portfolio_section == 1)
<div class="portfolio-area">
    <div class="container">
        <div class="row portfolio-active">
            @foreach ($portfolios as $item)
            <div class="col-lg-4">
                <a href="{{ route('front.portfolio.details', $item->slug) }}" class="single-portfolio mb-30">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('assets/front/img/portfolio/'.$item->featured_image) }}" alt="">
                    </div>
                    <div class="portfolio-content">
                        <span>{{ $item->service->title }}</span>
                        <h5 class="title">
                            {{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}
                        </h5>
                        <p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
                    </div>
                </a> <!-- single portfolio -->
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== PORTFOLIO PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    @if($commonsetting->is_t3_testimonial_section == 1)
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
@if($commonsetting->is_t3_faq_section == 1)
<div class="faq-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
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
            <div class="col-lg-6 mt-5">
                <div class="row">
                    @foreach ($counters as $item)
                    <div class="col-lg-6 col-md-6 mb-30 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
                        <div class="single-faq">
                            <h3 class="title"><span class="counter">{{ $item->number }} </span>+</h3>
                            <span>{{ $item->title }}</span>
                            <p>{{ $item->text }}</p>
                            <i class="{{ $item->icon }}"></i>
                        </div> <!-- single faq -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== FAQ PART ENDS ======-->

<!--====== TEAM PART START ======-->
@if($commonsetting->is_t3_team_section == 1)
<div class="team-area gray-bg pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>{{  $sinfo->team_sub_title  }}</span>
                    <h2 class="title">{{  $sinfo->team_title  }}</h2>
                </div><!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach ($teams as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team mt-30">
                    <div class="team-thumb">
                        <img src="{{ asset('assets/front/img/team/'.$item->image) }}" alt="">
                    </div>
                    <div class="team-content text-center">
                        <a href="{{ route('front.team_details', $item->id) }}"><h5 class="title">{{ $item->name }}</h5></a>
                        <span>{{ $item->dagenation }}</span>
                    </div>
                </div> <!-- single team -->
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== TEAM PART ENDS ======-->

<!--====== ACTION PART START ======-->
@if($commonsetting->is_t3_meet_us_section == 1)
<div class="action-area">
    <div class="action-overlay bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->meeet_us_bg_image ) }});">
        <div class="container">
            <div class="action-bg">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="action-content">
                            <h3 class="title">{{ $sinfo->meeet_us_text }}</h3>
                        </div> <!-- action content -->
                    </div>
                    <div class="col-lg-4">
                        <div class="action-btn text-left text-lg-right">
                            <a class="main-btn" href="contact.html"><i class="fal fa-comments"></i>{{ $sinfo->meeet_us_button_text }}</a>
                        </div> <!-- action btn -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</div>
@endif
<!--====== ACTION PART ENDS ======-->

<!--====== BLOG PART START ======-->
@if($commonsetting->is_t3_news_section == 1)
<div class="blog-area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>{{ $sinfo->blog_sub_title }}</span>
                    <h2 class="title">{{ $sinfo->blog_title }}</h2>
                </div><!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            @foreach ($blogs as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".4s">
                <div class="single-blog mt-30">
                    <ul>
                        <li><i class="fal fa-user"></i> By Admin</li>
                        <li><i class="fal fa-calendar-alt"></i> {{date ( 'd M, Y', strtotime($item->created_at) )}}</li>
                    </ul>
                    <h4 class="title"><a href="{{route('front.blogdetails', $item->slug)}}">{{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}</a></h4>
                    <p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 130) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 130) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
                    <a href="{{route('front.blogdetails', $item->slug)}}"><i class="fal fa-angle-right"></i> {{ __('Read More') }}</a>
                </div>
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</div>
@endif
<!--====== BLOG PART ENDS ======-->


    <!--====== BRAND 2 PART START ======-->
    @if($commonsetting->is_t3_client_section == 1)
    <div class="brand-2-area pb-120 pt-0">
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