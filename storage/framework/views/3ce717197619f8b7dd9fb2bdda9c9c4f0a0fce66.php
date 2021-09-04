


<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Portfolio')); ?></h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Portfolio')); ?></li>
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
                                <a href="<?php echo e(route('front.portfolio')); ?>" class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>"><?php echo e(__('Todos')); ?></a>
                            </li>
                          <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('front.portfolio',['category'=>$item->slug])); ?>" class=" 
                                <?php if(request()->input('category') == $item->slug): ?> active <?php endif; ?>
                                "><?php echo e($item->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                  </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="empreendimentos">
                        <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>" class="blog-grid-item">
                            <div class="img" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>)"></div>
                            <div class="blog-grid-overlay">
							<div class="txt">
                                <h5 class="title"><?php echo e($item->title); ?></h5>
								<p><?php echo e($item->client_name); ?></p>
                            </div>
							</div>
                        </a> 
						<div class="category"><span><?php echo e($item->service->title); ?></span></div>
						<div class="portfolio-logo">
						<img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_logo )); ?>" alt="">
						</div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="d-inline-block"> <?php echo e($portfolios->links()); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!--====== NEWS PART ENDS ======-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/portfolio.blade.php ENDPATH**/ ?>