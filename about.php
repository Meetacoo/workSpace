<?php
/**
 * Template Name: 企业介绍模板
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
    <title>企业介绍 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/container/about.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader', 'template');
get_header();
get_template_part('assets/template/banner/about');
?>

<!-- ##### About Area Start ###### -->
<section class="about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>About us</p>
                        <h2>关于我们</h2>
                    </div>
                    <h6 class="mb-4">2016年对于整个互联网金融产业来讲注定是不平凡的一年！</h6>
                    <p class="mb-0 paragraph">
                        在这一年，互联网金融行业的野蛮生长告一段路，央行牵头展开了互联网金融的专项整治工作，迎来了行业的“监管”元年；
                        在这一年，疯狂的校园网贷震惊了我们所有人；在这一年，中国互联网金融协会成立了；在这一年，信息披露标准发布；
                        同样也在这一年，上海上福数据服务有限公司（以下简称上福数据）在上海陆家嘴成立了。</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/bg-img/14.jpg'; ?>'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/bg-img/14.jpg'; ?>'; ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>DiPay</p>
                        <h2>上福数据</h2>
                    </div>
                    <h6 class="mb-4">黄浦江畔的一间朝鲜茶馆里上福数据诞生。</h6>
                    <p class="mb-0 paragraph">
                        至今还能清晰的记得几个合伙人创立上福数据时候的情景，黄浦江畔的一间朝鲜茶馆，没错就是金三胖家的茶馆。
                        在这间茶馆中5位合伙人确定了上福数据的诞生、业务方向、组织架构等等细节问题。在上海浦东一个简陋的仅有30平米的办公室里，憧憬着在未来通过我们的努力让支付变得更加简单、更加方便；
                        让支付不再是那样的“高深莫测”，让所有的商业模式都可以轻松快捷的拥有符合自身需求的支付方式。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ###### -->

<!-- ##### Call To Action Start ###### -->
<section class="cta-area d-flex flex-wrap">
    <!-- Cta Content -->
    <div class="cta-content">
        <!-- Section Heading -->
        <div class="section-heading white">
            <div class="line"></div>
            <p>Today</p>
            <h2> 在今天</h2>
        </div>
        <h6 class="mb-0 paragraph">
            上福数据经过时间的洗礼，经过激烈竞争的市场环境淬炼，为支付产业的上中下环节提供了丰富多样的解决方案。
            产品涉及到支付各个分支，包括聚合支付平台、互联网支付、银行卡收单、会员账户系统、预付费卡系统、代收代付系统、数据查询系统、数据分析系统等产品和服务。
            为银联、银行、支付机构、企业商家、个人的支付行为提供安全、可信、定制化的解决方案。</h6>
    </div>
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax"
         style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bg-img/19.jpg'; ?>);"></div>
</section>
<section class="cta-area d-flex flex-wrap">
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax"
         style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bg-img/19.jpg'; ?>);"></div>
    <!-- Cta Content -->
    <div class="cta-content">
        <!-- Section Heading -->
        <div class="section-heading white">
            <div class="line"></div>
            <p>In The Future </p>
            <h2>在未来</h2>
        </div>
        <h6 class="mb-0 paragraph">
            上福数据将把更多的关注目光落在企业客户端，在帮助企业客户实现支付接入的基础上，在用户运营、账户体系、数据分析挖掘、跨界整合等多个方面做出探索和努力，实现金融、技术、创新、整合、跨界的目标。</h6>
</section>
<!-- ##### Call To Action End ###### -->

<!-- ##### Call To Action Start ###### -->
<section class="cta-2-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Cta Content -->
                <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="cta-text">
                        <h4>We are looking for more talented and dreamy partners to do challenging things with us.</h4>
                        <p>我们正在寻找更多才华横溢、怀揣梦想的伙伴和我们一起做充满挑战的事情！</p>
                    </div>
                    <div class="cta-btn">
                        <a href="#" class="btn credit-btn box-shadow">加入我们</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action End ###### -->

<!--roadmap area start-->
<div class="roadmap-area section-padding wow fadeInUp" id="roadmap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-100">
                    <div class="line"></div>
                    <p>Honor & milestone</p>
                    <h2>荣誉里程碑</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roadmap-carousel owl-carousel">
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-1.png'; ?>'; ?>"
                             alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <p>1998</p>
                        <div class="space-10"></div>
                        <h5>启程</h5>
                        <p>政府领导班组确定“上海电子商务工程”启动。</p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-2.png'; ?>'; ?>"
                                     alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <p>1999</p>
                                <h5>开创者</h5>
                                <p>支付平台上线、首创B2C第三方支付服务。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-4.png'; ?>'; ?>"
                             alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <p>2000</p>
                        <div class="space-10"></div>
                        <h5>领头者</h5>
                        <p>率先在国内开展国际信用卡在线支付业务,支持国内20余家主流银行在线支付服务。</p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-5.png'; ?>'; ?>"
                                     alt="">
                            </div>

                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <p>2006</p>
                                <h5>B2B支付</h5>
                                <p>率先开展B2B在线支付业务、北京市公共缴费联盟独家网上支付服务平台。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item">
                <div class="single-roadmap text-center road-left">
                    <div class="single-roadmap-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-4.png'; ?>'; ?>"
                             alt="">
                    </div>
                    <div class="space-30"></div>
                    <div class="roadmap-text">
                        <p>2013</p>
                        <div class="space-10"></div>
                        <h5>QSP资质</h5>
                        <p>获VISA国际银行卡组织颁发的QSP资质。</p>
                    </div>
                </div>
            </div>
            <div class="roadmap-item align-self-center">
                <div class="single-roadmap road-right">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <div class="single-roadmap-img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/production/roadmap-5.png'; ?>'; ?>"
                                     alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="roadmap-text">
                                <p>2017</p>
                                <h5>入股清算</h5>
                                <p>入股网联清算支付公司,助力行业合规发展。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--roadmap area end-->

<!-- ##### Team Member Area Start ##### -->
<?php
get_template_part('assets/template/team', 'template');
?>
<!-- ##### Team Member Area End ##### -->

<?php
get_template_part('assets/template/link', 'template');
get_template_part('assets/template/welcome/about');
get_footer();
?>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/plugins/owl.carousel.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/container/about.js'; ?>"></script>

<!-- Popper js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/active.js'; ?>"></script>
</body>

</html>


