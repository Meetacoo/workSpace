<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/25
 * Time: 10:14
 */
?>
<?php
$homeUri = get_site_url();
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
            $homeUri.'/developerCenter/basic-merchant',
            $homeUri.'/developerCenter/basic-collectingpayment',
            $homeUri.'/developerCenter/basic-quickpay',
            $homeUri.'/developerCenter/basic-mpayment',
            $homeUri.'/developerCenter/basic-authentication',
            $homeUri.'/developerCenter/basic-gateway'
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
            $homeUri.'/developerCenter/guide-merchant',
            $homeUri.'/developerCenter/guide-collectingpayment',
            $homeUri.'/developerCenter/guide-quickpay',
            $homeUri.'/developerCenter/guide-mpayment',
            $homeUri.'/developerCenter/guide-authentication',
            $homeUri.'/developerCenter/guide-gateway'
        ),
        'type' => '/developerCenter/dropdown'
    ),
    array(
        'menu' => 'DEMO下载',
        'href' => $homeUri.'demo',
    )
);
sideBarTemplate($args);
?>