<?php
/**
 * Template Name: 定价模板
 */
$uri = get_template_directory_uri();
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
    <title>产品定价 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $uri.'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/common.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_header();
get_template_part('assets/template/banner/pricing');
?>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Special Feature Area Start ###### -->
<section class="special-feature-area d-flex flex-wrap">
    <!-- Special Feature Content -->
    <div class="special-feature-content section-padding-100">
        <div class="feature-text">
            <!-- Section Heading -->
            <div class="section-heading white mb-50">
                <div class="line"></div>
                <p>会员账户系统</p>
                <h2>标准定价产品</h2>
            </div>
            <h6>提前锁定用户消费，快速回笼资金
                余额 + 支付渠道组合支付，支付更高效
                发放优惠卡券，延长客户停留时间，提升复购转化
                支付渠道、余额、优惠券等不同来源资金报表，清晰明.</h6>
            <a href="#" class="btn credit-btn btn-2 box-shadow">查看更多</a>
        </div>
    </div>
    <!-- Special Feature Thumbnail -->
    <div class="special-feature-thumbnail bg-img jarallax"
         style="background-image: url(<?php echo $uri.'/assets/img/bg-img/20.jpg'; ?>);"></div>
</section>
<!-- ##### Special Feature Area End ###### -->

<!-- ##### Special Feature Area Start ###### -->
<section class="special-feature-area style-2 d-flex flex-wrap">
    <!-- Special Feature Thumbnail -->
    <div class="special-feature-thumbnail bg-img jarallax"
         style="background-image: url(<?php echo $uri.'/assets/img/bg-img/21.jpg'; ?>);"></div>
    <!-- Special Feature Content -->
    <div class="special-feature-content section-padding-100">
        <div class="feature-text">
            <!-- Section Heading -->
            <div class="section-heading white mb-50">
                <div class="line"></div>
                <p>多级商户会员系统</p>
                <h2>协议定价产品</h2>
            </div>
            <h6>包含会员账户系统和多级商户系统的所有功能
                匹配客户业务场景，提供专业化的专属支付方案
                面向个人、企业混合的终端参与方，提供复合型的业务层级管理
                搭建用户、商户共用的账户体系，处理复杂的交易资金流转、账务逻辑.</h6>
            <a href="#" class="btn credit-btn box-shadow">查看更多</a>
        </div>
    </div>
</section>
<!-- ##### Special Feature Area End ###### -->

<!-- ##### Newsletter Area Start ###### -->
<?php
get_template_part('assets/template/welcome/pricing');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo $uri.'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<!-- Popper js -->
<script src="<?php echo $uri.'/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo $uri.'/assets/js/bootstrap/bootstrap.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo $uri.'/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo $uri.'/assets/js/active.js'; ?>"></script>
</body>

</html>


