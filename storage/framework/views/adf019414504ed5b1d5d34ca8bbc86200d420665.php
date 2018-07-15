<!DOCTYPE html>
 <html lang="zxx">

    <head>

        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="keywords" content="HTML5 Template Bemax onepage themeforest" />
        <meta name="description" content="Bemax - Onepage Multi-Purpose HTML5 Template" />
        <meta name="author" content="" />

        <!-- Title  -->
        <title>Grace Myanmar</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo asset('frontend/img/lfavicon.ico'); ?>" />

    <?php echo $__env->make('frontend.template.assets.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <!-- =====================================
        ==== Start Loading -->

        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <!-- End Loading ====
        ======================================= -->
        <!--  Main Wrap  -->
        <div id="main">
            <?php echo $__env->make('frontend.template.assets.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('frontend.template.assets.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!--  Main Wrap  -->
        
        <?php echo $__env->make('frontend.template.assets.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </body>
</html>
