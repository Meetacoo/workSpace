/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: HJF(2283785225@qq.com)
 * date: 2019/2/13
 */
var bannerConfig = {
    src: 'wp-content/themes/difu-web/assets/img/bg-img/bg_19.jpg',
    title: '请联系我们并留下您宝贵的建议',
    description: '目前，上海迪付金融信息服务有限公司业务网络遍及上海、逐步形成向全国其他省市辐射的趋势！已为许多客户提供了优质服务，用心赢得了众多企业的信赖和好评，在上海地区逐渐树立起良好品牌形象。'
};
$('#industrySolutionBanner').html((HeaderBannerTemplate(bannerConfig)));

var industrySolutionMoreConfig = {
    linkTo: 'wp-content/themes/difu-web/industrySolution.php',
    title: '想了解更多解决方案？',
    button: '更多解决方案',
    description: '如果您想了解更多关于我们的解决方案请点击上方按钮。'
};
$('#industrySolutionMore').html((welcomeBannerTemplate(industrySolutionMoreConfig)));