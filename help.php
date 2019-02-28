<?php
/**
 * Template Name: 帮助中心模板
 */
get_template_part('assets/template/help/help', 'header');

the_post();
echo the_content();

get_template_part('assets/template/help/help', 'footer');
?>


