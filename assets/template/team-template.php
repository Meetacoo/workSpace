<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/22
 * Time: 16:23
 */
?>
<?php
$args = array(
    array(
        'src' => '/assets/img/bg-img/15.jpg',
        'name' => '王婷婷1',
        'description' => '工业设计副总裁2016年'
    ),
    array(
        'src' => '/assets/img/bg-img/16.jpg',
        'name' => '王婷婷1',
        'description' => '工业副总裁2017年'
    ),
    array(
        'src' => '/assets/img/bg-img/17.jpg',
        'name' => '王婷婷1',
        'description' => '工业设计副总裁2018年'
    ),
    array(
        'src' => '/assets/img/bg-img/18.jpg',
        'name' => '王婷婷1',
        'description' => '工业设计副总裁2019年'
    ));
?>
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
            <?php foreach ($args as $key => $value) { ?>
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="<?php echo get_template_directory_uri() .$value["src"]; ?>"
                                 alt="">
                            <!-- View More -->
                            <div class="view-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5><?php printf($value["name"]) ?></h5>
                            <h6><?php printf($value["description"]) ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>