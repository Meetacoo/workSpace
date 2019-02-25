<?php
/**
 * Template Name: 帮助中心模板
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
get_template_part('assets/template/banner/joinYs');
?>
<!-- ##### Hero Area End ##### -->

<!-- End Banner Area -->
<div class="credit-tabs-content mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head text-center">帮助中心</div>
                    <ul class="main-categorie nav nav-tabs" id="myTab">
                        <?php
                        get_template_part('assets/template/sidebar/help');
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Start answer area -->
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area search-widget col-12">
                            <form action="#" method="post">
                                <input type="search" name="search" placeholder="Search">
                                <button type="submit">搜索</button>
                            </form>
                        </div>
                        <!-- single product -->
                        <div class="tab-content col-12" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel"
                                 aria-labelledby="tab--1">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>产品介绍</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel"
                                 aria-labelledby="tab--2">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>商务接入流程</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel"
                                 aria-labelledby="tab--3">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>接入的产品能够解决怎样的问题</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel"
                                 aria-labelledby="tab--4">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>初步接入过程中需注意的关键点</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab5" role="tabpanel"
                                 aria-labelledby="tab--5">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>注册信息修改</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab6" role="tabpanel"
                                 aria-labelledby="tab--6">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>账户查询</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab7" role="tabpanel"
                                 aria-labelledby="tab--7">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>数据服务</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab8" role="tabpanel"
                                 aria-labelledby="tab--8">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>订单查询</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab9" role="tabpanel"
                                 aria-labelledby="tab--9">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>参数的配置</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab10" role="tabpanel"
                                 aria-labelledby="tab--10">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>报错数据查询</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab11" role="tabpanel"
                                 aria-labelledby="tab--11">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>返回码汇总</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab12" role="tabpanel"
                                 aria-labelledby="tab--12">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>接入流程问题</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab13" role="tabpanel"
                                 aria-labelledby="tab--13">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>其他常见问题</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab14" role="tabpanel"
                                 aria-labelledby="tab--14">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>支付通道标准费用</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab15" role="tabpanel"
                                 aria-labelledby="tab--15">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>我司收费</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab16" role="tabpanel"
                                 aria-labelledby="tab--16">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>关于发票</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab17" role="tabpanel"
                                 aria-labelledby="tab--17">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>其他</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab18" role="tabpanel"
                                 aria-labelledby="tab--18">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>安全</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab19" role="tabpanel"
                                 aria-labelledby="tab--19">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>免责条款</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab20" role="tabpanel"
                                 aria-labelledby="tab--20">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>重点商务问题汇总</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab21" role="tabpanel"
                                 aria-labelledby="tab--21">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>重点技术开发问题汇总</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab22" role="tabpanel"
                                 aria-labelledby="tab--22">
                                <!-- Single News Area -->
                                <div class="col-12 mb-100">
                                    <!-- single accordian area -->
                                    <div class="panel single-accordion">
                                        <div class="accordion-content">
                                            <p>邮件&电话&微信沟通界面</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Best Seller -->
            </div>
            <!-- End answer area-->
        </div>
    </div>
</div>

<!-- ##### Newsletter Area Start ###### -->
<?php
get_template_part('assets/template/welcome/index');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Popper js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/active.js'; ?>"></script>
</body>

</html>


