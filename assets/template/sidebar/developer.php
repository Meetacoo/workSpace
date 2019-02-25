<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 10:14
 */
?>
<?php
$args = array(
    array(
        'title' => '概述和基础',
        'subtitle' => array(
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
        'title' => '接入',
        'subtitle' => array(
            '注册信息修改'
        ),
        'id' => array(
            11
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '调试',
        'subtitle' => array(
            '参数的配置',
        ),
        'id' => array(
            13
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '论坛',
        'subtitle' => array(
            '支付通道标准费用'
        ),
        'id' => array(
            14
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '其他',
        'id' => 15
    )
);
sideBarTemplate($args);
?>