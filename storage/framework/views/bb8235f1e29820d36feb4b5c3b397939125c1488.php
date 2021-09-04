<?php $__env->startSection('content'); ?>
   <!-- Content Header (Page header) -->

   <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Bem-vindo novamente,')); ?> <?php echo e(Auth::guard('admin')->user()->name); ?> !</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title"><?php echo e(__('Últimos Empreendimentos :')); ?></h3>
                
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="idtable" class="table table-bordered table-striped data_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo e(__('Imagem')); ?></th>
                            <th><?php echo e(__('Título')); ?></th>
                            <th><?php echo e(__('Categoria')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$id); ?></td>
                            <td>
                                <img class="w-80" src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_logo)); ?>" alt="">
                            </td>
                            <td>
                                <?php echo e($portfolio->title); ?>

                            </td> 
                            <td>
                                <?php echo e($portfolio->service->title); ?>

                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        </div>
      <!-- Main row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>