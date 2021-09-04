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
					<h2 class="title">Portal do Cliente</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">Dúvidas Frequentes</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


 <!--====== ABOT FAQ PART START ======-->
         
 <div class="blog-grid-area about-faq-area-page about-faq-area pb-50">
	<div class="container">
		<div class="row">
		<div class="col-lg-4">
                <div class="blog-sidebar-item mb-20">
                    <div class="sidebar-title">
                        <h4 class="title">Portal do Cliente</h4>
                    </div>
                    <div class="sidebar-categories mt-35">
                        <ul>
                            <li><a href="{{route('front.faq')}}" class="@if(empty(request()->input('category'))) active @endif">Dúvidas Frequentes</a></li>                       
                            <li><a href="roteiro-de-modificacoes" class="">Roteiro de Modificações</a></li>
							<li><a href="assistencia-tecnica" class="category">Assistência Técnica</a></li>                       
                            <li><a href="central-de-atendimento" class="category">Central de Atendimento</a></li>
                          
                        </ul>
                    </div>
                  </div>
            </div>
			<div class="col-lg-8">
				<div class="faq-accordion-3">
				<h4 class="title">Dúvidas Frequentes</h4><br>
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
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== ABOT FAQ PART ENDS ======-->



@endsection
