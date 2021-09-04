
@if($commonsetting->theme_version == 'theme1')
@include('front.themes.theme1')
@elseif($commonsetting->theme_version == 'theme2')
@include('front.themes.theme2')
@elseif($commonsetting->theme_version == 'theme3')
@include('front.themes.theme3')
@elseif($commonsetting->theme_version == 'theme4')
@include('front.themes.theme4')
@endif