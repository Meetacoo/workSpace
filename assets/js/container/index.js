/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/11
 */

//
$(function () {
    // 获取url /后的地址string
    var $nowHref = window.location.href.split('/').pop();
    console.log($nowHref);
    // 根据-截取字符串
    var $nowHrefLink = $nowHref.split('-')[0];
    $('.classynav .nav-link').each(function () {
        var $this = $(this);
        var $thisHref = $this.attr('href');
        // 判断url是否相同，或者包含url（子页面）
        if ($thisHref === $nowHref || $thisHref.indexOf($nowHrefLink) > -1) {
            $this.addClass('active');
            $this.siblings('a').removeClass('active');
        }
    });
});