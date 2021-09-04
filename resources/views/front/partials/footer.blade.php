<footer class="footer-area footer-area-2" style="background-image: url({{ asset('assets/front/img/'.$setting->footer_bg_image ) }});">
  <div class="footer">
    <div class="container position-relative">
	
	  <div class="row">
	<div class="col-lg-6 col-md-6 logo-footer">
          <div class="widget-item-1 mt-30"> <img src="{{ asset('assets/front/img/'.$setting->footer_logo ) }}" alt="">
            <p>{{ $setting->footer_text }}</p>
          </div>
        </div> 
		
		
		
	
	
		<!--====== BRAND 2 PART START ======-->
                <div class="col-lg-6 brand-2-area">
                    <div class="brand">
					@foreach ($clients as $item)
					<p>Vendas:</p>
                        <a href="{{ $item->link }}" target="_blank" class="brand-item">
                            <img src="{{ asset('assets/front/img/client/'.$item->image) }}" alt="{{ $item->name }}">
                        </a>
					@endforeach
					<div class="contact-info-item text-center">						
							<p><b>{{ $setting->opening_hours }}</b> </p>
						</div>						
                    </div> <!-- brand item -->
                </div>
	
    <!--====== BRAND 2 PART ENDS ======-->
</div>		
		
		<div class="links-add">
        <ul>
          @foreach ($flinks as $item)
          <li><a href="{{ $item->url }}" class="main-btn">{{ $item->name }}</a></li>
          @endforeach
        </ul>
		</div>

	  
      <div class="row footer-links"> 
	  
        <div class="col-lg-6">
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> {{ $setting->address }}</li>
			<li><i class="fas fa-phone"></i> <b>{{ $setting->number }}</b></li>
          </ul>
          <div class="footer-bottom">
            <div class="myrow  align-items-center">
              <div class="left-area">
                <div class="footer-left-social d-none d-sm-inline-block">
                  <ul>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
		
		

		
		<div class="col-lg-6">         
          @if($commonsetting->is_t1_meet_us_section == 1)
          <div class="meet-us-area">
            <div class="meet-us-item bg_cover d-flex align-items-center">
              <h2 class="title"><i class="fas fa-chart-line"></i> <span>CUB | </span> {{ $sinfo->meeet_us_text }}</h2>
              <a class="main-btn" href="{{ $sinfo->meeet_us_button_link }}">{{ $sinfo->meeet_us_button_text }}</i></a>
			</div>
          </div>
          @endif 
		 </div> 
		
		
		</div>
		


      <div class="row footer-copyright">
          <div class="col-lg-6 memu-footer">
              <ul class="navbar-footer">
                <li class="nav-item-bottom"> @foreach ($front_dynamic_pages as $dynamicpage) <a href="{{ route('front.front_dynamic_page', $dynamicpage->slug) }}">{{ $dynamicpage->title }}</a> @endforeach </li>
              </ul>
          </div>
          <div class="col-lg-6 py-3 text-copyright "> {!! $setting->copyright_text !!} </div>   
	  </div>
	
	</div>
   
  </div>
</footer>
