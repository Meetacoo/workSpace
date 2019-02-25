<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 10:56
 */
/**
 * Template Name: 加入我们模板
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>加入我们 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/common.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader','template');
get_header();
get_template_part('assets/template/banner/joinYs');
?>
<!-- ##### Hero Area End ##### -->

<!-- ##### Join Us Area Start ##### -->
<div>
    <div class="credit-tabs-content mt-50">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item col-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab"
                       aria-controls="tab1" aria-selected="false">业务</a>
                </li>
                <li class="nav-item col-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab"
                       aria-controls="tab2" aria-selected="false">运营</a>
                </li>
                <li class="nav-item col-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab"
                       aria-controls="tab3" aria-selected="true">研发</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                    <div class="credit-tab-content">
                        <!-- Single News Area -->
                        <div class="col-12">

                            <div class="accordions mb-100" id="accordionOne" role="tablist" aria-multiselectable="true">
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOneOne"
                                           data-toggle="collapse" data-parent="#accordionOne" href="#collapseOneOne">业务人员
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a></h6>
                                    <div id="collapseOneOne" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责全国市场各考试项目宣传活动的策划、宣传及实施，拓展销售渠道；</p>
                                        <p class="paragraph">2.负责市场调查分析，收集信息，汇总《市场调研报告》；</p>
                                        <p class="paragraph">3.发展并维护各大高校相关部门、协会、书店和学生招生代理；</p>
                                        <p class="paragraph">4.发展并维护企业图书、课程体系、讲座、模考、各项活动的宣传；</p>
                                        <p class="paragraph">5.完成领导交给的其他任务。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、本科及以上学历，优秀可放宽至大专，市场营销、经管类专业优先；</p>
                                        <p class="paragraph">2、形象气质较好，语言表达能力强，性格积极向上，团队合作意识强，有驾照者优先；</p>
                                        <p class="paragraph">3、工作主动性强，耐心细致，有责任心；</p>
                                        <p class="paragraph">4、有良好的市场分析能力，敏锐独到的观察力和策划、组织能力、执行力，具有开拓创新精神；</p>
                                        <p class="paragraph">5、能够承受高强度工作，有吃苦耐劳精神，可出差、驻外。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true"
                                           aria-controls="collapseOneTwo"
                                           data-parent="#accordionTwo" data-toggle="collapse" href="#collapseOneTwo">Ert
                                            dapibus dui. Sed
                                            ut iaculis elit, quis vgyu
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOneTwo" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责互联网金融相关产品的前端UI与交互开发，确保在不同平台、设备、浏览器上均拥有优质的用户体验。</p>
                                        <p class="paragraph">2.使用HTML/CSS/Javascript/AJAX开发符合W3C标准的网站前端页面；</p>
                                        <p class="paragraph">3.需与设计人员，后台工程师配合完成系统前后端整合；</p>
                                        <p class="paragraph">4.实现网站的整体页面风格、特效、JS效果以及网站的页面优化。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、掌握HTML、CSS、JavaScript等前端开发技术；</p>
                                        <p class="paragraph">2、熟练手写符合W3C规范的代码，理解HTML/XHTML的语义，正确书写HTML结构；</p>
                                        <p class="paragraph">3、具备良好的跨浏览器平台的兼容性；</p>
                                        <p class="paragraph">4、熟悉HTML5/CSS3，能够开发WebApp；</p>
                                        <p class="paragraph">5、对用户体验、交互操作流程、及用户需求有一定了解；</p>
                                        <p class="paragraph">6、具备良好的服务意识、责任心、较强的学习能力、优秀的团队沟通与协作能力。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" aria-expanded="true" aria-controls="collapseOneThree"
                                           class="collapsed"
                                           data-parent="#accordionTwo" data-toggle="collapse" href="#collapseOneThree">Ert
                                            dapibus dui.
                                            Sed ut iaculis elit, quis vgyu
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOneThree" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责互联网金融相关产品的前端UI与交互开发，确保在不同平台、设备、浏览器上均拥有优质的用户体验。</p>
                                        <p class="paragraph">2.使用HTML/CSS/Javascript/AJAX开发符合W3C标准的网站前端页面；</p>
                                        <p class="paragraph">3.需与设计人员，后台工程师配合完成系统前后端整合；</p>
                                        <p class="paragraph">4.实现网站的整体页面风格、特效、JS效果以及网站的页面优化。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、掌握HTML、CSS、JavaScript等前端开发技术；</p>
                                        <p class="paragraph">2、熟练手写符合W3C规范的代码，理解HTML/XHTML的语义，正确书写HTML结构；</p>
                                        <p class="paragraph">3、具备良好的跨浏览器平台的兼容性；</p>
                                        <p class="paragraph">4、熟悉HTML5/CSS3，能够开发WebApp；</p>
                                        <p class="paragraph">5、对用户体验、交互操作流程、及用户需求有一定了解；</p>
                                        <p class="paragraph">6、具备良好的服务意识、责任心、较强的学习能力、优秀的团队沟通与协作能力。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade show active" id="tab2" role="tabpanel"
                     aria-labelledby="tab--2">
                    <div class="credit-tab-content">
                        <!-- Single News Area -->
                        <div class="col-12">

                            <div class="accordions mb-100" id="accordionTwo" role="tablist" aria-multiselectable="true">
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwoOne"
                                           data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwoOne">运营
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a></h6>
                                    <div id="collapseTwoOne" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.根据公司产品及业务需求，开拓、运用网络资源宣传推广公司产品，为销售团队提供支持;</p>
                                        <p class="paragraph">2.负责站外推广和其他相关推广方式的设计与组织；</p>
                                        <p class="paragraph">3.策划和撰写各种营销方案，负责线上市场推广活动的策划执行工作；</p>
                                        <p class="paragraph">4.精通网站推广流程，利用各种互联网资源及网络推广方式提升网站流量、产品活动的宣传和产品知名度，开发整合更多更好的推广资源，有效提升公司网络推广效果;</p>
                                        <p class="paragraph">5.定期对推广数据进行分析，以及同行业网络信息收集分析，监测品牌的互联网口碑及推广效果。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、本科及以上学历，电子商务、中文、新闻、广告学等相关专业优先；</p>
                                        <p class="paragraph">2、具有市场推广活动的策划及执行能力，及相关经验；</p>
                                        <p class="paragraph">3、有对网络推广有极大兴趣,充分了解微信、微博、自媒体、论坛、贴吧、知乎、博客、QQ群等的推广模式；</p>
                                        <p class="paragraph">4、优秀的文案撰写能力，思维灵活、逻辑清晰，有较强的自学能力、创新意识和团队合作精神;</p>
                                        <p class="paragraph">5、具备良好的网络互动、沟通、推广能力，有成功推广运营案例者优先考虑。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true"
                                           aria-controls="collapseTwoTwo"
                                           data-parent="#accordionTwo" data-toggle="collapse"
                                           href="#collapseTwoTwo">Ert dapibus dui. Sed
                                            ut iaculis elit, quis vgyu
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseTwoTwo" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责互联网金融相关产品的前端UI与交互开发，确保在不同平台、设备、浏览器上均拥有优质的用户体验。</p>
                                        <p class="paragraph">2.使用HTML/CSS/Javascript/AJAX开发符合W3C标准的网站前端页面；</p>
                                        <p class="paragraph">3.需与设计人员，后台工程师配合完成系统前后端整合；</p>
                                        <p class="paragraph">4.实现网站的整体页面风格、特效、JS效果以及网站的页面优化。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、掌握HTML、CSS、JavaScript等前端开发技术；</p>
                                        <p class="paragraph">2、熟练手写符合W3C规范的代码，理解HTML/XHTML的语义，正确书写HTML结构；</p>
                                        <p class="paragraph">3、具备良好的跨浏览器平台的兼容性；</p>
                                        <p class="paragraph">4、熟悉HTML5/CSS3，能够开发WebApp；</p>
                                        <p class="paragraph">5、对用户体验、交互操作流程、及用户需求有一定了解；</p>
                                        <p class="paragraph">6、具备良好的服务意识、责任心、较强的学习能力、优秀的团队沟通与协作能力。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" aria-expanded="true" aria-controls="collapseTwoThree"
                                           class="collapsed"
                                           data-parent="#accordionTwo" data-toggle="collapse" href="#collapseTwoThree">Ert
                                            dapibus dui.
                                            Sed ut iaculis elit, quis vgyu
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseTwoThree" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责互联网金融相关产品的前端UI与交互开发，确保在不同平台、设备、浏览器上均拥有优质的用户体验。</p>
                                        <p class="paragraph">2.使用HTML/CSS/Javascript/AJAX开发符合W3C标准的网站前端页面；</p>
                                        <p class="paragraph">3.需与设计人员，后台工程师配合完成系统前后端整合；</p>
                                        <p class="paragraph">4.实现网站的整体页面风格、特效、JS效果以及网站的页面优化。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、掌握HTML、CSS、JavaScript等前端开发技术；</p>
                                        <p class="paragraph">2、熟练手写符合W3C规范的代码，理解HTML/XHTML的语义，正确书写HTML结构；</p>
                                        <p class="paragraph">3、具备良好的跨浏览器平台的兼容性；</p>
                                        <p class="paragraph">4、熟悉HTML5/CSS3，能够开发WebApp；</p>
                                        <p class="paragraph">5、对用户体验、交互操作流程、及用户需求有一定了解；</p>
                                        <p class="paragraph">6、具备良好的服务意识、责任心、较强的学习能力、优秀的团队沟通与协作能力。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                    <div class="credit-tab-content">
                        <!-- Single News Area -->
                        <div class="col-12">

                            <div class="accordions mb-100" id="accordionThree" role="tablist"
                                 aria-multiselectable="true">
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseThrOne"
                                           data-toggle="collapse" data-parent="#accordionThree" href="#collapseThrOne">前端开发工程师
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a></h6>
                                    <div id="collapseThrOne" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">1.负责互联网金融相关产品的前端UI与交互开发，确保在不同平台、设备、浏览器上均拥有优质的用户体验。</p>
                                        <p class="paragraph">2.使用HTML/CSS/Javascript/AJAX开发符合W3C标准的网站前端页面；</p>
                                        <p class="paragraph">3.需与设计人员，后台工程师配合完成系统前后端整合；</p>
                                        <p class="paragraph">4.实现网站的整体页面风格、特效、JS效果以及网站的页面优化。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、掌握HTML、CSS、JavaScript等前端开发技术；</p>
                                        <p class="paragraph">2、熟练手写符合W3C规范的代码，理解HTML/XHTML的语义，正确书写HTML结构；</p>
                                        <p class="paragraph">3、具备良好的跨浏览器平台的兼容性；</p>
                                        <p class="paragraph">4、熟悉HTML5/CSS3，能够开发WebApp；</p>
                                        <p class="paragraph">5、对用户体验、交互操作流程、及用户需求有一定了解；</p>
                                        <p class="paragraph">6、具备良好的服务意识、责任心、较强的学习能力、优秀的团队沟通与协作能力。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseThrTwo"
                                           data-parent="#accordionThree" data-toggle="collapse" href="#collapseThrTwo">高级js开发工程师
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseThrTwo" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">负责开发js。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、工作经验3年以上；</p>
                                        <p class="paragraph">2、实现Web交互界面，优化代码并保持良好兼容性；</p>
                                        <p class="paragraph">3、与后台开发工程师密切配合，完成web前端的开发工作；</p>
                                        <p class="paragraph">4、跟踪研究W3C标准和最新前端技术，参与部门前端框架和技术规范的开发制定；</p>
                                        <p class="paragraph">5、开发JavaScript程序模块，通用类库、框架编写；</p>
                                        <p class="paragraph">6、精通JavaScript/Ajax/assets/json/Dom/ jQuery/Html5/CSS3等前端开发技术。</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" aria-expanded="true" aria-controls="collapseThrThree"
                                           class="collapsed"
                                           data-parent="#accordionThree" data-toggle="collapse"
                                           href="#collapseThrThree">vc开发工程师
                                            <span class="accor-open"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                                         aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseThrThree" class="accordion-content collapse">
                                        <p>工作职责：</p>
                                        <p class="paragraph">负责直播客户端开发。</p>
                                        <p>任职资格：</p>
                                        <p class="paragraph">1、工作经验 3年以上；</p>
                                        <p class="paragraph">2、熟悉使用C/VC++，以及常用的设计模式；</p>
                                        <p class="paragraph">3、对obs非常熟悉，具有大规模直播平台相关经验优先；</p>
                                        <p class="paragraph">4、良好的架构抽象思维，发散思维，逻辑思维，概念清晰，喜欢深入阅读开源产品；</p>
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
<!-- ##### Join Us Area End ##### -->

<!-- ##### Features Area Start ###### -->
<section class="features-area">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our Loans</h2>
                    </div>
                    <h6>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros
                        hendrerit.</h6>
                    <a href="#" class="btn credit-btn mt-50">Discover</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/2.jpg'; ?>" alt="">
                    <h5>We take care of you</h5>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/3.jpg'; ?>" alt="">
                    <h5>No documents needed</h5>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/4.jpg'; ?>" alt="">
                    <h5>Fast &amp; easy loans</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Features Area End ###### -->

<!-- ##### Call To Action Start ###### -->
<section class="cta-area d-flex flex-wrap">
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/bg-img/5.jpg'; ?>);"></div>

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
                        <a href="#" class="btn credit-btn box-shadow">查看详情</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action End ###### -->

<!-- ##### Miscellaneous Area Start ###### -->
<section class="miscellaneous-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <!-- Add Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/add.png'; ?>" alt=""></a>
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
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/location.png'; ?>" alt="">
                            </div>
                            <div class="text">
                                <p>上海市浦东新区芳华路 <br> 陆家嘴互联网创新基地 <br> A栋139号101室</p>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/call.png'; ?>" alt="">
                            </div>
                            <div class="text">
                                <p>400-059-1990</p>
                                <span>周一至周五 09:00-18:00</span>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/core-img/message2.png'; ?>" alt="">
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
                        <h2>我们将提供</h2>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/bg-img/10.jpg'; ?>" alt="">
                        </div>
                        <div class="news-content">
                            <span>July 18, 2018</span>
                            <a href="#">薪酬福利</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 丰厚奖金</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 团建旅游</a>
                            </div>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 节日礼物</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 综合补贴</a>
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
                            <a href="#">公司氛围</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 无障碍沟通</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 非常nice的老板同事</a>
                            </div>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 人性化公司氛围</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 非常nice的老板同事</a>
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
                            <a href="#">培训发展</a>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 新人培训</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 业务培训</a>
                            </div>
                            <div class="news-meta">
                                <a href="#" class="post-author"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/pencil.png'; ?>" alt=""> 调岗晋升</a>
                                <a href="#" class="post-date"><img src="<?php echo get_template_directory_uri().'/assets/img/core-img/calendar.png'; ?>" alt=""> 工作指导</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ###### -->

<!-- ##### Newsletter Area Start ###### -->
<?php
get_template_part('assets/template/welcome/index');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/js/container/joinUs.js'; ?>"></script>
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
