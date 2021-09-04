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
					<h2 class="title">{{ __('Team') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Team') }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
<!--====== LEADERSHIP PART START ======-->

<div class="leadership-area  pt-70 pb-120">
	<div class="container">
		<div class="row">
			@foreach($teams as $key => $team)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="leadership-item mt-50">
					<img src="{{ asset('assets/front/img/team/'.$team->image) }}" alt="">
					<div class="leadership-content">
						<a href="{{ route('front.team_details', $team->id) }}" class="d-block"><h5 class="title">{{ $team->name }}</h5></a>
						<span>{{ $team->dagenation }}</span>
					</div>
				</div> <!-- leadership item -->
			</div>
			@endforeach
		</div> <!-- row -->
		<div class="row mt-30">
			<div class="col-lg-12 text-center">
				<div class="d-inline-block">
					{{ $teams->links() }}
				</div>
			</div>
		</div>
	</div> <!-- container -->
</div>
<!--====== LEADERSHIP PART ENDS ======-->

	<!-- Team Area Start -->
	{{-- <section class="team team-page">
		<div class="container">
			<div class="row">
				@foreach($teams as $key => $team)
				<div class="col-lg-4 col-md-6">
					<div class="team-member">
						<div class="member-pic">
						<img src="{{ asset('assets/front/img/'.$team->image) }}" alt="">
						</div>

						<div class="social">
							<ul>
								@if($team->url1 && $team->icon1)
								<li>
									<a href="{{ $team->url1 }}">
										<i class="{{ $team->icon1 }}"></i>
									</a>
								</li>
								@endif
								@if($team->url2 && $team->icon2)
								<li>
									<a href="{{ $team->url2 }}">
										<i class="{{ $team->icon2 }}"></i>
									</a>
								</li>
								@endif
								@if($team->url3 && $team->icon3)
								<li>
									<a href="{{ $team->url3 }}">
										<i class="{{ $team->icon3 }}"></i>
									</a>
								</li>
								@endif
							</ul>
						</div>

						<div class="member-data">
						<div class="name">
							<h4 class="title">{{ $team->name }}</h4>
							<p class="position">{{ $team->dagenation }}</p>
						</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="d-inline-block">
						{{ $teams->links() }}
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Team Area End -->

@endsection
