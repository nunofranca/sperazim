@extends('front.layout')

@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ $service->title }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item"><a href="{{ route('front.service') }}">{{ __('Service') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== Service details  Start ======-->
<section class="service-details-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="service-details-content">
          <div class="img">
            <img src="{{ asset('assets/front/img/service/'.$service->image) }}" alt="">
          </div>
          <div class="content">
            {!! $service->content !!}
          </div>
        </div>
      </div>
      <div class="col-lg-4 order-first order-lg-last">
        <div class="blog-sidebar-item">
          <div class="sidebar-title">
              <h4 class="title">{{ __('All Services') }}</h4>
          </div>
          <div class="sidebar-categories mt-35">
              <ul>
                @foreach ($all_services as $item)
                  <li><a href="{{ route('front.service.details', $item->slug) }}" class="@if($service->id == $item->id ) active  @endif">{{ $item->title }}</a></li>
                  @endforeach
              </ul>
          </div>
        </div>
        <div class="blog-sidebar-item mt-30">
          <div class="sidebar-title">
              <h4 class="title">{{ __('Never Miss News') }}</h4>
          </div>
          <div class="sidebar-social text-center mt-35">
              <ul>
                @foreach ($socials as $item)
                <li><a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a></li>
                @endforeach
              </ul>
          </div>
        </div>
        <div class="side-bar-contact mt-30" style="background-image: url({{ asset('assets/front/img/'.$sinfo->contact_form_image) }});">
            <div class="overlay"></div>
            <div class="content">
              <h3>{{ __('Make a call for any type query.') }}</h3>
                <i class="fas fa-headset"></i>
            <h4 class="call">
              @php
              $fnumber = explode( ',', $commonsetting->number );
              for ($i=0; $i < count($fnumber); $i++) { 
                  echo '<a class="d-block" href="tel:'.$fnumber[$i].'">'.$fnumber[$i].'</a>';
              }
              @endphp
            </h4>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--====== Service details  End ======-->


@endsection
