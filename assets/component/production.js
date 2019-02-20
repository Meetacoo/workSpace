/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 * 产品快速接入通道
 */

/**
 * 核心产品展示 快速接入通道字符串模版
 * @param dataSource
 * @returns {string}
 */
function productionInnerHtml(dataSource) {
    var Default_Html = '';
    var config = dataSource.config;
    for (var i = 0; i < config.length; i++) {
        Default_Html += '<div class="col-lg-4 top-contact-info">\n' +
            '                <a href="' + config[i].href + '" class="single-about" data-toggle="tooltip" data-placement="top" title="点击查看详细">\n' +
            '                    <div class="single-about-img">\n' +
            '                        <img src="' + config[i].src + '" alt="">\n' +
            '                    </div>\n' +
            '                    <div class="single-about-text">\n' +
            '                        <h4>' + config[i].label + '</h4>\n' +
            '                        <p>' + config[i].value + '</p>' +
            '                    </div>\n' +
            '                </a>\n' +
            '            </div>';
    }
    return '<div class="single-about-area wow fadeInUp">\n' +
        '    <div class="container">\n' +
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
        '        <div class="row">' + Default_Html + '</div>' +
        '    </div>' +
        '  </div>';
}

/**
 * 导出核心产品 模版
 * @param dataSource 数据格式为 [subtitle: string, title: string, config:{href: string, src: string, label: string, value: string}]
 * @returns {*}
 * @constructor
 */
function ProductionTemplate(dataSource) {
    return generateTemplate(productionInnerHtml(dataSource));
}