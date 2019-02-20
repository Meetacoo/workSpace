/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/13
 */

$('#partner').html(PartnerTemplate());
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
new fullpage('#fullpage', {
    licenseKey: '263DXXXX-B839XXXX-AE67XXXX-F398XXXX',
    navigation: true,
    verticalCentered: false,
    showActiveTooltip: false,
    slidesNavigation: true,
    navigationTooltips: ['简介', '核心', '实例', '']
});