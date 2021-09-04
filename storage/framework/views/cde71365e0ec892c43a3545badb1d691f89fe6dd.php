<header class="header-area header-area-2 header-area-4">
    <div class="header-top pl-30 pr-30 white-bg">
        <div class="myrow  align-items-center">
            <?php echo $__env->make('front.partials.menu.topContent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="header-nav">
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <?php echo $__env->make('front.partials.menu.nav-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </nav>
        </div> <!-- navigation -->
    </div>
</header><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/partials/menu/menu4.blade.php ENDPATH**/ ?>