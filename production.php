<?php
/**
 * Template Name: 迪付产品模板
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>迪付产品 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/container/index.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/container/production.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_template_part('assets/template/header','template');
get_template_part('assets/template/banner/production');
get_template_part('assets/template/core/production');
get_template_part('assets/template/indexProduction','template');
get_template_part('assets/template/welcome/production');
get_template_part('assets/template/footer','template');
?>
<!-- ##### Footer Area Start ##### -->
<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<!-- Popper js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/bootstrap/bootstrap.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/active.js'; ?>"></script>
</body>

</html>


