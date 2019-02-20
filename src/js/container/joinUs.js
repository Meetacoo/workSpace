/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: HJF(2283785225@qq.com)
 * date: 2019/2/13
 */
var bannerConfig = {
    src: 'src/img/bg-img/bg_17.jpg',
    title: '加入我们一起创造辉煌',
    description: '如果你也有理想并且对金融感兴趣、期待奋斗出自己的一片天地，那么就加入我们吧，我们将满含热情期待你的加入！'
};
$('#joinUsBanner').html((HeaderBannerTemplate(bannerConfig)));

var welcomeConfig = {
    linkTo: 'joinUs.html',
    title: '加入我们',
    button: '申请加入',
    description: '如果你也有理想并且对金融感兴趣、期待奋斗出自己的一片天地，那么就加入我们吧，我们将满含热情期待你的加入！'
};
$('#joinUsWelcome').html((welcomeBannerTemplate(welcomeConfig)));