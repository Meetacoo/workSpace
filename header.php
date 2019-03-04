<?php
$uri = get_template_directory_uri();
$homeUri = get_site_url();
?>
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="<?php echo $homeUri;?>"><img
                                    src="<?php echo $uri.'/assets/img/core-img/logo.png'?>"
                                    alt=""></a>
                    </div>
                    <!-- Top Contact Info -->
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="浦东新区，芳华路139号"><img
                                    src="<?php echo $uri.'/assets/img/core-img/placeholder.png'?>"
                                    alt="">
                            <span>浦东新区，芳华路139号</span>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="shangfudata@com"><img
                                    src="<?php echo $uri.'/assets/img/core-img/message.png'?>"
                                    alt="">
                            <span>shangfudata@com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Area -->
    <div class="credit-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container" style="padding:0">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="creditNav">
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="nav-item"><a class="nav-link index" href="<?php echo $homeUri;?>">首页</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo $homeUri.'/about';?>">企业介绍</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo $homeUri.'/production';?>">产品介绍</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $homeUri.'/production/aggregat-pay';?>">聚合支付</a></li>
                                        <li><a href="<?php echo $homeUri.'/production/authentication';?>">数据查询</a></li>
                                        <li><a href="<?php echo $homeUri.'/production/internetPay';?>">互联网支付</a></li>
                                        <li><a href="<?php echo $homeUri.'/production/detailed';?>">会员账户系统</a></li>
                                        <li><a href="<?php echo $homeUri.'/production/detailed';?>">预付费卡系统</a></li>
                                        <li><a href="<?php echo $homeUri.'/production/detailed';?>">代收代付系统</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="<?php echo $homeUri.'/industrySolution';?>">行业解决方案</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">运营商行业</a>
                                        </li>
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">教育行业</a></li>
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">消金行业</a></li>
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">保险行业</a></li>
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">境外收单行业</a>
                                        </li>
                                        <li><a href="<?php echo $homeUri.'/industrySolution/detailed';?>">B2B/B2C</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo $homeUri.'/developerCenter/basic-merchant';?>">开发者中心</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $homeUri.'/developerCenter/basic-merchant';?>">概述和基础</a></li>
                                        <li><a href="<?php echo $homeUri.'/developerCenter/guide-merchant';?>">接入指南</a></li>
                                        <li><a href="<?php echo $homeUri.'/developerCenter/demo';?>">DEMO下载</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item helpCenter">
                                    <a class="nav-link"
                                       href="<?php echo $homeUri.'/help/common-merchant';?>">帮助中心</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $homeUri.'/help/common-merchant';?>">商户接口</a></li>
                                        <li><a href="<?php echo $homeUri.'/help/common-collectingpayment';?>">代收支付</a></li>
                                        <li><a href="<?php echo $homeUri.'/help/common-quickpay';?>">快捷支付</a></li>
                                        <li><a href="<?php echo $homeUri.'/help/common-mpayment';?>">移动支付</a></li>
                                        <li><a href="<?php echo $homeUri.'/help/common-authentication';?>">鉴权</a></li>
                                        <li><a href="<?php echo $homeUri.'/help/common-gateway';?>">网关</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="<?php echo $homeUri.'/joinUs';?>">加入我们</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo $homeUri.'/login';?>">登录</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                    <!-- Contact -->
                    <div class="contact">
                        <a href="#"><img
                                    src="<?php echo $uri.'/assets/img/core-img/call2.png';?>"
                                    alt="">4000591990</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>