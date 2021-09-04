

<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">Portal do Cliente</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="breadcrumb-item active" aria-current="page">Dúvidas Frequentes</li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


 <!--====== ABOT FAQ PART START ======-->
         
 <div class="blog-grid-area about-faq-area-page about-faq-area pb-50">
	<div class="container">
		<div class="row">
		<div class="col-lg-4">
                <div class="blog-sidebar-item mb-20">
                    <div class="sidebar-title">
                        <h4 class="title">Portal do Cliente</h4>
                    </div>
                    <div class="sidebar-categories mt-35">
                        <ul>
                            <li><a href="<?php echo e(route('front.faq')); ?>" class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>">Dúvidas Frequentes</a></li>                       
                            <li><a href="roteiro-de-modificacoes" class="">Roteiro de Modificações</a></li>
							<li><a href="assistencia-tecnica" class="category">Assistência Técnica</a></li>                       
                            <li><a href="central-de-atendimento" class="category">Central de Atendimento</a></li>
                          
                        </ul>
                    </div>
                  </div>
            </div>
			<div class="col-lg-8">
				<div class="faq-accordion-3">
				<h4 class="title">Dúvidas Frequentes</h4><br>
					<div class="accordion" id="accordionExample">
						<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card">
							<div class="card-header" id="heading<?php echo e($item->id); ?>">
								<a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse" data-target="#collapse<?php echo e($item->id); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($item->id); ?>">
									<i class="fal fa-magic"></i><?php echo e($item->title); ?>

								</a>
							</div>

							<div id="collapse<?php echo e($item->id); ?>" class="collapse  <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="headingO<?php echo e($item->id); ?>" data-parent="#accordionExample">
								<div class="card-body">
									<?php echo $item->content; ?>

								</div>
							</div>
						</div> <!-- card -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div> <!-- faq accordion -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== ABOT FAQ PART ENDS ======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/faq.blade.php ENDPATH**/ ?>