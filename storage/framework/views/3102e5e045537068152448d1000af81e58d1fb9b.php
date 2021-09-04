<a class="navbar-brand" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/front/img/'.$setting->header_logo )); ?>"
        alt=""></a> <!-- logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
</button> <!-- navbar toggler -->

<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link <?php if(request()->path() == '/'): ?> active  <?php endif; ?>" href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a>
        </li>
        <?php if( $commonsetting->about_page == 1): ?>
        <li class="nav-item">
            <a class="nav-link <?php if(request()->path() == 'about'): ?> active  <?php endif; ?>" href="<?php echo e(route('front.about')); ?>"><?php echo e(__('About')); ?></a>
        </li>
        <?php endif; ?>
		<?php if( $commonsetting->poerfolio_page == 1): ?>
        <li class="nav-item">
            <a class="nav-link 
            <?php if(request()->path() == 'portfolio'): ?> active 
            <?php elseif(request()->is('portfolio/*')): ?> active 
            <?php endif; ?>" href="<?php echo e(route('front.portfolio')); ?>"><?php echo e(__('Empreendimentos')); ?></a>
        </li>
        <?php endif; ?>
        <?php if( $commonsetting->service_page == 1): ?>
        <li class="nav-item">
            <a class="nav-link 
            <?php if(request()->path() == 'service'): ?> active 
            <?php elseif(request()->is('service/*')): ?> active  
            <?php endif; ?>" href="duvidas-frequentes"><?php echo e(__('Portal do Cliente')); ?></a>
        </li>
        <?php endif; ?>        
        <?php if( $commonsetting->contact_page == 1): ?>
        <li class="nav-item">
            <a class="nav-link <?php if(request()->path() == 'contact'): ?> active  <?php endif; ?>" href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Central de Atendimento')); ?></a>
        </li>
        <?php endif; ?>
    </ul>
</div> <!-- navbar collapse -->

<?php if( $commonsetting->quote_page == 1): ?>
<div class="navbar-btn mr-100 ml-30 d-none d-lg-block">
    <a class="main-btn" href="http://suporte-speranzini.ddns.net:86/" target="_blank"><?php echo e(__('Área do Cliente')); ?> <i class="fal fa-long-arrow-right"></i></a>
</div>
<?php endif; ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/partials/menu/nav-item.blade.php ENDPATH**/ ?>