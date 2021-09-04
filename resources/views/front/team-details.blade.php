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
					<h2 class="title">{{ $team->name }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item"><a href="{{ route('front.team') }}">{{ __('Team') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 


<!--====== PAGE TITLE PART ENDS ======-->
    
 <!--====== TEAM DETAILS PART START ======-->
         
 <div class="team-details-area pt-120 pb-120" >
    <div class="container">
        <div class="row align-teams-center">
            <div class="col-lg-6">
                <div class="team-details-thumb">
                    <img src="{{ asset('assets/front/img/team/'.$team->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-details-content">
                    <h4 class="title">{{ $team->name }}</h4>
                    <span>{{ $team->dagenation }}</span>
                    <div class="pb-15">
                        {!! $team->description !!}
                    </div>
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
                        @if($team->url4 && $team->icon4)
                        <li>
                            <a href="{{ $team->url4 }}">
                                <i class="{{ $team->icon4 }}"></i>
                            </a>
                        </li>
                        @endif
                        @if($team->url5 && $team->icon5)
                        <li>
                            <a href="{{ $team->url5 }}">
                                <i class="{{ $team->icon5 }}"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 

<!--====== TEAM DETAILS PART ENDS ======-->


@endsection
