


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
                            <h3 class="card-title mt-1"><?php echo e($page_title); ?></h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.language.index')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive" id="app">
                            <form method="post" action="<?php echo e(route('admin.language.updateKeyword', $la->id)); ?>" id="langForm">
                                <?php echo e(csrf_field()); ?>

              
                                <div class="row"> 
                                    <div class="col-md-4 mt-2" v-for="(value, key) in datas" :key="key">
                                        <div class="form-group">
                                            <label for="title" class="control-label"  style="white-space: normal;">{{ key }}</label>
                                            <input type="text" class="form-control" :value="value" :name="'keys[' + key + ']'">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Update')); ?></button>
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


<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/admin/plugins/vue/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/vue/axios.js')); ?>"></script>
    <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
    </script>

    <script>
        window.app = new Vue({
            el: '#app',
            data: {
                datas: <?php echo $json; ?>,
            }
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/language/edit-keyword.blade.php ENDPATH**/ ?>