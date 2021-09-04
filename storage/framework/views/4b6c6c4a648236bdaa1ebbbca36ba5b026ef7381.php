


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
                            <h3 class="card-title mt-1"><?php echo e(__('Languages List')); ?></h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.language.add')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> <?php echo e(__('Add Language')); ?>

                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if(count($languages) == 0): ?>
                                <h3 class="text-center">NO LANGUAGE FOUND</h3>
                            <?php else: ?>
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Code')); ?></th>
                                        <th><?php echo e(__('Direction')); ?></th>
                                        <th><?php echo e(__('Default')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$id); ?></td>
                                        <td><?php echo e($language->name); ?></td>
                                        <td><?php echo e($language->code); ?></td>
                                        <td class="text-uppercase"><?php echo e($language->direction); ?></td>
                                        <td>
                                            <?php if($language->is_default == 1): ?>
                                            <strong class="btn btn-success btn-xs">Default</strong>
                                            <?php else: ?>
                                            <form class="d-inline-block" action="<?php echo e(route('admin.language.default', $language->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-primary btn-xs" type="submit" name="button">Make Default</button>
                                            </form>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.language.editKeyword', $language->id)); ?>">
                                            <i class="fas fa-edit"></i>
                                            <?php echo e(__('Edit Keyword')); ?>

                                            </a>
                                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.language.edit', $language->id)); ?>">
                                                <i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?>

                                            </a>
                                            <form class="deleteform d-inline-block" action="<?php echo e(route('admin.language.delete', $language->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                                <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/language/index.blade.php ENDPATH**/ ?>