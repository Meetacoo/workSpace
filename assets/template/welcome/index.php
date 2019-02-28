<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/22
 * Time: 10:30
 */
?>
<?php
$homeUri = get_site_url();
$args = array(
    'title' => '加入我们',
    'linkTo' => $homeUri.'/joinUs',
    'button' => '申请加入',
    'description' => '你还在犹豫什么？加入我们，享受豪华套餐。'
);
welcomeTemplate($args);
?>