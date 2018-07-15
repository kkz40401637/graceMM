<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>solonick</title>
    <!-- <meta id="token" name="token" value="<?php echo e(csrf_token()); ?>"> -->

    <?php echo $__env->make('frontend.template.assets.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
        </div>
        <!--loader end-->
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
