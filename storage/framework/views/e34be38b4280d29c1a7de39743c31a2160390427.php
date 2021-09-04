

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Page Visibility')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Page Visibility')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="<?php echo e(route('admin.pagevisibility.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Theme 1 Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Hero Slider')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_slider_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_slider_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_slider_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_slider_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Who We Are Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_who_we_are_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_who_we_are_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_who_we_are_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_who_we_are_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Intro Video Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_intro_video_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_intro_video_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_intro_video_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Service Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_service_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_service_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_service_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Why Choose Us Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_why_choose_us_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_why_choose_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_why_choose_us_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_why_choose_us_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Portfolio Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_portfolio_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_portfolio_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_portfolio_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Testimonial Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_testimonial_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_testimonial_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_testimonial_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Team Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_team_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_team_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_team_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Contact Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_contact_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_contact_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_contact_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Meet Us Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_meet_us_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_meet_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_meet_us_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_meet_us_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Blog Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_blog_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_blog_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_blog_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_blog_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Client Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t1_clint_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t1_clint_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t1_clint_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t1_clint_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Theme 2 Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Hero Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_hero_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_hero_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_hero_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_about_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_about_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_about_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_about_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Service Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_service_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_service_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_service_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Intro Video Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_intro_video_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_intro_video_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_intro_video_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Team Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_team_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_team_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_team_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Counter Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_counter_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_counter_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_counter_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_counter_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Testimonial Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_testimonial_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_testimonial_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_testimonial_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Contact Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_contact_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_contact_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_contact_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Faq Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_faq_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_faq_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_faq_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Quote Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_quote_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_quote_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_quote_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_quote_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('News Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_news_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_news_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_news_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_news_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Client Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t2_client_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t2_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t2_client_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t2_client_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Theme 3 Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Hero Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_hero_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_hero_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_hero_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Service Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_service_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_service_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_service_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Portfolio Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_portfolio_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_portfolio_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_portfolio_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Testmonial Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_testimonial_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_testimonial_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_testimonial_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Faq Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_faq_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_faq_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_faq_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Team Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_team_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_team_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_team_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Meet Us Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_meet_us_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_meet_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_meet_us_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_meet_us_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('News Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_news_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_news_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_news_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_news_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Client Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t3_client_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t3_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t3_client_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t3_client_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Theme 4 Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Hero Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_hero_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_hero_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_hero_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Client Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_client_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_client_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_client_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_about_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_about_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_about_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_about_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Feature Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_feature_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_feature_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_feature_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_feature_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Who We Are Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_who_we_are_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_who_we_are_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_who_we_are_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_who_we_are_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Intro Video Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_intro_video_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_intro_video_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_intro_video_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Portfolio Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_portfolio_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_portfolio_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_portfolio_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Counter Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_counter_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_counter_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_counter_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_counter_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Testmonial Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_testmonial_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_testmonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_testmonial_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_testmonial_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Faq Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_faq_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_faq_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_faq_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Contact Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_t4_contact_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t4_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_t4_contact_section')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_t4_contact_section')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Inner Page Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About Page')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->about_page == '1' ? 'checked' : ''); ?> data-size="large" name="about_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('about_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('about_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About - About Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->about_about == '1' ? 'checked' : ''); ?> data-size="large" name="about_about" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('about_about')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('about_about')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About - Who we Are Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->about_w_w_a == '1' ? 'checked' : ''); ?> data-size="large" name="about_w_w_a" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('about_w_w_a')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('about_w_w_a')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About - Choose Us Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->about_choose_us == '1' ? 'checked' : ''); ?> data-size="large" name="about_choose_us" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('about_choose_us')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('about_choose_us')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('About - About history Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->about_history == '1' ? 'checked' : ''); ?> data-size="large" name="about_history" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('about_history')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('about_history')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Service Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->service_page == '1' ? 'checked' : ''); ?> data-size="large" name="service_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('service_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('service_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Portfolio Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->poerfolio_page == '1' ? 'checked' : ''); ?> data-size="large" name="poerfolio_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('poerfolio_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('poerfolio_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Package Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->package_page == '1' ? 'checked' : ''); ?> data-size="large" name="package_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('package_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('package_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Team Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->team_page == '1' ? 'checked' : ''); ?> data-size="large" name="team_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('team_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('team_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Faq Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->faq_page == '1' ? 'checked' : ''); ?> data-size="large" name="faq_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('faq_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('faq_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Blog Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->blog_page == '1' ? 'checked' : ''); ?> data-size="large" name="blog_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('blog_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('blog_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Contact Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->contact_page == '1' ? 'checked' : ''); ?> data-size="large" name="contact_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('contact_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('contact_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Quote Section')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->quote_page == '1' ? 'checked' : ''); ?> data-size="large" name="quote_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('quote_page')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('quote_page')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Other Visibility')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Social Share (blog & product)')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_blog_share_links == '1' ? 'checked' : ''); ?> data-size="large" name="is_blog_share_links" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_blog_share_links')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_blog_share_links')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Cooki Alert')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_cooki_alert == '1' ? 'checked' : ''); ?> data-size="large" name="is_cooki_alert" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_cooki_alert')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_cooki_alert')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('WhatsApp Button')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_whatsapp == '1' ? 'checked' : ''); ?> data-size="large" name="is_whatsapp" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_whatsapp')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_whatsapp')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Phone Call Button')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($commonsetting->is_call_button == '1' ? 'checked' : ''); ?> data-size="large" name="is_call_button" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        <?php if($errors->has('is_call_button')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_call_button')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Update')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- /.col -->
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/settings/page-visibility.blade.php ENDPATH**/ ?>