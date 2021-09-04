<a class="navbar-brand" href="{{ route('front.index') }}"><img src="{{ asset('assets/front/img/'.$setting->header_logo ) }}"
        alt=""></a> <!-- logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
</button> <!-- navbar toggler -->

<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link @if(request()->path() == '/') active  @endif" href="{{ route('front.index') }}">{{ __('Home') }}</a>
        </li>
        @if( $commonsetting->about_page == 1)
        <li class="nav-item">
            <a class="nav-link @if(request()->path() == 'about') active  @endif" href="#">{{ __('Speranzini') }}</a>
        </li>
        @endif
        @if( $commonsetting->service_page == 1)
        <li class="nav-item">
            <a class="nav-link 
            @if(request()->path() == 'service') active 
            @elseif(request()->is('service/*')) active  
            @endif" href="#">{{ __('Portal do Cliente') }}</a>
        </li>
        @endif
        @if( $commonsetting->poerfolio_page == 1)
        <li class="nav-item">
            <a class="nav-link 
            @if(request()->path() == 'portfolio') active 
            @elseif(request()->is('portfolio/*')) active 
            @endif" href="{{ route('front.portfolio') }}">{{ __('Empreendimentos') }}</a>
        </li>
        @endif
        @if( $commonsetting->contact_page == 1)
        <li class="nav-item">
            <a class="nav-link @if(request()->path() == 'contact') active  @endif" href="#">{{ __('Contato') }}</a>
        </li>
        @endif
    </ul>
</div> <!-- navbar collapse -->

@if( $commonsetting->quote_page == 1)
<div class="navbar-btn mr-100 ml-30 d-none d-lg-block">
    <a class="main-btn" href="#">{{ __('Área do Cliente') }} <i class="fal fa-long-arrow-right"></i></a>
</div>
@endif