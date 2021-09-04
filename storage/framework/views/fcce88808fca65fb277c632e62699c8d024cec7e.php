

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('About Section')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('About Section')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('About Section Info')); ?></h3>
                                <div class="card-tools">
                                    <div class="d-inline-block mr-4">
                                        <select class="form-control form-control-sm lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.about_section_update', $static->language_id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('About Image')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$static->about_image)); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="about_image"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="about_image" id="about_image">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Upload 530X730 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                            <?php if($errors->has('about_image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_image')); ?> </p>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="about_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($static->about_title); ?>">
                                            <?php if($errors->has('about_title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="about_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($static->about_sub_title); ?>">
                                            <?php if($errors->has('about_sub_title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_sub_title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="about_text" class="form-control summernote" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($static->about_text); ?></textarea>
                                            <?php if($errors->has('about_text')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_text')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Experince Years')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="about_experince_yers" placeholder="<?php echo e(__('Experince Years')); ?>" value="<?php echo e($static->about_experince_yers); ?>">
                                            <?php if($errors->has('about_experince_yers')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_experince_yers')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('About Video Link')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="about_intro_video" placeholder="<?php echo e(__('About Video Link')); ?>" value="<?php echo e($static->about_intro_video); ?>">
                                            <?php if($errors->has('about_intro_video')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_intro_video')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Text 2')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="about_text2" class="form-control summernote" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($static->about_text2); ?></textarea>
                                            <?php if($errors->has('about_text2')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_text2')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Text 3')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="about_text3" class="form-control summernote" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($static->about_text3); ?></textarea>
                                            <?php if($errors->has('about_text3')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('about_text3')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
                                
                                </form>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/home/about/index.blade.php ENDPATH**/ ?>