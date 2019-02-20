/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 */
// 产品核心优势配置
var coreConfig = {
    title: '我们的优势',
    subtitle: 'Our advantage',
    config: [{
        label: '多通道支持',
        value: '对接银联和网联，支持借记卡和信用卡，支付成功率高，服务稳定',
        icon: 'icon-profits'
    }, {
        label: '定制化服务',
        value: '根据客户情况量身打造定制化解决方案，专业技术团队7x24小时服务',
        icon: 'icon-money-1'
    }, {
        label: '全平台接入',
        value: '支持APP、HTML5、WAP、PC、SDK等方式的快速接入，专人高效对接',
        icon: 'icon-coin'
    }, {
        label: '多维度风控',
        value: '完备的内外部风控系统共同发力，7x24小时全天候保障商户交易安全',
        icon: 'icon-smartphone-1'
    }, {
        label: '实时清结算',
        value: '专人后台对账，对客户交易进行清结算操作，资金到账快人一步',
        icon: 'icon-diamond'
    }, {
        label: '大客户服务',
        value: '成立大客户项目组，紧密配合开发接口、后台运维，保证VIP用户体验',
        icon: 'icon-piggy-bank'
    }]
};
var productionConfig = {
    title: '核心产品',
    subtitle: 'Core production',
    config: [{
        href: 'production-detailed.html',
        src: 'src/img/production/about-icon-1.png',
        label: '聚合支付',
        value: '实现全渠道支付接入，也可以在已有支付方式上叠加其他支付通道，延伸原有机具业务场景，快速实现全渠道支付'
    }, {
        href: '#',
        src: 'src/img/production/about-icon-2.png',
        label: '互联网支付',
        value: '基于PC平台的网上系统对接和部署，使商户能够通过银行卡和数字钱包在互联网上完成支付交易'
    }, {
        href: '#',
        src: 'src/img/production/about-icon-3.png',
        label: '数据查询',
        value: '提供商户入网、商户管理、交易数据查询、对账报表下载等功能'
    }, {
        href: '#',
        src: 'src/img/production/about-icon-1.png',
        label: '会员账户系统',
        value: '基于账户提供充值、提现、担保交易、订单分账等服务，为企业解决业务合规性、用户管理、账户管理、安全保障等问题'
    }, {
        href: '#',
        src: 'src/img/production/about-icon-3.png',
        label: '预付费卡系统',
        value: '多用途便民预付消费卡，持卡人可在签约商户进行刷卡消费，是企事业单位商务往来、福利发放、礼品馈赠的上乘佳品'
    }, {
        href: '#',
        src: 'src/img/production/about-icon-2.png',
        label: '代收代付系统',
        value: '向已授权的账户发起实时或批量的收付费指令，能够安全、准确地完成收付费单位发起的委托收款、付款指令'
    }]
};
$('#core').html((CoreTemplate(coreConfig)));
$('#production').html((ProductionTemplate(productionConfig)));
// banner
var bannerConfig = {
    src: 'src/img/bg-img/bg_21.jpg',
    title: '产品介绍',
    description: '上海迪付金融信息服务有限公司拥有业界一流的优质服务和产品。'
};

$('#productionBanner').html((HeaderBannerTemplate(bannerConfig)));

var productionLinkConfig = {
    linkTo: 'pricing.html',
    title: '想了解更多产品？',
    button: '查看产品定价',
    description: '我们将以最大的诚信、最饱满的热情与您达成合作。'
};
$('#productionLink').html((welcomeBannerTemplate(productionLinkConfig)));