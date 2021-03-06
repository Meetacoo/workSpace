<?php
/**
 * Template Name: 行业解决方案模板
 */
$uri = get_template_directory_uri();
$homeUri = get_site_url();
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
    <title>行业解决方案 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $uri.'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/container/industrySolution.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_header();
get_template_part('assets/template/banner/industrySolution');
?>
<!-- ##### Services Area End ###### -->

<!-- service-area start -->
<div class="service-area service-area2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>多元化的境内外支付 + 结算一站式解决方案</h2>
                    <img src="<?php echo $uri.'/assets/img/icon/line.png'; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="<?php $homeUri.'/industrysolution/detailed'?>" class="service-items" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/1.png'; ?>" alt="">
                    <h3>运营商⾏业</h3>
                    <p>• 完善的对账系统。</p>
                    <p>• T+1的资金结算周期。</p>
                    <p>• 灵活响应客户的支付需求。</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="#" class="service-items active" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/2.png'; ?>" alt="">
                    <h3>教育行业</h3>
                    <p>• 针对教育行业的特殊性定制方案。</p>
                    <p>• 灵活结算方式。</p>
                    <p>• 为高校提供系统支持。</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="#" class="service-items" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/3.png'; ?>" alt="">
                    <h3>消金行业</h3>
                    <p>• 打通开户、放款、还款所有环节。</p>
                    <p>• 覆盖国内主流银行卡种。</p>
                    <p>• 免费分账，多角色清算。</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="#" class="service-items" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/4.png'; ?>" alt="">
                    <h3>保险行业</h3>
                    <p>• 多元化支付通道。</p>
                    <p>• 便捷的操作流程。</p>
                    <p>• 定制个性化需求功能。</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="#" class="service-items" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/5.png'; ?>" alt="">
                    <h3>境外收单行业</h3>
                    <p>• 信用卡在线支付，简单快捷。</p>
                    <p>• 交易双方快速接收交易信息反馈。</p>
                    <p>• 交易、服务出现问题时拒付风险。</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <a href="#" class="service-items" data-toggle="tooltip" data-placement="top" title="点击查看详细">
                    <img src="<?php echo $uri.'/assets/img/icon/6.png'; ?>" alt="">
                    <h3>B2B/B2C</h3>
                    <p>• 搭建符合监管要求的账户体系。</p>
                    <p>• 降低财务、开发、时间等成本。</p>
                    <p>• 为供应链融资业务提供基础数据。</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- service-area end -->

<!-- ##### Newsletter Area Start ###### -->
<?php
get_template_part('assets/template/welcome/industrySolution');
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


