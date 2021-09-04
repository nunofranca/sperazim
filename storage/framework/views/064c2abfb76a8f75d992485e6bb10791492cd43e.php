

<?php $__env->startSection('meta-keywords', "$front_daynamic_page->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$front_daynamic_page->meta_description"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e($front_daynamic_page->title); ?></h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e($front_daynamic_page->title); ?></li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

    <!-- Faq Area Start -->
	<section class="pt-50 pb-50">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <?php echo $front_daynamic_page->body; ?>

                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- Faq Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/daynamicpage.blade.php ENDPATH**/ ?>