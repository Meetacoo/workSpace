<?php
/**
 * Template Name: 论坛模板
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
    <title>论坛 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/common.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_header();
?>
<!-- ##### Header Area End ##### -->

<!-- ##### News Area Start ##### -->
<section class="news-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single News Area -->
            <div class="col-12 col-lg-8">

                <!-- Single Blog Area -->
                <div class="single-blog-area mb-70">
                    <div class="blog-thumbnail">
                        <a href="#"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/22.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <span>July 18, 2018</span>
                        <a href="single-post.html" class="post-title">论坛文章一</a>
                        <div class="blog-meta">
                            <a href="#" class="post-author"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane
                                Smith</a>
                            <a href="#" class="post-date"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                        </div>
                        <p>上海迪付金融信息服务有限公司办公室地址位于中国大城市，魔都上海，上海 上海市宝山区河曲路118号5512室，于2015年03月06日在宝山区市场监督管理局注册成立.</p>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="single-blog-area mb-70">
                    <div class="blog-thumbnail">
                        <a href="#"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/23.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <span>July 18, 2018</span>
                        <a href="single-post.html" class="post-title">论坛文章二</a>
                        <div class="blog-meta">
                            <a href="#" class="post-author"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane
                                Smith</a>
                            <a href="#" class="post-date"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                        </div>
                        <p>在公司发展壮大的4年里，我们始终为客户提供好的产品和技术支持、健全的售后服务.</p>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="single-blog-area mb-70">
                    <div class="blog-thumbnail">
                        <a href="#"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/24.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <span>July 18, 2018</span>
                        <a href="single-post.html" class="post-title">论坛文章三</a>
                        <div class="blog-meta">
                            <a href="#" class="post-author"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane
                                Smith</a>
                            <a href="#" class="post-date"><img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                        </div>
                        <p>我公司主要经营金融信息咨询服务（除金融业务）；接受金融机构委托从事金融信息技术、金融业务流程、金融知识流程外包；企业管理；
                            投资管理及咨询；商务信息咨询；资产管理；品牌管理；商标代理服务；企业形象策划；文化艺术交流策划；电子产品的销售；
                            网络科技领域内的技术开发、技术服务、技术咨询、技术转让；计算机数据处理。</p>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- Single Sidebar Widget -->
                    <div class="single-widget-area search-widget">
                        <form action="#" method="post">
                            <input type="search" name="search" placeholder="Search">
                            <button type="submit">搜索</button>
                        </form>
                    </div>

                    <!-- Single Sidebar Widget -->
                    <div class="single-widget-area cata-widget">
                        <div class="widget-heading">
                            <div class="line"></div>
                            <h4>热门话题</h4>
                        </div>

                        <ul>
                            <li><a href="#">运营</a></li>
                            <li><a href="#">业务 & 经济</a></li>
                            <li><a href="#">技术</a></li>
                            <li><a href="#">创新领域</a></li>
                            <li><a href="#">生活方式 & 旅游</a></li>
                            <li><a href="#">更多...</a></li>
                        </ul>
                    </div>

                    <!-- Single Sidebar Widget -->
                    <div class="single-widget-area tabs-widget">
                        <div class="widget-heading">
                            <div class="line"></div>
                            <h4>最新消息</h4>
                        </div>

                        <div class="credit-tabs-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab"
                                       aria-controls="tab1" aria-selected="false">最新</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab"
                                       aria-controls="tab2" aria-selected="false">流行</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab"
                                       aria-controls="tab3" aria-selected="true">评论</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="credit-tab-content">
                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/10.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章二</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/11.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章一</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single A new way to finance your dream homeNews Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/12.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章三</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="tab2" role="tabpanel"
                                     aria-labelledby="tab--2">
                                    <div class="credit-tab-content">
                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/11.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章一</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/10.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章二</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/12.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章三</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                    <div class="credit-tab-content">
                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/10.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章二</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/12.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章三</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="single-news-area d-flex align-items-center">
                                            <div class="news-thumbnail">
                                                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/11.jpg" alt="">
                                            </div>
                                            <div class="news-content">
                                                <span>July 18, 2018</span>
                                                <a href="single-post.html">论坛文章一</a>
                                                <div class="news-meta">
                                                    <a href="#" class="post-author"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                    <a href="#" class="post-date"><img
                                                            src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/calendar.png" alt=""> April 26</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### News Area End ##### -->

<!-- ##### Newsletter Area Start ###### -->
<?php
get_template_part('assets/template/welcome/post');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/jquery/jquery-2.2.4.min.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/utils/template.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/Preloader.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/Header.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/WelcomeBanner.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/Footer/index.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/container/common.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/container/post.js"></script>
<!-- Popper js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/active.js"></script>
</body>

</html>


