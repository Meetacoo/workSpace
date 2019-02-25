<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/22
 * Time: 18:55
 */
?>
<?php
$args = array(
    array(
        'title' => '开始使用',
        'subtitle' => array(
            '产品介绍',
            '商务接入流程',
            '接入的产品能够解决怎样的问题',
            '初步接入过程中需注意的关键点'
        ),
        'id' => array(
            1, 2, 3, 4
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '账户管理/管理平台',
        'subtitle' => array(
            '注册信息修改',
            '账户查询',
            '数据服务',
            '订单查询'
        ),
        'id' => array(
            5, 6, 7, 8
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '接入开发',
        'subtitle' => array(
            '参数的配置',
            '报错数据查询',
            '返回码汇总',
            '接入流程问题',
            '其他常见问题'
        ),
        'id' => array(
            9, 10, 11, 12, 13
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '费用',
        'subtitle' => array(
            '支付通道标准费用',
            '我司收费',
            '关于发票',
            '其他'
        ),
        'id' => array(
            14, 15, 16, 17
        ),
        'type' => 'dropdown'
    ),
    array(
        'title' => '安全',
        'id' => 18
    ),
    array(
        'title' => '免责条款',
        'id' => 19
    ),
    array(
        'title' => '重点商务问题汇总',
        'id' => 20
    ),
    array(
        'title' => '重点技术开发问题汇总',
        'id' => 21
    ),
    array(
        'title' => '邮件&电话&微信沟通界面',
        'id' => 22
    )
);
sideBarTemplate($args);
?>
