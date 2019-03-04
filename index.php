<?php
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
    <title>【迪付金融官网】 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $uri.'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/common.css'; ?>">
    <link rel="stylesheet"
          href="<?php echo $uri.'/assets/css/component/partner.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri.'/assets/css/container/index.css'; ?>">

    <!-- wordpress head-->
</head>

<body>
<!-- Preloader -->
<?php
//get_template_part('assets/template/preloader','template');
get_header();
?>

<!-- ##### Header Area End ##### -->
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">
        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay"
                 style="background-image: url(<?php echo $uri.'/assets/img/bg-img/1.jpg)'; ?>"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">4 年拼搏</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">购买你的 <span>产品</span></h2>
                            <p data-animation="fadeInUp" data-delay="500ms">
                                我们有最好的产品和专业的销售和技术团队，我们为客户提供最好的产品、良好的技术支持、健全的售后服务。</p>
                            <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp"
                               data-delay="700ms">去购买</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay"
                 style="background-image: url(<?php echo $uri.'/assets/img/bg-img/5.jpg)'; ?>"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInDown" data-delay="100ms">4 年拼搏</h6>
                            <h2 data-animation="fadeInDown" data-delay="300ms">购买你的 <span>产品</span></h2>
                            <p data-animation="fadeInDown" data-delay="500ms">
                                迪付合作伙伴生态提供全方位的合作与支持，致力于帮助合作伙伴构建基于迪付的业务实践和解决方案,合作伙伴基本分类，有助于伙伴获得符合自身能力特点的权益和激励，与迪付实现共赢，和合共生。</p>
                            <a href="#" class="btn credit-btn mt-50" data-animation="fadeInDown"
                               data-delay="700ms">购买产品</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay"
                 style="background-image: url(<?php echo $uri.'/assets/img/bg-img/1.jpg)'; ?>"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">4 年拼搏</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">购买你的 <span>产品</span></h2>
                            <p data-animation="fadeInUp" data-delay="500ms">
                                公司里，各个岗位都有顶尖的人才坐镇，工作之余，依然能够享受卓越的生活品质。</p>
                            <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp"
                               data-delay="700ms">去购买</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay"
                 style="background-image: url(<?php echo $uri.'/assets/img/bg-img/5.jpg)'; ?>"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInDown" data-delay="100ms">还有疑惑？</h6>
                            <h2 data-animation="fadeInDown" data-delay="300ms">致电留言 <span>咨询</span></h2>
                            <p data-animation="fadeInDown" data-delay="500ms">
                                我公司属于上海金融业黄页行业，如果您对我公司的产品服务有兴趣，期待您在线留言或者来电咨询！</p>
                            <a href="#" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">400-059-1990</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Services Area Start ###### -->
<?php
get_template_part('assets/template/core/index');
?>
<!-- ##### Services Area End ###### -->

<!-- ##### Call To Action Start ###### -->
<section class="cta-area d-flex flex-wrap">
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax"
         style="background-image: url(<?php echo $uri.'/assets/img/bg-img/5.jpg)'; ?>"></div>

    <!-- Cta Content -->
    <div class="cta-content">
        <!-- Section Heading -->
        <div class="section-heading white">
            <div class="line"></div>
            <p>这里是核心产品展示，左图 右描述</p>
            <h2>大胆而年轻的设计团队</h2>
        </div>
        <h6>
            迪付合作伙伴生态提供全方位的合作与支持，致力于帮助合作伙伴构建基于迪付的业务实践和解决方案,合作伙伴基本分类，有助于伙伴获得符合自身能力特点的权益和激励，与迪付实现共赢，和合共生。</h6>
        <div class="d-flex flex-wrap mt-50">
            <!-- Single Skills Area -->
            <div class="single-skils-area mb-70 mr-5">
                <div id="circle" class="circle" data-value="0.90">
                    <div class="skills-text">
                        <span>90%</span>
                    </div>
                </div>
                <p>数据处理能力</p>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skils-area mb-70 mr-5">
                <div id="circle2" class="circle" data-value="0.75">
                    <div class="skills-text">
                        <span>75%</span>
                    </div>
                </div>
                <p>调度能力</p>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skils-area mb-70">
                <div id="circle3" class="circle" data-value="0.97">
                    <div class="skills-text">
                        <span>97%</span>
                    </div>
                </div>
                <p>安全能力</p>
            </div>
        </div>
        <a href="#" class="btn credit-btn box-shadow btn-2">深入了解</a>
    </div>
</section>
<!-- ##### Call To Action End ###### -->

<!-- ##### Call To Action Start ###### -->
<section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Cta Content -->
                <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="cta-text">
                        <h4>海纳百川，精选全球的高品质软件与服务</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="<?php $homeUri.'/pricing'?>" class="btn credit-btn box-shadow">查看详情</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action End ###### -->
<!--<div id="production"></div>-->
<?php
get_template_part('assets/template/indexProduction','template');
get_template_part('assets/template/partner','template');
get_template_part('assets/template/welcome/index');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo $uri.'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="<?php echo $uri.'/assets/js/plugins/owl.carousel.min.js'; ?>"></script>
<script src="<?php echo $uri.'/assets/js/container/Partner.js'; ?>"></script>

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

