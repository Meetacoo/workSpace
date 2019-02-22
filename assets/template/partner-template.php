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
    "/assets/img/logo/c-logo-1.png",
    "/assets/img/logo/c-logo-2.png",
    "/assets/img/logo/c-logo-3.png",
    "/assets/img/logo/c-logo-4.png",
    "/assets/img/logo/c-logo-5.png"
);
?>
<div class="about-area" id="about">
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
                <div class="logo-carousel owl-carousel text-center">
                    <?php foreach ($args as $key => $value) { ?>
                        <div class="single-logo-wrapper">
                            <div class="single-item">
                                <img src="<?php printf(get_template_directory_uri().$value) ?>" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

