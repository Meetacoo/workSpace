<?php
/**
 * Template Name: 帮助中心模板
 */
?>
<?php
get_template_part('assets/template/help/help', 'header');

the_post();
?>
<?php
echo the_content();

get_template_part('assets/template/help/help', 'footer');
?>


