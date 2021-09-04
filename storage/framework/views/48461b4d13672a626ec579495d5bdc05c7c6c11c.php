
<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>

    <!--====== BANNER PART START ======-->

    <?php if($commonsetting->is_t1_slider_section == 1): ?>

        <?php if($commonsetting->is_video_hero == 1): ?>
        <div id="herovideo" class="banner-area-2 bg_cover mt-0 video-section" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>);">
            <div id="bgndVideo" data-property="{videoURL:'<?php echo e($commonsetting->hero_section_video_link); ?>',containment:'#herovideo', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span><?php echo e($sinfo->hero_sub_title); ?></span>
                                <h1 class="title"><?php echo e($sinfo->hero_title); ?></h1>
                                <p><?php echo e($sinfo->hero_text); ?></p>
                                <ul>
                                    <li><a class="main-btn wow fadeInUp" href="<?php echo e(route('front.quot')); ?>" data-wow-duration=".3s" data-wow-delay=".5s"><?php echo e(__('Gate A Quote')); ?></a></li>
                                    <li><a class="main-btn main-btn-2 wow fadeInUp" href="<?php echo e(route('front.about')); ?>" data-wow-duration=".7s" data-wow-delay=".7s"><?php echo e(__('Learn More')); ?></a></li>
                                </ul>
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>
        <?php else: ?>
        <div class="banner-active">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-banner bg_cover" style="background-image: url(<?php echo e(asset('assets/front/img/slider/'.$item->image)); ?>">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row <?php if($currentLang->direction == 'rtl'): ?> justify-content-end  <?php endif; ?>">
                            <div class="col-lg-6">
                                <div class="banner-content">
								
								<a data-animation="fadeInUp" data-delay="1.6s" href="#" class="active-home">Em Construção</a><br><br>
								
									
                                    <span data-animation="fadeInLeft" data-delay="0.5s"><?php echo e($item->subtitle); ?></span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.9s" class="title"><?php echo e($item->title); ?></h1>
                                    <p data-animation="fadeInLeft" data-delay="1.3s"><?php echo e($item->text); ?></p>
                                    <a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="<?php echo e($item->button_link); ?>"><?php echo e($item->button_text); ?> <i class="fal fa-long-arrow-right"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
       
    <?php endif; ?>
    <!--====== BANNER PART ENDS ======-->
    
    <!--====== WHO WE ARE PART START ======-->

    <?php if($commonsetting->is_t1_who_we_are_section == 1): ?>
    <div class="who-we-are-area pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="section-title">
                        <span><?php echo e($sinfo->w_we_are_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->w_we_are_title); ?></h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight"  data-wow-duration="1.5s" data-wow-delay="0s">
                    <div class="section-title">
                        <p><?php echo e($sinfo->w_we_are_text); ?></p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-<?php echo e($item->icon); ?> col-md-6 col-sm-8 wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="what-we-do-item text-center mt-30">
                        <p><?php echo e($item->subtitle); ?></p>
                        <h5 class="title"><?php echo e($item->title); ?></h5>
                        <p><?php echo e($item->text); ?></p>
                    </div> <!-- what we do item -->
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="what-we-are-shape-1">
            <img src="<?php echo e(asset('assets/front/')); ?>/images/what-we-are-shape-1.png" alt="shape">
        </div>
        <div class="what-we-are-shape-2">
            <img src="<?php echo e(asset('assets/front/')); ?>/images/what-we-are-shape-2.png" alt="shape">
        </div>
    </div>
    <?php endif; ?>

    <!--====== WHO WE ARE PART ENDS ======-->

    <!--====== SOLUTION PART START ======-->
    <?php if($commonsetting->is_t1_intro_video_section == 1): ?>
    <div class="solution-area bg_cover" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->video_bg_image)); ?>">
        <div class="solution-overlay pt-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-box">
                            <div class="solution-content">
                                <h4 class="title"><?php echo e($sinfo->video_title); ?></h4>
                                <p><?php echo e($sinfo->video_content); ?></p>
                                <div class="solution-play text-right mr-30 d-block d-lg-none">
                                    <a class="video-popup" href="<?php echo e($sinfo->video_link); ?>"><i class="fas fa-play"></i></a>
                                </div> <!-- solution play -->
                            </div>
                        </div> <!-- solution box -->
                    </div>
                    <div class="col-lg-6">
                        <div class="solution-play text-right mr-30 d-none d-lg-block">
                            <a class="video-popup" href="<?php echo e($sinfo->video_link); ?>"><i class="fas fa-play"></i></a>
                        </div> <!-- solution play -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>
    <?php endif; ?>
    <!--====== SOLUTION PART ENDS ======-->

    <!--====== SERVICES TITLE PART START ======-->
    <?php if($commonsetting->is_t1_service_section == 1): ?>
    <div class="services-title-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="services-title-item text-center">
                        <div class="ring-shape"></div>
                        <span><?php echo e($sinfo->service_sub_title); ?></span>
                        <h3 class="title"><?php echo e($sinfo->service_title); ?></h3>
                    </div> <!-- services title item -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <?php endif; ?>
    <!--====== SERVICES TITLE PART ENDS ======-->

    <!--====== LATEST SERVICES PART START ======-->
    <?php if($commonsetting->is_t1_service_section == 1): ?>
    <div class="latest-services-area">
        <div class="container">
            <div class="row justify-content-center">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="single-services mt-30 mb-55">
                        <div class="services-thumb">
                            <img src="<?php echo e(asset('assets/front/img/service/'.$item->image)); ?>" alt="">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><?php echo e($item->title); ?></h4>
                            <p>
                                <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->content))) > 140) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 140) . '...' : strip_tags(Helper::convertUtf8($item->content))); ?>

                            </p>
                            <a href="<?php echo e(route('front.service.details', $item->slug)); ?>"><?php echo e(__('Read More')); ?> <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <?php endif; ?>
    <!--====== LATEST SERVICES PART ENDS ======-->

    <!--====== WHY CHOOSE PART START ======-->
    <?php if($commonsetting->is_t1_why_choose_us_section == 1): ?>
    <div class="why-choose-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
						<h2 class="title"><?php echo e($sinfo->w_c_us_title); ?></h2>
                        <span><?php echo e($sinfo->w_c_us_sub_title); ?></span>                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $why_selects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9 wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="single-choose text-center mt-30">
                        <div class="icon-box">
                            <span></span>
                            <i class="<?php echo e($item->icon); ?>"></i>
                        </div>
						<p><?php echo e($item->text); ?></p>
                        <h4 class="title"><?php echo e($item->title); ?></h4>                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <!--====== WHY CHOOSE PART ENDS ======-->

    <!--====== CASE STUDIES PART START ======-->
    <?php if($commonsetting->is_t1_portfolio_section == 1): ?>
    <div class="case-studies-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span><?php echo e($sinfo->portfolio_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->portfolio_title); ?></h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid pl-70 pr-70">
            <div class="row no-gutters case-studies-active">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3">
                    <div class="single-case-studies mt-30">
                        <div class="img" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>)"></div>
                        <div class="case-overlay">
                            <div class="item">
                                <span><?php echo e($item->service->title); ?></span>
                                <h5 class="title">
                                    <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?>

                                </h5>
                            </div>
                            <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single case studies -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- containe fluid -->
    </div>
    <?php endif; ?>
    <!--====== CASE STUDIES PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    <?php if($commonsetting->is_t1_testimonial_section == 1): ?>
    <div class="testimonial-area" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span><?php echo e($sinfo->testimonial_subtitle); ?></span>
                        <h2 class="title"><?php echo e($sinfo->testimonial_title); ?></h2>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row no-gutters testimonail-active">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 display-content">
                    <div class="single-testimonial">
                        <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="case-studies">
                        <div class="t-content">
                          <div class="star">
                                <?php for($i = 0; $i < $item->rating; $i++): ?>
									<i class="fas fa-star"></i>
								<?php endfor; ?>
                          </div>
                          <p>
                            <?php echo e($item->message); ?>

                        </p>
                        <h4 class="name">
                            <?php echo e($item->name); ?>

                        </h4>                       
                        </div>
                        
                    </div> <!-- single case studies -->
                </div>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </div>
    <?php endif; ?>
    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM MEMBER PART START ======-->
    <?php if($commonsetting->is_t1_team_section == 1): ?>
    <div class="team-member-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span><?php echo e($sinfo->team_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->team_title); ?></h2>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row justify-content-center">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-team-member mt-30">
                        <img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="team-member">
                        <div class="team-member-overlay">
                            <ul>
                                <?php if($item->url1 && $item->icon1): ?>
                                <li>
                                    <a href="<?php echo e($item->url1); ?>">
                                        <i class="<?php echo e($item->icon1); ?>"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($item->url2 && $item->icon2): ?>
                                <li>
                                    <a href="<?php echo e($item->url2); ?>">
                                        <i class="<?php echo e($item->icon2); ?>"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($item->url3 && $item->icon3): ?>
                                <li>
                                    <a href="<?php echo e($item->url3); ?>">
                                        <i class="<?php echo e($item->icon3); ?>"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($item->url4 && $item->icon4): ?>
                                <li>
                                    <a href="<?php echo e($item->url4); ?>">
                                        <i class="<?php echo e($item->icon4); ?>"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($item->url5 && $item->icon5): ?>
                                <li>
                                    <a href="<?php echo e($item->url5); ?>">
                                        <i class="<?php echo e($item->icon5); ?>"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                            <a href="<?php echo e(route('front.team_details', $item->id)); ?>" class="d-block"><h4 class="title"><?php echo e($item->name); ?></h4></a>
                            <span>I<?php echo e($item->dagenation); ?></span>
                        </div>
                    </div> <!-- single team member -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </div>
    <?php endif; ?>
    <!--====== TEAM MEMBER PART ENDS ======-->

    <!--====== CONTACT US PART START ======-->
    <?php if($commonsetting->is_t1_contact_section == 1): ?>
    <div class="contact-us-area bg_cover" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->contact_section_bg_image)); ?>">
        <div class="contact-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <span><?php echo e($sinfo->contact_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->contact_title); ?></h2>
                        </div> <!-- sevtion title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-details d-flex">
                            <div class="contact-thumb wow slideInLeft" data-wow-duration=".5s" data-wow-delay="0s">
                                <img src="<?php echo e(asset('assets/front/img/'.$sinfo->contact_form_image)); ?>" alt="">
                            </div>
                            <div class="contact-form-area">
                                <form action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-title">
                                        <h3 class="title"><?php echo e($sinfo->contact_form_title); ?></h3>
                                    </div> <!-- input title -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="<?php echo e(__('Full Name Here')); ?>" name="name">
                                                <i class="fal fa-user"></i>
                                            </div> <!-- input box -->
                                            <?php if($errors->has('name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="email" placeholder="<?php echo e(__('Email Here')); ?>" name="email">
                                                <i class="fal fa-envelope-open"></i>
                                            </div> <!-- input box -->
                                            <?php if($errors->has('email')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="<?php echo e(__('Phone No')); ?>" name="phone">
                                                <i class="fal fa-phone"></i>
                                            </div> <!-- input box -->
                                            <?php if($errors->has('phone')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('phone')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" placeholder="<?php echo e(__('Subject')); ?>" name="subject">
                                                <i class="fal fa-edit"></i>
                                                <?php if($errors->has('subject')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('subject')); ?> </p>
                                            <?php endif; ?>
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mt-30">
                                                <textarea name="message" id="#" cols="30" rows="10" placeholder="<?php echo e(__('Message Us')); ?>"></textarea>
                                                <i class="fal fa-pencil"></i>
                                                <?php if($errors->has('message')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('message')); ?> </p>
                                                <?php endif; ?>
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <div class="contact-btn-captcha-wrapper">
												
                                                    <button class="main-btn wow slideInUp d-inline-block" data-wow-duration="1.5s" data-wow-delay="0s" type="submit"><?php echo e(__('Send Message')); ?>

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
    <!--====== CONTACT US PART ENDS ======-->

    <!--====== OUE CHOOSE PART START ======-->
    <?php if($commonsetting->is_t1_faq_counter_section == 1): ?>
    <div class="our-choose-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-30">
                        <span><?php echo e($sinfo->faq_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->faq_title); ?></h2>
                    </div> <!-- section title -->
                    <div class="accordion" id="accordionExample">
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo e($item->id); ?>">
                                <a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse" data-target="#collapse<?php echo e($item->id); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($item->id); ?>">
                                    <i class="fal fa-long-arrow-right"></i> <?php echo e($item->title); ?>

                                </a>
                            </div>

                            <div id="collapse<?php echo e($item->id); ?>" class="collapse <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p><?php echo $item->content; ?></p>
                                </div>
                            </div>
                        </div> <!-- card -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> <!-- accordion -->
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="our-choose-counter-area mt-30">
                        <div class="row">
                            <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="our-choose-counter wow slideInUp" data-wow-duration=".5s" data-wow-delay="0s">
                                    <sub class="c-wrap"><span class="counter"><?php echo e($item->number); ?></span> <sup>+</sup></sub>
                                    <span><?php echo e($item->title); ?></span>
                                    <p><?php echo e($item->text); ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div> <!-- row -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <?php endif; ?>
    <!--====== OUE CHOOSE PART ENDS ======-->

    <!--====== LATEST NEWS PART START ======-->
    <?php if($commonsetting->is_t1_blog_section == 1): ?>
    <div class="latest-news-area gray-bg">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span><?php echo e($sinfo->blog_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->blog_title); ?></h2>
                    </div> <!-- sction title -->
                </div>
            </div> <!-- row -->
            <div class="row news-area justify-content-center">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="single-news mt-30">
                        <div class="img" style="background-image: url(<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>)"></div>
                        <div class="single-news-overlay">
                            <span><?php echo e($item->bcategory->name); ?></span>
                            <h5 class="title"><a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>"><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?></a></h5>
                            <a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div> <!-- single news -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container -->
       
    </div>
    <?php endif; ?>
    <!--====== LATEST NEWS PART ENDS ======-->
    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/themes/theme1.blade.php ENDPATH**/ ?>