

<?php $__env->startSection('meta-keywords', "$portfolio->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$portfolio->meta_description"); ?>
<?php $__env->startSection('content'); ?>

         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e($portfolio->title); ?></h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="breadcrumb-item"><a href="<?php echo e(route('front.portfolio')); ?>"><?php echo e(__('Portfolio')); ?> </a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e($portfolio->title); ?></li>
						</ol>
					</nav>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

                   
 <div class="blog-grid-area portfolio-page pt-90 pb-120">
    <div class="container">
        <div class="row">
		<div class="col-lg-4">
		<div class="detail"></div>
		<div class="img-portfolio">
			<img src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_image)); ?>" alt="">
        </div>
		</div>
		
		<div class="col-lg-8">
			<div class="logo-portfolio">
				<img src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_logo )); ?>" alt="">
			</div>
						<ul class="list-details mt-20">
						<li class="theme"><?php echo e($portfolio->service->title); ?></li>
						<li><?php echo e($portfolio->client_name); ?></li>
						</ul>
		                    <div class="content mt-20">
                      <?php echo $portfolio->content; ?>

                    </div>
		</div>
		<?php if($portfolio->on_galeria): ?>
            <div class="col-lg-12">
			<h1 class="title mt-30">Galeria</h1>
                <div class="service-details-content mt-10">
                    <?php if($portfolio_images->count() > 0): ?>
                    <div class="portfolio-slider">
                        <?php $__currentLoopData = $portfolio_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="image">
                                <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->image )); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php else: ?>

                    <?php endif; ?>
                    
                  </div>
            </div> 
		<?php endif; ?>
	
			
        </div>
    </div>
</div> 


    
	<?php if($portfolio->on_info): ?>
    <div class="why-choose-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
				<h3 class="title mb-30 white-c">O Edifício</h3>
                   <?php echo $portfolio->content2; ?>

                </div>
				<div class="col-lg-6">
				<h3 class="title mb-30 white-c">Os Apartamentos</h3>
                   <?php echo $portfolio->content3; ?>

                </div>
            </div>
            <div class="row justify-content-center">
                

             
            </div>
        </div>
        <div class="choose-dot">
            <img src="<?php echo e(asset('assets/front/')); ?>/images/choose-dot.png" alt="">
        </div>
        <div class="choose-shape">
            <img src="<?php echo e(asset('assets/front/')); ?>/images/choose-shape.png" alt="">
        </div>
    </div>
    <?php endif; ?>
   
	
	<?php if($portfolio->on_plantas): ?>
 <div class="blog-grid-area portfolio-page pt-90 pb-120">
    <div class="container">
	<div class="row">	
	<div class="col-lg-6 pr-5">
			<h1 class="title mb-30">Plantas</h1>
                <div class="service-details-content mt-10">
                    <?php if($portfolio_images2->count() > 0): ?>

                    <div class="portfolio-slider">
                        <?php $__currentLoopData = $portfolio_images2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="image">
                                <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->image )); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php else: ?>

                    <?php endif; ?>
                    
                  </div>
            </div>
			
			
			<div class="col-lg-6">
			<div class="box-info">
                <div class="service-details-content mt-10"> 
				<div class="map-area">
					<?php echo $portfolio->portfolio_map; ?>

					<p class="mt-20"><b>Endereço:</b></p>
					<p class="mt-5"><?php echo $portfolio->local; ?></p>					
					<p class="mt-20"><?php echo $portfolio->content4; ?></p>					
				</div> <!-- map area -->   
                </div>
			</div>
            </div>
			
			
        </div>
    </div>
</div> 
<?php endif; ?>		


<?php if($portfolio->on_video): ?>
    <div class="solution-area bg_cover" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->video_bg_image)); ?>">
        <div class="solution-overlay pt-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-play text-right mr-30 d-none d-lg-block">
                            <a class="video-popup" href="<?php echo e($portfolio->video_link); ?>"><i class="fas fa-play"></i></a>
                        </div> <!-- solution play -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>
<?php endif; ?>
	
	<?php if($portfolio->on_estagio): ?>
	<div class="blog-grid-area portfolio-page pt-90 pb-120">
    <div class="container">
	<div class="row">	
	<div class="col-lg-6 pr-5">
			<h1 class="title mb-30">Estágio da Obra</h1>
                <div class="service-details-content mt-10">
                    <?php if($portfolio_images->count() > 0): ?>
                    <div class="portfolio-slider">
                        <?php $__currentLoopData = $portfolio_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="image">
                                <img src="<?php echo e(asset('assets/front/img/portfolio/'.$item->image )); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php else: ?>

                    <?php endif; ?>
                    
                  </div>
            </div>
			
			
			<div class="col-lg-6">
			<div class="box-info">
                <div class="service-details-content mt-10"> 
					
					<p class="mb-20"><b>Cronograma de Execução:</b></p>
					
					<p>Locação:</p> 
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->locacao; ?>">
					<?php echo $portfolio->locacao; ?>

					</div>
					</div>  
					
					<p>Fundação:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->fundacao; ?>">
					<?php echo $portfolio->fundacao; ?>

					</div>
					</div>  
					
					<p>Estrutura:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->estrutura; ?>">
					<?php echo $portfolio->estrutura; ?>

					</div>
					</div>  
					
					<p>Alvenaria:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->alvenaria; ?>">
					<?php echo $portfolio->alvenaria; ?>

					</div>
					</div> 

					<p>Instalações:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->instalacoes; ?>">
					<?php echo $portfolio->instalacoes; ?>

					</div>
					</div> 

					<p>Revestimento Interno:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->rev_interno; ?>">
					<?php echo $portfolio->rev_interno; ?>

					</div>
					</div>

					<p>Revestimento externo:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->rev_externo; ?>">
					<?php echo $portfolio->rev_externo; ?>

					</div>
					</div> 	

					<p>Cerâmica:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->ceramica; ?>">
					<?php echo $portfolio->ceramica; ?>

					</div>
					</div> 

					<p>Esquadrias:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->esquadrias; ?>">
					<?php echo $portfolio->esquadrias; ?>

					</div>
					</div> 

					<p>Pintura:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->pintura; ?>">
					<?php echo $portfolio->pintura; ?>

					</div>
					</div> 

					<p>Acabamento:</p>
					<div class="progress mb-10">
					<div class="progress-bar" role="progressbar" aria-valuenow="0"
					aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $portfolio->acabamento; ?>">
					<?php echo $portfolio->acabamento; ?>

					</div>
					</div> 					
					
					
                </div>
			</div>
            </div>
			
			
        </div>
    </div>
</div>
<?php endif; ?>
	
	
	<?php if($portfolio->on_contato): ?>
 <div class="contact-us-area bg_cover" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->contact_section_bg_image)); ?>">
	<div class="contact-overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2 class="title">Tenho Interesse</h2>
					</div> <!-- sevtion title -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container  pb-50">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-details d-flex">
						<div class="contact-form-area">
							<form action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
								<?php echo csrf_field(); ?>
								<div class="input-title">
									<h4>Se você tem interesse em algum dos imóveis Speranzini, entre em contato conosco pelo formulário abaixo. Em breve um corretor entrará em contato com você.</h4>
								</div> <!-- input title -->
								<div class="row">
									
									<div class="col-lg-12">
										<div class="input-box mt-30">
											<input type="text" readonly name="subject" value="<?php echo e($portfolio->title); ?>" required>
											<i class="fal fa-user"></i>
										</div> <!-- input box -->
										<?php if($errors->has('name')): ?>
											<p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
										<?php endif; ?>
									</div>
									
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="<?php echo e(__('Nome Completo')); ?>" name="name">
											<i class="fal fa-user"></i>
										</div> <!-- input box -->
										<?php if($errors->has('name')): ?>
											<p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
										<?php endif; ?>
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="email" placeholder="<?php echo e(__('E-mail')); ?>" name="email">
											<i class="fal fa-envelope-open"></i>
										</div> <!-- input box -->
										<?php if($errors->has('email')): ?>
											<p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
										<?php endif; ?>
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="<?php echo e(__('Telefone')); ?>" name="phone">
											<i class="fal fa-phone"></i>
										</div> <!-- input box -->
										<?php if($errors->has('phone')): ?>
											<p class="text-danger"> <?php echo e($errors->first('phone')); ?> </p>
										<?php endif; ?>
									</div>
									<div class="col-lg-6">
										<div class="input-box mt-30">
											<input type="text" placeholder="<?php echo e(__('Cidade/Estado')); ?>" name="subject">
											<i class="fal fa-edit"></i>
											<?php if($errors->has('subject')): ?>
											<p class="text-danger"> <?php echo e($errors->first('subject')); ?> </p>
										<?php endif; ?>
										</div> <!-- input box -->
									</div>
									<div class="col-lg-12">
										<div class="input-box mt-30">
											<textarea name="message" id="#" cols="30" rows="10" placeholder="<?php echo e(__('Mensagem')); ?>"></textarea>
											<i class="fal fa-pencil"></i>
											<?php if($errors->has('message')): ?>
											<p class="text-danger"> <?php echo e($errors->first('message')); ?> </p>
											<?php endif; ?>
										</div> <!-- input box -->
									</div>
									<div class="col-lg-12">
										<div class="input-box ">
										
											<div class="contact-btn-captcha-wrapper">
												
												<button class="main-btn wow slideInUp d-inline-block" data-wow-duration="1.5s" data-wow-delay="0s" type="submit"><?php echo e(__('Enviar')); ?>

												<i class="fal fa-long-arrow-right"></i></button>
												<?php if($commonsetting->is_recaptcha == 1): ?>
													<div class="mt-3 d-inline-block ml-4" >
														<?php echo NoCaptcha::renderJs(); ?>

														<?php echo NoCaptcha::display(); ?>

														<?php if($errors->has('g-recaptcha-response')): ?>
														<?php
															$errmsg = $errors->first('g-recaptcha-response');
														?>
														<p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
														<?php endif; ?>
													</div>
												<?php endif; ?>
											</div>
										</div> <!-- input box -->
									</div>
								</div>
							</form>
						</div>
					</div> <!-- contact details -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div>
</div> 
<?php endif; ?>	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/portfolio-details.blade.php ENDPATH**/ ?>