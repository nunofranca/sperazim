

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Client Section')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Client Section')); ?></li>
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
                            <div class="card-header  with-border">
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Client')); ?></h3>
                                <div class="card-tools">
                                <a href="<?php echo e(route('admin.client.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <form class="form-horizontal" action="<?php echo e(route('admin.client.update', $client->id)); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <select class="form-control lang" name="language_id">
                                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($lang->id); ?>" <?php echo e($client->language_id == $lang->id ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php if($errors->has('language_id')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="w-100 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/client/'.$client->image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="image" id="image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 70X70 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($client->name); ?>">
                                                <?php if($errors->has('name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="value" class="col-sm-2 control-label"><?php echo e(__('Link')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="link" placeholder="<?php echo e(__('Link')); ?>" value="<?php echo e($client->link); ?>">
                                                <?php if($errors->has('link')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('link')); ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        </div>

                                      


                                        <div class="form-group row">
                                            <label for="value" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="<?php echo e($client->serial_number); ?>">
                                                <?php if($errors->has('serial_number')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>
    
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status">
                                                   <option value="0" <?php echo e($client->status == '0' ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                                   <option value="1" <?php echo e($client->status == '1' ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
                                                  </select>
                                                <?php if($errors->has('status')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/home/client/edit.blade.php ENDPATH**/ ?>