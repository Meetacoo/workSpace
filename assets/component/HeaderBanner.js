/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/13
 */

/**
 * headerBanner 字符串模版
 * @param dataSource   类型结构为{src: string, title: string, description: string}
 * @returns {string}
 */
function headerBannerInnerHtml(dataSource) {
    return '<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(' + dataSource.src + ');">\n' +
        '    <div class="container h-100">\n' +
        '        <div class="row h-100 align-items-center">\n' +
        '            <div class="col-12">\n' +
        '                <div class="breadcrumb-content">\n' +
        '                    <h2>' + dataSource.title + '</h2>\n' +
        '                    <p class="header-intro">' + dataSource.description + '</p>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</section>'
}

/**
 * 导出头部广告 模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function HeaderBannerTemplate(dataSource) {
    return generateTemplate(headerBannerInnerHtml(dataSource));
}