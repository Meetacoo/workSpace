/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 */
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