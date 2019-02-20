<?php
if (function_exists('register_nav_menus')) {
    register_nav_menus(array('primary' => 'Primary Navigation'));
} //主键key调用nav时使用，值value为后台菜单显示名称
?>
<?php
add_action('wp_head', 'wpjam_normal_script');
