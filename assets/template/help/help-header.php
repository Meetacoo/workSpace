<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/27
 * Time: 9:52
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
    <title>帮助中心 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/container/help.css'; ?>">
    <script src="<?php echo get_template_directory_uri().'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader', 'template');
get_header();
get_template_part('assets/template/banner/joinYs');
?>
<!-- ##### Hero Area End ##### -->

<!-- End Banner Area -->
<div class="credit-tabs-content mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="sidebar-categories col-xl-3 col-lg-4 col-md-5">
                <div class="head text-center">帮助中心</div>
                <ul class="main-categorie nav nav-tabs" id="myTab">
                    <?php
                    get_template_part('assets/template/sidebar/help');
                    ?>
                </ul>
            </div>
            <!-- Start answer area -->
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area search-widget col-12 mb-4">
                            <?php get_search_form(); ?>
                        </div>
                        <div class="tab-content col-12" id="myTabContent">
