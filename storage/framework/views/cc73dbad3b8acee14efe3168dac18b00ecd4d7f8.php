
<?php if($commonsetting->theme_version == 'theme1'): ?>
<?php echo $__env->make('front.themes.theme1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($commonsetting->theme_version == 'theme2'): ?>
<?php echo $__env->make('front.themes.theme2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($commonsetting->theme_version == 'theme3'): ?>
<?php echo $__env->make('front.themes.theme3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($commonsetting->theme_version == 'theme4'): ?>
<?php echo $__env->make('front.themes.theme4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/index.blade.php ENDPATH**/ ?>