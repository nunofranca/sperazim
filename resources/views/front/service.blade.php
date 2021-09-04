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
					<h2 class="title">{{ __('Service') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Service') }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
<!-- Service Area Start -->
<div class="services-item-area pt-90 pb-120">
	<div class="container">
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
<!-- Service Area End -->

@endsection
