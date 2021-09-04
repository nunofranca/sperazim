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
					<h2 class="title">{{ __('Central de Atendimento') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Central de Atendimento') }}</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

 <!--====== CONTACT DETAILS PART START ======-->
         
 <div class="contact-details-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="contact-info">
					<div class="contact-item-1">
						<div class="contact-info-item text-center">
							<i class="fal fa-phone"></i>
							<h5 class="title">{{ __('Fone') }}</h5>
								@php
                                    $fnumber = explode( ',', $setting->number );
                                    for ($i=0; $i < count($fnumber); $i++) { 
                                        echo '<p>'.$fnumber[$i].'</p>';
                                    }
                                @endphp
						</div>
						<div class="contact-info-item text-center">
							<i class="fal fa-envelope"></i>
							<h5 class="title">{{ __('E-mail') }}</h5>
							@php
								$femail = explode( ',', $setting->email );
								for ($i=0; $i < count($femail); $i++) { 
									echo '<p>'.$femail[$i].'</p>';
								}
							@endphp
						</div>
					</div>
					<div class="contact-item-1">
						<div class="contact-info-item text-center">
							<i class="fal fa-map"></i>
							<h5 class="title">{{ __('Endereço') }}</h5>
							<p>{{ $setting->address }}</p>
						</div>
						<div class="contact-info-item text-center">
							<i class="fal fa-phone"></i>
							<h5 class="title">{{ __('Vendas Habitação') }}</h5>
							<p>{{ $setting->opening_hours }} </p>
						</div>
					</div>
				</div> <!-- contact info -->
			</div>
			<div class="col-lg-6  align-self-center">
				<div class="map-area">
					{!! $sinfo->contact_map !!}
				</div> <!-- map area -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== CONTACT DETAILS PART ENDS ======-->

<!--====== GET IN TOUCH PART START ======-->
<div class="contact-us-area bg_cover" style="background-image: url({{ asset('assets/front/img/'.$sinfo->contact_section_bg_image) }}">
	<div class="contact-overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2 class="title">{{ $sinfo->contact_title }}</h2>
					</div> <!-- sevtion title -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container  pb-50">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-details d-flex">
						<div class="contact-form-area">
							<form action="{{ route('front.contact.submit') }}" method="POST">
								@csrf
								<div class="input-title">
									<h4>{{ $sinfo->contact_form_title }}</h4>
								</div> <!-- input title -->
								<div class="row">
									<div class="col-lg-6">
										<div class="input-box mt-30">
										<select name="destino" id="destino">
											<option value="">Selecione um destino</option>
											<option value="2">Financeiro</option>
											<option value="4">Obras em andamento</option>
											<option value="5">Projetos</option>
											<option value="6">Segurança no trabalho</option>
											<option value="9">Sugestões/Reclamações</option>
										</select>
										</div> <!-- input box -->
										@if ($errors->has('name'))
											<p class="text-danger"> {{ $errors->first('name') }} </p>
										@endif
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
										<select name="cliente" id="cliente">
											<option value="2">Já sou Cliente</option>
											<option value="4">Não sou Cliente</option>
										</select>
										</div> <!-- input box -->
										@if ($errors->has('name'))
											<p class="text-danger"> {{ $errors->first('name') }} </p>
										@endif
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="{{ __('Nome Completo') }}" name="name">
											<i class="fal fa-user"></i>
										</div> <!-- input box -->
										@if ($errors->has('name'))
											<p class="text-danger"> {{ $errors->first('name') }} </p>
										@endif
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="email" placeholder="{{ __('E-mail') }}" name="email">
											<i class="fal fa-envelope-open"></i>
										</div> <!-- input box -->
										@if ($errors->has('email'))
											<p class="text-danger"> {{ $errors->first('email') }} </p>
										@endif
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="{{ __('Telefone') }}" name="phone">
											<i class="fal fa-phone"></i>
										</div> <!-- input box -->
										@if ($errors->has('phone'))
											<p class="text-danger"> {{ $errors->first('phone') }} </p>
										@endif
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="{{ __('Cidade/Estado') }}" name="subject">
											<i class="fal fa-edit"></i>
											@if ($errors->has('subject'))
											<p class="text-danger"> {{ $errors->first('subject') }} </p>
										@endif
										</div> <!-- input box -->
									</div>
									<div class="col-lg-12">
										<div class="input-box mt-30">
											<textarea name="message" id="#" cols="30" rows="10" placeholder="{{ __('Mensagem') }}"></textarea>
											<i class="fal fa-pencil"></i>
											@if ($errors->has('message'))
											<p class="text-danger"> {{ $errors->first('message') }} </p>
											@endif
										</div> <!-- input box -->
									</div>
									<div class="col-lg-12">
										<div class="input-box ">
										
											<div class="contact-btn-captcha-wrapper">
												
												<button class="main-btn wow slideInUp d-inline-block" data-wow-duration="1.5s" data-wow-delay="0s" type="submit">{{ __('Enviar') }}
												<i class="fal fa-long-arrow-right"></i></button>
												@if ($commonsetting->is_recaptcha == 1)
													<div class="mt-3 d-inline-block ml-4" >
														{!! NoCaptcha::renderJs() !!}
														{!! NoCaptcha::display() !!}
														@if ($errors->has('g-recaptcha-response'))
														@php
															$errmsg = $errors->first('g-recaptcha-response');
														@endphp
														<p class="text-danger mb-0">{{__("$errmsg")}}</p>
														@endif
													</div>
												@endif
											</div>
										</div> <!-- input box -->
									</div>
								</div>
							</form>
						</div>
					</div> <!-- contact details -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div>
</div>



<!--====== GET IN TOUCH PART ENDS ======-->

@endsection
