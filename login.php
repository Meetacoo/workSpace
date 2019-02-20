<?php
/**
 * Template Name: 登录模板
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
    <title>登录 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/difu-web/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/difu-web/assets/css/container/login.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader"></div>
<!-- ##### Header Area Start ##### -->
<div id="header"></div>
<!-- ##### Header Area End ##### -->


<!-- ***** login Area Start ***** -->
<div class="limiter">
    <div class="container-login100" style="background-image: url('http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/6.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30 form">
            <div class="login100-form-avatar">
                <img src="http://localhost/wordpress/wp-content/themes/difu-web/assets/img/bg-img/15.jpg" alt="AVATAR">
            </div>
            <span class="login100-form-title p-t-20 p-b-45">
                迪付客户
            </span>
            <form class="login100-form validate-form">
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入手机号">
                    <input class="input100" type="text" name="number" placeholder="手机号">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-phone"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入密码">
                    <input class="input100 register-pwd" type="password" name="pass" placeholder="密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn">
                        登录
                    </button>
                </div>
                <div class="text-center w-full p-t-25 p-b-150 resetPwd">
                    <a href="#" class="txt1">
                        忘记 用户名 / 密码?
                    </a>
                </div>
                <div class="text-center w-full register">
                    <a class="txt1" href="#">
                        创建新账号
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </form>
            <form class="login100-form register-form">
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入手机号">
                    <input class="input100" type="text" name="number" placeholder="手机号">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-phone"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入用户名">
                    <input class="input100" type="text" name="username" placeholder="用户名">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入密码">
                    <input class="input100 register-pwd" type="password" name="pass" placeholder="密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="请确认密码">
                    <input class="input100 register-rePwd" type="password" name="password" placeholder="确认密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn">
                        确定
                    </button>
                </div>
                <div class="text-center w-full p-t-25 resetPwd">
                    <a href="#" class="txt1">
                        忘记 用户名 / 密码?
                    </a>
                </div>
                <div class="text-center w-full login">
                    <a class="txt1" href="#">
                        登录
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </form>
            <form class="login100-form reset-form">
                <div class="wrap-input100 validate-input m-b-10" data-validate="请输入密码">
                    <input class="input100 register-pwd" type="password" name="pass" placeholder="密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="请确认密码">
                    <input class="input100 register-rePwd" type="password" name="password" placeholder="确认密码">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn">
                        确定
                    </button>
                </div>
                <div class="text-center w-full p-t-25 login">
                    <a class="txt1" href="#">
                        登录
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
                <div class="text-center w-full register">
                    <a class="txt1" href="#">
                        创建新账号
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ***** login Area End ***** -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/jquery/jquery-2.2.4.min.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/utils/template.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/Preloader.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/component/Header.js"></script>
<script src="http://localhost/wordpress/wp-content/themes/difu-web/assets/js/container/login.js"></script>
<script>
    <!-- 懒加载 -->
    $('#preloader').html(PreloaderTemplate());
    <!-- 头部导航 -->
    $('#header').html(HeaderTemplate());
</script>
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


