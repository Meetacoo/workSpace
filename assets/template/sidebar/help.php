<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/22
 * Time: 18:55
 */
?>
<?php
$uri = 'http://localhost/wordpress/help/';
$args = array(
    array(
        'menu' => '商户接口',
        'href' => $uri.'common-merchant',
    ),
    array(
        'menu' => '代收支付',
        'href' => $uri.'common-collectingpayment',
    ),
    array(
        'menu' => '快捷支付',
        'href' => $uri.'common-quickpay',
    ),
    array(
        'menu' => '移动支付',
        'href' => $uri.'common-mpayment',
    ),
    array(
        'menu' => '鉴权',
        'href' => $uri.'common-authentication',
    ),
    array(
        'menu' => '网关',
        'href' => $uri.'common-gateway',
    )
);
sideBarTemplate($args);
?>
