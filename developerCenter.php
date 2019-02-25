<?php
/**
 * Template Name: 开发者中心模板
 */
?>
<?php
get_template_part('assets/template/developerCenter/developer', 'header');

$pageId = get_the_ID();
$page = get_page($pageId);

the_post();
?>
    <div class="text-center head col-12" style="line-height: 50px">
        <?php echo get_the_title(); ?>
    </div>
<?php
echo the_content();

get_template_part('assets/template/developerCenter/developer', 'footer');
?>