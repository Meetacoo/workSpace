<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 10:14
 */
?>
<?php
$uri = 'http://localhost/wordpress/developerCenter/';
$args = array(
    array(
        'menu' => '概述和基础',
        'submenu' => array(
            '商户接口',
            '代收支付',
            '快捷支付',
            '移动支付',
            '鉴权',
            '网关'
        ),
        'href' => array(
            $uri.'basic-merchant',
            $uri.'basic-collectingpayment',
            $uri.'basic-quickpay',
            $uri.'basic-mpayment',
            $uri.'basic-authentication',
            $uri.'basic-gateway'
        ),
        'type' => 'dropdown'
    ),
    array(
        'menu' => '接入指南',
        'submenu' => array(
            '商户接口',
            '代收支付',
            '快捷支付',
            '移动支付',
            '鉴权',
            '网关'
        ),
        'href' => array(
            $uri.'guide-merchant',
            $uri.'guide-collectingpayment',
            $uri.'guide-quickpay',
            $uri.'guide-mpayment',
            $uri.'guide-authentication',
            $uri.'guide-gateway'
        ),
        'type' => 'dropdown'
    ),
    array(
        'menu' => 'DEMO下载',
        'href' => $uri.'demo',
    )
);
sideBarTemplate($args);
?>