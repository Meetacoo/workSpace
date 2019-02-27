<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/27
 * Time: 18:58
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
    <title>迪付产品详情 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/component/partner.css'; ?>">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri() . '/assets/css/container/productionDetailed.css'; ?>">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri() . '/assets/css/container/industrySolution.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader', 'template');
get_header();
?>
<!-- ##### Header Area End ##### -->