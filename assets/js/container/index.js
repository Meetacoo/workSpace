/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/11
 */

// 产品核心优势配置
var coreConfig = {
    title: '核心实力',
    subtitle: 'Core strength',
    config: [{
        label: '多样化支付解决方案',
        value: '兼容微信、支付宝等市场主流支付工具,为50万中小企业提供一体化的O2O金融服务。',
        icon: 'icon-profits'
    }, {
        label: '8年系统安全运营保障',
        value: '国内领先的金融系统安全保障，历经八年线上线下数千亿元的业务规模考验。',
        icon: 'icon-money-1'
    }, {
        label: '全国渠道掌控',
        value: '积累了17年渠道合作经验，近600个全国一级二级代理商，2万多个全国经销网点。',
        icon: 'icon-coin'
    }, {
        label: '全牌照覆盖',
        value: '拥有全国性线上/线下支付和预付费卡牌照人民币外汇结算牌照，小贷牌照。',
        icon: 'icon-smartphone-1'
    }, {
        label: '实时清结算',
        value: '专人后台对账，对客户交易进行清结算操作，资金到账快人一步',
        icon: 'icon-diamond'
    }, {
        label: '支付服务',
        value: '我们的解决方案能够为客户提供无缝、便捷及安全的支付方式',
        icon: 'icon-piggy-bank'
    }]
};
var productionConfig = {
    title: '核心产品',
    subtitle: 'Core production',
    config: [{
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-1.png',
        label: '聚合支付',
        value: '实现全渠道支付接入，也可以在已有支付方式上叠加其他支付通道，延伸原有机具业务场景，快速实现全渠道支付'
    }, {
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-2.png',
        label: '互联网支付',
        value: '基于PC平台的网上系统对接和部署，使商户能够通过银行卡和数字钱包在互联网上完成支付交易'
    }, {
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-3.png',
        label: '数据查询',
        value: '提供商户入网、商户管理、交易数据查询、对账报表下载等功能'
    }, {
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-1.png',
        label: '会员账户系统',
        value: '基于账户提供充值、提现、担保交易、订单分账等服务，为企业解决业务合规性、用户管理、账户管理、安全保障等问题'
    }, {
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-3.png',
        label: '预付费卡系统',
        value: '多用途便民预付消费卡，持卡人可在签约商户进行刷卡消费，是企事业单位商务往来、福利发放、礼品馈赠的上乘佳品'
    }, {
        href: '#',
        src: 'http://localhost/wordpress/wp-content/themes/difu-web/assets/img/production/about-icon-2.png',
        label: '代收代付系统',
        value: '向已授权的账户发起实时或批量的收付费指令，能够安全、准确地完成收付费单位发起的委托收款、付款指令'
    }]
};

$('#core').html((CoreTemplate(coreConfig)));
$('#production').html((ProductionTemplate(productionConfig)));
$('#partner').html((PartnerTemplate()));
$(".logo-carousel").owlCarousel({
    loop: true,
    nav: false,
    margin: 30,
    autoplay: true,
    autoplayspeed: 1000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});

var indexLinkConfig = {
    linkTo: 'http://localhost/wordpress/joinUs',
    title: '加入我们',
    button: '申请加入',
    description: '你还在犹豫什么？加入我们，享受豪华套餐。'
};
$('#indexLink').html((welcomeBannerTemplate(indexLinkConfig)));