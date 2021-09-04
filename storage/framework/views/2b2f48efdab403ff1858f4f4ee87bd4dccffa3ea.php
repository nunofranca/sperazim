<div class="col-lg-6 d-none d-lg-block">
    <div class="header-left-side text-center text-sm-left">
        <ul>
            <?php
            $email = explode( ',', $commonsetting->email );
            ?>
            <li>
                <a href="mailto:<?php echo e($email[0]); ?>"><i class="fal fa-envelope"></i> 
                <?php echo e($email[0]); ?>

                </a>
            </li>
            <?php
            $number = explode( ',', $commonsetting->number );
            ?>
            <li>
                <a href="tel:<?php echo e($number[0]); ?>"><i class="fal fa-phone"></i>  
                <?php echo e($number[0]); ?>

                </a>
            </li>
        </ul>
    </div>
</div>
<div class="col-lg-6">
    <div class="right-area">
        <div class="header-right-social d-none d-sm-inline-block">
            <ul>
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($item->url); ?>"><i class="<?php echo e($item->icon); ?>"></i></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </ul>
        </div>
       
        <div class="language-change">
            <p class="name
            <?php if(request()->path() == '/'): ?>
                <?php if($commonsetting->theme_version == 'theme1'): ?>
                    <?php if($commonsetting->is_video_hero == '1'): ?>
                        white-c
                    <?php else: ?>
                        headinc-c
                    <?php endif; ?>
                <?php elseif($commonsetting->theme_version == 'theme2'): ?>
                    <?php if($commonsetting->is_video_hero == '1'): ?>
                        white-c
                    <?php else: ?>
                        headinc-c
                    <?php endif; ?>
                <?php elseif($commonsetting->theme_version == 'theme3'): ?>
                    white-c
                <?php elseif($commonsetting->theme_version == 'theme4'): ?>
                    white-c  
                <?php endif; ?>
            <?php else: ?> 
                white-c
            <?php endif; ?>
            "><i class="fas fa-globe-americas"></i><?php echo e($currentLang->name); ?></p>
            <div class="language-menu">
                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('changeLanguage', $lang->code)); ?>" class="<?php echo e($lang->code == $currentLang->code ? 'active' : ''); ?>"><?php echo e($lang->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php if( $commonsetting->quote_page == 1): ?>
        <a class="main-btn d-lg-none" href="<?php echo e(route('front.quot')); ?>"><?php echo e(__('Gate A Quote')); ?> <i class="fal fa-long-arrow-right"></i></a>
        <?php endif; ?>
    </div>

</div><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/front/partials/menu/topContent.blade.php ENDPATH**/ ?>