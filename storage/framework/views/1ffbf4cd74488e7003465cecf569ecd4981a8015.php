


<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Languages')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Languages')); ?></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1"><?php echo e(__('Add Language')); ?></h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.language.index')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <form  action="<?php echo e(route('admin.language.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e(old('name')); ?>">
                                        <?php if($errors->has('name')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 control-label"><?php echo e(__('Code')); ?><span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="code" placeholder="<?php echo e(__('Enter code')); ?>" value="<?php echo e(old('code')); ?>">
                                        <?php if($errors->has('code')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('code')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bcategory_id" class="col-sm-2 control-label"><?php echo e(__('Direction')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <select class="form-control" name="direction">
                                            <option value="ltr" >LTR</option>
                                            <option value="rtl" >RTL</option>
                                        </select>
                                        <?php if($errors->has('direction')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('direction')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/language/add-languages.blade.php ENDPATH**/ ?>