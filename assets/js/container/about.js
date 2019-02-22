/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/13
 */
$(".roadmap-carousel").owlCarousel({
    loop: true,
    nav: true,
    margin: 30,
    autoplay: true,
    autoplayspeed: 1000,
    navText: ['<i class="fa fa-long-arrow-left nav-left-model">', '<i class="fa fa-long-arrow-right nav-right-model">'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
