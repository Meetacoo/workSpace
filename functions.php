<?php
// search方法
function tongleer_search_url_rewrite()
{
    if (is_search() && !empty($_GET['s'])) {
        wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
        exit();
    }
}

// 重定向
add_action('template_redirect', 'tongleer_search_url_rewrite');

if (function_exists('register_nav_menus')) {
    register_nav_menus(array('primary' => 'Primary Navigation'));
} //主键key调用nav时使用，值value为后台菜单显示名称

//wp_enqueue_style(
//    'bootstrap-extension',
//    get_template_directory_uri() . '/assets/css/a.css',
//    null,
//    null, // 举例不适用版本号
//    'screen'
//);


function coreTemplate($args)
{
    ?>
    <div class="single-about-area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Core strength</p>
                        <h2>核心实力</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($args as $key => $value) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100">
                            <div class="icon">
                                <i class="<?php printf($value["icon"]) ?>"></i>
                            </div>
                            <div class="text">
                                <h5><?php printf($value["label"]) ?></h5>
                                <p><?php printf($value["value"]) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }

;
function productionTemplate($args, $titles)
{
    ?>
    <div class="single-about-area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p><?php printf($titles["subTitle"]) ?></p>
                        <h2><?php printf($titles["title"]) ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($args as $key => $value) { ?>
                    <div class="col-lg-4 top-contact-info">
                        <a href="<?php printf($value["href"]) ?>" class="single-about" data-toggle="tooltip"
                           data-placement="top"
                           title="点击查看详细">
                            <div class="single-about-img">
                                <img src="<?php printf(get_template_directory_uri() . $value["src"]) ?>" alt="">
                            </div>
                            <div class="single-about-text">
                                <h4><?php printf($value["label"]) ?></h4>
                                <p><?php printf($value["value"]) ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }

;
function welcomeTemplate($args)
{
    ?>
    <div class="section"
         style="background-image: url('<?php printf(get_template_directory_uri() . '/assets/img/bg-img/6.jpg') ?>');">
        <section class="newsletter-area section-padding-100 bg-img jarallax">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="nl-content text-center">
                            <h2><?php printf($args["title"]) ?></h2>
                            <a href="<?php printf($args["linkTo"]) ?>"><?php printf($args["button"]) ?></a>
                            <p><?php printf($args["description"]) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php }

;
function bannerTemplate($args)
{
    ?>
    <section class="breadcrumb-area bg-img bg-overlay jarallax"
             style="background-image: url('<?php printf(get_template_directory_uri() . $args["src"]) ?>');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php printf($args["title"]) ?></h2>
                        <p class="header-intro"><?php printf($args["description"]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }

;
function sideBarTemplate($args)
{ ?>
    <?php foreach ($args as $key => $value) {
    if ($value["type"]) { ?>
        <li class="main-nav-list dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">
                <?php echo $value["menu"] ?>
            </a>
            <div class="dropdown-menu">
                <?php foreach ($value["href"] as $key => $href) { ?>
                    <a class="nav-link" href="<?php echo $href; ?>">
                        <?php echo $value["submenu"][$key]; ?>
                    </a>
                <?php } ?>
            </div>
        </li>
    <?php } else { ?>
        <li class="main-nav-list">
            <a class="nav-link" href="<?php echo $value["href"]; ?>">
                <?php echo $value["menu"]; ?>
            </a>
        </li>
    <?php }
}
} ?>
