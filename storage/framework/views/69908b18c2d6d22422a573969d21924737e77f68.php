<footer class="footer-area footer-area-2" style="background-image: url(<?php echo e(asset('assets/front/img/'.$setting->footer_bg_image )); ?>);">
  <div class="footer">
    <div class="container position-relative">
	
	  <div class="row">
	<div class="col-lg-6 col-md-6 logo-footer">
          <div class="widget-item-1 mt-30"> <img src="<?php echo e(asset('assets/front/img/'.$setting->footer_logo )); ?>" alt="">
            <p><?php echo e($setting->footer_text); ?></p>
          </div>
        </div> 
		
		
		
	
	
		<!--====== BRAND 2 PART START ======-->
                <div class="col-lg-6 brand-2-area">
                    <div class="brand">
					<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<p>Vendas:</p>
                        <a href="<?php echo e($item->link); ?>" target="_blank" class="brand-item">
                            <img src="<?php echo e(asset('assets/front/img/client/'.$item->image)); ?>" alt="<?php echo e($item->name); ?>">
                        </a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="contact-info-item text-center">						
							<p><b><?php echo e($setting->opening_hours); ?></b> </p>
						</div>						
                    </div> <!-- brand item -->
                </div>
	
    <!--====== BRAND 2 PART ENDS ======-->
</div>		
		
		<div class="links-add">
        <ul>
          <?php $__currentLoopData = $flinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><a href="<?php echo e($item->url); ?>" class="main-btn"><?php echo e($item->name); ?></a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
		</div>

	  
      <div class="row footer-links"> 
	  
        <div class="col-lg-6">
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> <?php echo e($setting->address); ?></li>
			<li><i class="fas fa-phone"></i> <b><?php echo e($setting->number); ?></b></li>
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
          <?php if($commonsetting->is_t1_meet_us_section == 1): ?>
          <div class="meet-us-area">
            <div class="meet-us-item bg_cover d-flex align-items-center">
              <h2 class="title"><i class="fas fa-chart-line"></i> <span>CUB | </span> <?php echo e($sinfo->meeet_us_text); ?></h2>
              <a class="main-btn" href="<?php echo e($sinfo->meeet_us_button_link); ?>"><?php echo e($sinfo->meeet_us_button_text); ?></i></a>
			</div>
          </div>
          <?php endif; ?> 
		 </div> 
		
		
		</div>
		


      <div class="row footer-copyright">
          <div class="col-lg-6 memu-footer">
              <ul class="navbar-footer">
                <li class="nav-item-bottom"> <?php $__currentLoopData = $front_dynamic_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dynamicpage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="<?php echo e(route('front.front_dynamic_page', $dynamicpage->slug)); ?>"><?php echo e($dynamicpage->title); ?></a> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </li>
              </ul>
          </div>
          <div class="col-lg-6 py-3 text-copyright "> <?php echo $setting->copyright_text; ?> </div>   
	  </div>
	
	</div>
   
  </div>
</footer>
<?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/partials/footer.blade.php ENDPATH**/ ?>