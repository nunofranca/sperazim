
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
					<h2 class="title">{{ __('Portfolio') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Portfolio') }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== NEWS PART START ======-->
                   
 <div class="blog-grid-area portfolio-page pt-90 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-first">
                <div class="blog-sidebar-item">
                    <div class="sidebar-categories row">
                        <ul>
                            <li >
                                <a href="{{route('front.portfolio')}}" class="@if(empty(request()->input('category'))) active @endif">{{ __('Todos') }}</a>
                            </li>
                          @foreach ($all_services as $item)
                            <li><a href="{{ route('front.portfolio',['category'=>$item->slug]) }}" class=" 
                                @if(request()->input('category') == $item->slug) active @endif
                                ">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                  </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($portfolios as $item)
                    <div class="empreendimentos">
                        <a href="{{ route('front.portfolio.details', $item->slug) }}" class="blog-grid-item">
                            <div class="img" style="background-image: url({{ asset('assets/front/img/portfolio/'.$item->featured_image) }})"></div>
                            <div class="blog-grid-overlay">
							<div class="txt">
                                <h5 class="title">{{ $item->title }}</h5>
								<p>{{ $item->client_name }}</p>
                            </div>
							</div>
                        </a> 
						<div class="category"><span>{{ $item->service->title }}</span></div>
						<div class="portfolio-logo">
						<img src="{{ asset('assets/front/img/portfolio/'.$item->featured_logo ) }}" alt="">
						</div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="d-inline-block"> {{ $portfolios->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!--====== NEWS PART ENDS ======-->

@endsection
