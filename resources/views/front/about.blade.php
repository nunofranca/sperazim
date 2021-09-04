@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ __('Speranzini') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Speranzini') }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->



@if($commonsetting->about_about == 1)
<div class="about-experience-area pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="experience-item-one">
				<img class="img-fluid" src="{{ asset('assets/front/img/'.$sinfo->about_image) }}" alt="">
				</div> <!-- experience item -->
			</div>
			<div class="col-lg-7">
				<div class="experience-item mb-0">
					<span>{{  $sinfo->about_experince_yers }} Anos de Experiência</span>
					<h2 class="title mb-4 pb-3">{{ $sinfo->about_title }}</h2>
					<div>
						{!! $sinfo->about_text !!}
					</div>
				</div> <!-- experience item -->
			</div>
		</div>
	</div> <!-- container -->
</div>
@endif

<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8">
				<div class="text-center">
					<h2 class="title">Durante estes anos foram:</h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->


@if($commonsetting->about_w_w_a == 1)
<div class="who-we-are-area">
	<div class="container">
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
				
				
				<div class="mt-100">
				<a class="main-btn wow slideInUp d-inline-block" data-wow-duration="1.5s" data-wow-delay="0s" href="#"> Conheça nossas Obras <i class="fal fa-long-arrow-right"></i></a>
				</div>
			
				
            </div> <!-- row -->
	</div> 
</div>
@endif


<div class="about-experience-area pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="">
					<div>
						{!! $sinfo->about_text2 !!}
					</div>
				</div> <!-- experience item -->
			</div>
			<div class="col-lg-6">
				<div class="">
					<div>
						{!! $sinfo->about_text3 !!}
					</div>
				</div> <!-- experience item -->
			</div>
		</div>
	</div> <!-- container -->
	
</div>


<div class="choose-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-video-thumb">
                    <img src="{{ asset('assets/front/img/'.$sinfo->video_bg_image ) }}" alt="">
                    <a class="video-popup" href="{{  $sinfo->video_link  }}"><i class="fal fa-play"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>



@if($commonsetting->about_history == 1)
<div class="about-history-area pt-50">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title text-center">
					<h3 class="title">{{  $sinfo->our_history_title }}</h3>
					<p>{{  $sinfo->our_history_text }}</p>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				@foreach ($histories as $id=>$item)
					@if ($loop->iteration % 1 == 0)
					<div class="justify-content-start">
						<div class="col-md-12">
							<div class="history-item row ">
							<div class="col-md-2">
								<div class="history-thumb wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<img src="{{ asset('assets/front/img/history/'.$item->image) }}" alt="history">
								</div>
							</div>
							<div class="col-md-10">							
								<div class="history-content wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<h4 class="title">{{ $item->title }}</h4>
									<p>{{ $item->position }}</p>									
								</div>
							</div>	
							</div> 
						</div>
					</div>
					@else 

					@endif
				@endforeach
			</div>
			
		</div> <!-- row -->
	</div> <!-- container -->
</div> 
@endif

@if($commonsetting->about_choose_us == 1)
<div class="choose-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>{{  $sinfo->w_c_us_sub_title  }}</span>
                    <h4 class="title">{{  $sinfo->w_c_us_title  }}</h4>
                </div>
                <div class="choose-cat">
					<a class="main-btn" href="{{ route('front.contact') }}">Cliqui Aqui! <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-thumb-area mt-30">
                    <div class="choose-thumb-2">
                        <img class="item-2" src="{{ asset('assets/front/img/'.$sinfo->w_c_us_image2 ) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endif

@endsection
