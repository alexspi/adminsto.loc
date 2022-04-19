<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="8uglov сквозная система аналитики">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/main.css')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
    
    
    
    
    
    
    
    
    
    
    
    
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet"/>
    <script src="<?php echo e(asset('assets/plugins/sourcebuster/sourcebuster.js')); ?>"></script>
    <!-- Google Tag Manager -->














    <!-- End Google Tag Manager -->
</head>
<body class="index-page" id="content">
<!-- Google Tag Manager (noscript) -->




<!-- End Google Tag Manager (noscript) -->
<?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.problems', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.spending', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.wedo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.consult', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.cases', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('front.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('front.owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div style="display:none;" class="nav_up" id="nav_up"></div>
<div style="display:none;" class="nav_down" id="nav_down"></div>

<?php echo $__env->make('front.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/libs.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/index.js')); ?>"></script>
<?php echo $__env->yieldContent('sourcebuster'); ?>
<script>
    window.onscroll = function () {
        checkMarginToTop();
    };

    var nav = document.getElementById("nav");

    var sticky = nav.offsetTop;

    function checkMarginToTop() {
        if (window.pageYOffset > sticky) {
            nav.classList.add("sticky");
        } else {
            nav.classList.remove("sticky");
        }
    }
</script>
<script>

    jQuery(function(){
        $("#nav_up").hide();
        if ($(window).scrollTop()>=250) $("#nav_up").fadeIn("slow")
        $(window).scroll(function(){
            if ($(window).scrollTop()<=250) $("#nav_up").fadeOut("slow")
            else $("#nav_up").fadeIn("slow")
        });

        $("#nav_down").hide();
        if ($(window).scrollTop()<=$(document).height()-999) $("#nav_down").fadeIn("slow")
        $(window).scroll(function(){
            if ($(window).scrollTop()>=$(document).height()-999) $("#nav_down").fadeOut("slow")
            else $("#nav_down").fadeIn("slow")
        });

        $("#nav_up").click(function(){
            $("html, body").animate({scrollTop:0}, 2600)
        })
        $("#nav_down").click(function(){
            $("html, body").animate({scrollTop:$(document).height()}, 2600)
        })
    });
</script>
</body>

</html><?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/front/main.blade.php ENDPATH**/ ?>