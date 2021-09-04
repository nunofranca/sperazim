<!doctype html>
<html lang="en">

<head>

    <!--Start of Google Analytics script-->
    @if ($commonsetting->is_google_analytics == 1)
    {!! $commonsetting->google_analytics!!}
    @endif
    <!--End of Google Analytics script-->

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('meta-description')">
	<meta name="keywords" content="@yield('meta-keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ $setting->website_title }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/front/img/'.$setting->fav_icon) }}" type="image/png">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/bootstrap.min.css">

    <!--====== Fontawesome Pro css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/all.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/nice-select.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/animate.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/slick.css">

    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/ytplayer.css">

    <!-- Sweetalert2 css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/new.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/dynamic-css.css">

    @if($currentLang->direction == 'rtl')
	<!-- RTL css -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/front/css/rtl.css">
	@endif

    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/dynamic-css.php?color={{ $commonsetting->base_color }}">


</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loading">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    @include('front.partials.menu')

    <!--====== HEADER PART ENDS ======-->



	@yield('content')

     <!--    announcement banner section start   -->
    <a class="announcement-banner absulute" href="{{asset('assets/front/img/'.$setting->announcement)}}"></a>
    <!--    announcement banner section end   --> 

    <!--====== footer PART START ======-->

    @include('front.partials.footer')

    <!--====== footer PART ENDS ======-->

    {{-- Quick Call Area  Start--}}
    <div class="quick_call_area">

        @if($commonsetting->is_call_button == 1)
            @php
                $number = explode( ',', $commonsetting->number );
            @endphp
            <a href="tel:{{ $number[0] }}"><i class="fas fa-phone"></i></a>
        @endif

        @if($commonsetting->is_whatsapp == 1)
        <a href="https://api.whatsapp.com/send?phone={{ $setting->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
        @endif
    </div>
    {{-- Quick Call Area  End--}}
    <!--====== BACK TO TOP ======-->
    <div class="back-to-top back-to-top-2">
        <a href="">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
    <!--====== BACK TO TOP ======-->



	{{-- Cookie alert dialog start --}}
	@if ($setting->is_cooki_alert == 1)
		@include('cookieConsent::index')
	@endif
	{{-- Cookie alert dialog end --}}

    <input type="hidden" id="main_url" value="{{ route('front.index') }}">

    @php
        $mainbs = [];
        $mainbs['is_announcement'] = $setting->is_announcement;
        $mainbs['announcement_delay'] = $setting->announcement_delay;
        $mainbs = json_encode($mainbs);
    @endphp

    <script>
        var mainbs = {!! $mainbs !!};
    </script>

    <!--====== jquery js ======-->
    <script src="{{ asset('assets/front/') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front/') }}/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/front/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/front/') }}/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/front/') }}/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('assets/front/') }}/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('assets/front/') }}/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/front/') }}/js/jquery.magnific-popup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/front/') }}/js/jquery.counterup.min.js"></script>

    <!--====== Circle Progress js ======-->
    <script src="{{ asset('assets/front/') }}/js/circle-progress.min.js"></script>

    <!--====== ajax contact js ======-->
    <script src="{{ asset('assets/front/') }}/js/ajax-contact.js"></script>

    <!--====== Syotimer js ======-->
    <script src="{{ asset('assets/front/') }}/js/jquery.syotimer.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ asset('assets/front/') }}/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('assets/front/') }}/js/wow.min.js"></script>

    <script src="{{ asset('assets/front/') }}/js/ytplayer.js"></script>

    <!-- Sweetalert2 js -->
    <script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/front/') }}/js/waypoints.min.js"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/front/') }}/js/main.js"></script>






    @if($commonsetting->is_tawk_to	== 1)
	{!!  $commonsetting->tawk_to !!}
    @endif



    @if (session()->has('success'))
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '{{session('success')}}';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'success',
                title: $message
            })
        });
    </script>
@endif

</body>

</html>
