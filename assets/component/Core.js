/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 */

/**
 * 核心展示item 字符串模版
 * @param dataSource  结构为{title: string, subtitle: string, config: {icon: string, label: string, value: string}}
 * @returns {string}
 */
function coreInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    var config = dataSource.config;
    for (var i = 0; i < config.length; i++) {
        Default_InnerHtml += '<div class="col-12 col-md-6 col-lg-4">\n' +
            '                <div class="single-service-area d-flex mb-100">\n' +
            '                    <div class="icon">\n' +
            '                        <i class="' + config[i].icon + '"></i>\n' +
            '                    </div>\n' +
            '                    <div class="text">\n' +
            '                        <h5>' + config[i].label + '</h5>\n' +
            '                        <p>' + config[i].value + '</p>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>';
    }
    return '<section class="services-area section-padding-100-0">\n' +
        '    <div class="container">' +
        '        <div class="row">\n' +
        '            <div class="col-12">\n' +
        '                <!-- Section Heading -->\n' +
        '                <div class="section-heading text-center mb-100">\n' +
        '                    <div class="line"></div>\n' +
        '                    <p>' + dataSource.subtitle + '</p>\n' +
        '                    <h2>' + dataSource.title + '</h2>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>' +
        '        <div class="row">' + Default_InnerHtml + ' </div>' +
        '    </div>' +
        '   </section>'
}

/**
 * 导出核心展示 模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function CoreTemplate(dataSource) {
    return generateTemplate(coreInnerHtml(dataSource));
}