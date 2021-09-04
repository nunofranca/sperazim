@if(request()->path() == '/')
        @if($commonsetting->theme_version == 'theme1')
            @if($commonsetting->is_video_hero == '1')
                @include('front.partials.menu.menu4')
            @else 
                @include('front.partials.menu.menu1')
            @endif
            
        @elseif($commonsetting->theme_version == 'theme2')
            @if($commonsetting->is_video_hero == '1')
                @include('front.partials.menu.menu4')
            @else 
                @include('front.partials.menu.menu2')
            @endif
        @elseif($commonsetting->theme_version == 'theme3')
            @if($commonsetting->is_video_hero == '1')
                @include('front.partials.menu.menu4')
            @else 
                @include('front.partials.menu.menu3')
            @endif
        @elseif($commonsetting->theme_version == 'theme4')
            @if($commonsetting->is_video_hero == '1')
                @include('front.partials.menu.menu4')
            @else 
                @include('front.partials.menu.menu4')
            @endif
        @endif
    @else 
        @include('front.partials.menu.menu4')
    @endif

    