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
					<h2 class="title">{{ $sinfo->faq_sub_title }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $sinfo->faq_sub_title }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


 <!--====== ABOT FAQ PART START ======-->
         
 <div class="about-faq-area about-faq-area-page pb-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="faq-accordion-3 mt-30">
					<div class="accordion" id="accordionExample">
						@foreach ($faqs as $item)
						<div class="card">
							<div class="card-header" id="heading{{ $item->id }}">
								<a class="{{ $loop->first ? '' : 'collapsed' }}" href="" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $item->id }}">
									<i class="fal fa-magic"></i>{{ $item->title }}
								</a>
							</div>

							<div id="collapse{{ $item->id }}" class="collapse  {{ $loop->first ? 'show' : '' }}" aria-labelledby="headingO{{ $item->id }}" data-parent="#accordionExample">
								<div class="card-body">
									{!! $item->content !!}
								</div>
							</div>
						</div> <!-- card -->
						@endforeach
					</div>
				</div> <!-- faq accordion -->
			</div>
			<div class="col-lg-6">
				<div class="faq-video-thumb-area">
					<div class="faq-video-thumb-1 text-right">
						<img src="{{ asset('assets/front/img/'.$sinfo->faq_image2) }}" alt="faq">
					</div>
					<div class="faq-video-thumb-2">
						<img src="{{ asset('assets/front/img/'.$sinfo->faq_image1) }}" alt="faq">
					</div>
				</div>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== ABOT FAQ PART ENDS ======-->



@endsection
