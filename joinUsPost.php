<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/3/1
 * Time: 15:39
 */
/**
 * Template Name: 加入我们招聘职位模板
 */
$uri = get_template_directory_uri();
get_template_part('assets/template/joinUs/header');
the_post();
?>
<div class="credit-tabs-content mt-50 mb-50">
    <div class="container">
        <div class="text-center head col-12 mb-4" style="line-height: 50px">
            <h5><?php echo get_the_title(); ?></h5>
        </div>
        <div style="padding: 100px 5%;" class="border rounded">
            <?php echo the_content(); ?>
        </div>

    </div>
</div>
<?php
get_template_part('assets/template/joinUs/footer');
?>
