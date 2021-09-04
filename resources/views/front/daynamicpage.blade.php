@extends('front.layout')

@section('meta-keywords', "$front_daynamic_page->meta_keywords")
@section('meta-description', "$front_daynamic_page->meta_description")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ $front_daynamic_page->title }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $front_daynamic_page->title }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

    <!-- Faq Area Start -->
	<section class="pt-50 pb-50">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        {!! $front_daynamic_page->body !!}
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- Faq Area End -->

@endsection
