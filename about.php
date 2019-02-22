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
    <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/container/about.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_template_part('assets/template/header','template');
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
                    <h6 class="mb-4">迪付（www.difu.com）创立于2015年，是全球领先的云计算及人工智能科技公司。</h6>
                    <p class="mb-0 paragraph">
                        上海迪付金融信息服务有限公司以人才为核心竞争力作为企业发展驱动力，目前大学以上学历员工已占员工总数的63%以上。
                        目前，上海迪付金融信息服务有限公司业务网络遍及上海、逐步形成向全国其他省市辐射的趋势！ 已为许多客户提供了优质服务，用心赢得了众多企业的信赖和好评，在上海地区逐渐树立起良好品牌形象。</p>
                    <p class="mb-0 paragraph">
                        上海迪付金融信息服务有限公司以诚信、实力和产品质量获得业界的高度认可。欢迎各界朋友莅临参观、指导和业务洽谈。</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/14.jpg'; ?>'; ?>" alt="">
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
            <p>Defoe data</p>
            <h2>迪福数据</h2>
        </div>
        <h6 class="mb-0">
            迪福数据是国内唯一与六大国际卡组织均建立系统和网络联接的第三方服务机构，于2014年获得红杉资本投资。在互联网金融爆发增长的时代，迪福数据将进一步提升技术服务能力，扩大业务纵深，致力于打造中国支付行业的领先数据处理服务商，帮助合作伙伴联接众多交易场景和用户，处理海量交易，努力成为中国支付产业链的参与者和重要一环，助力互联网+新时代的支付基础设施建设。.</h6>

        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <!-- Single Cool Facts -->
            <div class="single-cool-fact white d-flex align-items-center mt-50">
                <div class="scf-icon mr-15">
                    <i class="icon-piggy-bank"></i>
                </div>
                <div class="scf-text">
                    <h2><span class="counter">2015</span></h2>
                    <p>成立于</p>
                </div>
            </div>
            <!-- Single Cool Facts -->
            <div class="single-cool-fact white d-flex align-items-center mt-50">
                <div class="scf-icon mr-15">
                    <i class="icon-coin"></i>
                </div>
                <div class="scf-text">
                    <h2><span class="counter">350000</span></h2>
                    <p>合作企业</p>
                </div>
            </div>
            <!-- Single Cool Facts -->
            <div class="single-cool-fact white d-flex align-items-center mt-50">
                <div class="scf-icon mr-15">
                    <i class="icon-diamond"></i>
                </div>
                <div class="scf-text">
                    <h2><span class="counter">14332</span></h2>
                    <p>吸纳人才</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/bg-img/19.jpg'; ?>'; ?>);"></div>
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
                        <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-1.png'; ?>'; ?>" alt="">
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
                                <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-2.png'; ?>'; ?>" alt="">
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
                        <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-4.png'; ?>'; ?>" alt="">
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
                                <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-5.png'; ?>'; ?>" alt="">
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
                        <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-4.png'; ?>'; ?>" alt="">
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
                                <img src="<?php echo get_template_directory_uri().'/assets/img/production/roadmap-5.png'; ?>'; ?>" alt="">
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
<section class="team-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-100">
                    <div class="line"></div>
                    <p>Our team</p>
                    <h2>我们的团队</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member-area mb-100">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/15.jpg'; ?>'; ?>" alt="">
                        <!-- View More -->
                        <div class="view-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h5>王婷婷1</h5>
                        <h6>工业设计副总裁2016年</h6>
                    </div>
                </div>
            </div>

            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member-area mb-100">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/16.jpg'; ?>'; ?>" alt="">
                        <!-- View More -->
                        <div class="view-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h5>王婷婷2</h5>
                        <h6>工业设计副总裁2017年</h6>
                    </div>
                </div>
            </div>

            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member-area mb-100">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/17.jpg'; ?>'; ?>" alt="">
                        <!-- View More -->
                        <div class="view-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h5>王婷婷3</h5>
                        <h6>工业设计副总裁2018年</h6>
                    </div>
                </div>
            </div>

            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member-area mb-100">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/18.jpg'; ?>'; ?>" alt="">
                        <!-- View More -->
                        <div class="view-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h5>王婷婷4</h5>
                        <h6>工业设计副总裁2019年</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Team Member Area End ##### -->

<!-- ##### Miscellaneous Area Start ###### -->
<section class="miscellaneous-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <!-- Add Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/add.png'; ?>'; ?>" alt=""></a>
                </div>
            </div>

            <!-- Contact Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Section Heading -->
                    <div class="section-heading mb-50">
                        <div class="line"></div>
                        <h2>联系我们</h2>
                    </div>
                    <!-- Contact Content -->
                    <div class="contact-content">
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/location.png'; ?>'; ?>" alt="">
                            </div>
                            <div class="text">
                                <p>上海市浦东新区芳华路 <br> 陆家嘴互联网创新基地 <br> A栋139号101室</p>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/call.png'; ?>'; ?>" alt="">
                            </div>
                            <div class="text">
                                <p>400-059-1990</p>
                                <span>周一至周五 09:00-18:00</span>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/message2.png'; ?>'; ?>" alt="">
                            </div>
                            <div class="text">
                                <p>df@difufinance.com</p>
                                <span>我们24小时内回复</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Section Heading -->
                    <div class="section-heading mb-50">
                        <div class="line"></div>
                        <h2>The news</h2>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/10.jpg'; ?>'; ?>" alt="">
                        </div>
                        <div class="news-content">
                            <span>July 18, 2018</span>
                            <a href="#">How to get the best loan online</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> April 26</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/11.jpg'; ?>" alt="">
                        </div>
                        <div class="news-content">
                            <span>July 18, 2018</span>
                            <a href="#">A new way to finance your dream home</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> April 26</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/12.jpg'; ?>" alt="">
                        </div>
                        <div class="news-content">
                            <span>July 18, 2018</span>
                            <a href="#">10 tips to get the best loan for you</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> Jane
                                    Smith</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> April 26</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ###### -->
<?php
get_template_part('assets/template/welcome/about');
get_template_part('assets/template/footer','template');
?>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/js/plugins/owl.carousel.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/js/container/about.js'; ?>"></script>
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


