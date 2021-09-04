<div class="col-lg-6 d-none d-lg-block">
    <div class="header-left-side text-center text-sm-left">
        <ul>
            @php
            $email = explode( ',', $commonsetting->email );
            @endphp
            <li>
                <a href="mailto:{{ $email[0] }}"><i class="fal fa-envelope"></i> 
                {{ $email[0] }}
                </a>
            </li>
            @php
            $number = explode( ',', $commonsetting->number );
            @endphp
            <li>
                <a href="tel:{{ $number[0] }}"><i class="fal fa-phone"></i>  
                {{ $number[0] }}
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="col-lg-6">
    <div class="right-area">
        <div class="header-right-social d-none d-sm-inline-block">
            <ul>
                @foreach ($socials as $item)
                <li><a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a></li>
                @endforeach
                
            </ul>
        </div>
       
        <div class="language-change">
            <p class="name
            @if(request()->path() == '/')
                @if($commonsetting->theme_version == 'theme1')
                    @if($commonsetting->is_video_hero == '1')
                        white-c
                    @else
                        headinc-c
                    @endif
                @elseif($commonsetting->theme_version == 'theme2')
                    @if($commonsetting->is_video_hero == '1')
                        white-c
                    @else
                        headinc-c
                    @endif
                @elseif($commonsetting->theme_version == 'theme3')
                    white-c
                @elseif($commonsetting->theme_version == 'theme4')
                    white-c  
                @endif
            @else 
                white-c
            @endif
            "><i class="fas fa-globe-americas"></i>{{ $currentLang->name }}</p>
            <div class="language-menu">
                @foreach ($langs as $lang)
                <a href="{{ route('changeLanguage', $lang->code) }}" class="{{ $lang->code == $currentLang->code ? 'active' : '' }}">{{ $lang->name }}</a>
                @endforeach
            </div>
        </div>
        @if( $commonsetting->quote_page == 1)
        <a class="main-btn d-lg-none" href="{{ route('front.quot') }}">{{ __('Gate A Quote') }} <i class="fal fa-long-arrow-right"></i></a>
        @endif
    </div>

</div>