/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 */

/**
 * 合作伙伴 字符串模版
 * @param dataSource
 * @returns {string}
 */
function partnerInnerHtml(dataSource) {
    var Default_Html = '';
    for (var i = 0; i < dataSource.length; i++) {
        Default_Html += '<div class="single-logo-wrapper">\n' +
            '                        <div class="single-item">\n' +
            '                            <img src="' + dataSource[i].src + '" alt="">\n' +
            '                        </div>\n' +
            '            </div>';
    }
    return '<div class="about-area">\n' +
        '    <div class="space-30"></div>\n' +
        '    <div>\n' +
        '        <div class="row">\n' +
        '            <div class="col-12 text-center">\n' +
        '                <div class="heading">\n' +
        '                    <h5>海量金融客户选择迪付</h5>\n' +
        '                </div>\n' +
        '                <div class="space-30"></div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        <div class="row box-model">\n' +
        '            <div class="col-lg-12">\n' +
        '                <div class="logo-carousel owl-carousel text-center">' + Default_Html + ' </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</div>\n'
}

/**
 * 导出 合作伙伴模版
 * @returns {*}
 * @constructor
 */
function PartnerTemplate() {
    var config = [{
        src: 'src/img/logo/c-logo-1.png'
    }, {
        src: 'src/img/logo/c-logo-2.png'
    }, {
        src: 'src/img/logo/c-logo-3.png'
    }, {
        src: 'src/img/logo/c-logo-4.png'
    }, {
        src: 'src/img/logo/c-logo-5.png'
    }, {
        src: 'src/img/logo/c-logo-1.png'
    }];
    return generateTemplate(partnerInnerHtml(config));
}