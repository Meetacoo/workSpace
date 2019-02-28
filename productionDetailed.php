<?php
/**
 * Template Name: 迪付产品详情模板
 */
?>
<?php
get_template_part('assets/template/production/header');

the_post();
echo the_content();

get_template_part('assets/template/production/footer');
?>


