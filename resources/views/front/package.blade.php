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
					<h2 class="title">{{ $sinfo->package_title }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $sinfo->package_title }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
  <!--====== SERVICES PLANS PART START ======-->
         
  <div class="services-plans-area">
	<div class="container">
		<div class="row">
			@foreach($plans as $key => $plan)
			<div class="col-lg-4 col-md-6 col-sm-8 mt-30">
				<div class="plans-item text-center">
					<b>{{ $plan->title }}</b>
					<h3 class="title">{{ __('$') }} <span>{{ $plan->price }}</span></h3>
					@if($plan->time)
					<span>Per Month</span>
					@else
					<span></span>
					@endif
					<div class="list">
						@php
							$feature = explode( ',', $plan->feature );
							for ($i=0; $i < count($feature); $i++) { 
								echo '<li><p href="mailto:'.$feature[$i].'">'.$feature[$i].'</p></li>';
							}
						@endphp
					</div>
					<a class="main-btn main-btn-2" href="#">{{ __('Purchase Now') }}</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> 

<!--====== SERVICES PLANS PART ENDS ======-->



@endsection
