<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 14:25
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
    <title>开发者中心 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/container/help.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_header();
get_template_part('assets/template/banner/developer');
?>

<!-- End Banner Area -->

<!-- Catagory Area -->
<div class="world-catagory-area mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="sidebar-categories col-xl-3 col-lg-4 col-md-5">
                <div class="head text-center">开发者中心</div>
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <?php
                    get_template_part('assets/template/sidebar/developer');
                    ?>
                </ul>
                <img src="" alt="">
            </div>

            <div class="tab-content col-xl-9 col-lg-8 col-md-7">
                <!-- Single Sidebar Widget -->
                <div>
                    <div class="row">