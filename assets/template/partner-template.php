<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/21
 * Time: 17:11
 */
/**
 * Template Name: partner模板
 */
?>
<?php
$args = array(
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-1.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-2.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-3.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-4.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-5.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-1.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-2.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-3.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-4.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-5.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-1.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-2.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-3.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-4.png",
    "http://localhost/wordpress/wp-content/themes/difu-web/assets/img/logo/c-logo-5.png",
)
?>
<div class="about-area">
    <div class="space-30"></div>
    <div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading">
                    <h5>海量金融客户选择迪付</h5>
                </div>
                <div class="space-30"></div>
            </div>
        </div>
        <div class="row box-model">
            <div class="col-lg-12">
                <div class="logo-carousel owl-carousel text-center owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(-2489px, 0px, 0px); transition: all 0.25s ease 0s; width: 4980px;">
                            <?php foreach ($args as $key => $value) { ?>
                                <div class="owl-item  active" style="width: 281.2px; margin-right: 30px;">
                                    <div class="single-logo-wrapper">
                                        <div class="single-item">
                                            <img src="<?php printf($value) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
