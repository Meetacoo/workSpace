/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/11
 */

/**
 * loading 字符串模版
 * @returns {string}
 */
function preloaderInnerHtml() {
    return '    <div class="preloader d-flex align-items-center justify-content-center">\n' +
        '        <div class="lds-ellipsis">\n' +
        '            <div></div>\n' +
        '            <div></div>\n' +
        '            <div></div>\n' +
        '            <div></div>\n' +
        '        </div>\n' +
        '    </div>';
}

/**
 * 导出模版
 * @returns {*}
 * @constructor
 */
function PreloaderTemplate() {
    return generateTemplate(preloaderInnerHtml());
}