<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 10:14
 */
?>
<?php
$uri = 'http://localhost/wordpress/developerCenter';
$args = array(
    array(
        'menu' => '概述和基础',
        'submenu' => array(
            '产品介绍',
            '商务接入流程',
            '接入的产品能够解决怎样的问题',
            '初步接入过程中需注意的关键点'
        ),
        'id' => array(
            16, 17, 18
        ),
        'type' => 'dropdown'
    ),
    array(
        'menu' => '接入指南',
        'id' => 11,
        'href' => $uri.''
    ),
    array(
        'menu' => '调试',
        'submenu' => array(
            '参数的配置',
        ),
        'id' => array(
            13
        ),
        'type' => 'dropdown'
    ),
    array(
        'menu' => '论坛',
        'submenu' => array(
            '支付通道标准费用'
        ),
        'id' => array(
            14
        ),
        'type' => 'dropdown'
    )
);
sideBarTemplate($args);
?>