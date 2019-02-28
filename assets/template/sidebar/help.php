<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/22
 * Time: 18:55
 */
?>
<?php
$homeUri = get_site_url();
$args = array(
    array(
        'menu' => '商户接口',
        'href' => $homeUri.'/help/common-merchant',
    ),
    array(
        'menu' => '代收支付',
        'href' => $homeUri.'/help/common-collectingpayment',
    ),
    array(
        'menu' => '快捷支付',
        'href' => $homeUri.'/help/common-quickpay',
    ),
    array(
        'menu' => '移动支付',
        'href' => $homeUri.'/help/common-mpayment',
    ),
    array(
        'menu' => '鉴权',
        'href' => $homeUri.'/help/common-authentication',
    ),
    array(
        'menu' => '网关',
        'href' => $homeUri.'/help/common-gateway',
    )
);
sideBarTemplate($args);
?>
