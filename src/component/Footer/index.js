/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: yangyao(873241789@qq.com)
 * date: 2019/2/12
 */

/**
 * 生成footer list item字符串模版
 * @param dataSource  格式为{href: string, title: string}
 * @returns {string}
 */
function FooterListItemInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    for (var i = 0; i < dataSource.length; i++) {
        var href = dataSource[i].href || '#';
        Default_InnerHtml += '<li><a href="' + href + '">' + dataSource[i].subtitle + '</a></li>';
    }
    return '<nav>\n' +
        '       <ul>\n' +
        Default_InnerHtml +
        '       </ul>\n' +
        '   </nav>';
}

/**
 * 生成产品item 字符串模版
 * @param dataSource  格式为{href: string, title: string, description: string}
 * @returns {string}
 */
function FooterListItemProductInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    for (var i = 0; i < dataSource.length; i++) {
        var href = dataSource[i].href || '#';
        Default_InnerHtml += '<div class="single-latest-news-area d-flex align-items-center">\n' +
            '                        <div class="news-thumbnail">\n' +
            '                            <img src="src/img/bg-img/8.jpg" alt="">\n' +
            '                        </div>\n' +
            '                        <div class="news-content">\n' +
            '                            <a href="' + href + '">' + dataSource[i].subtitle + '</a>\n' +
            '                            <div class="news-meta">\n' +
            '                                <a href="#" class="post-date"><img src="src/img/core-img/pencil.png" alt="">' + dataSource[i].description + '</a>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>';
    }
    return Default_InnerHtml;
}

/**
 * 页脚list 字符串模版
 * @param dataSource
 * @returns {string}
 * @constructor
 */
function FooterListInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    for (var i = 0; i < dataSource.length; i++) {
        var Default_Item = FooterListItemTemplate(dataSource[i].config);
        if (dataSource[i].type === 'production') {
            Default_Item = FooterListItemProductTemplate(dataSource[i].config);
        }
        Default_InnerHtml += '<div class="col-12 col-sm-6 col-lg-3">\n' +
            '                    <div class="single-footer-widget mb-100">\n' +
            '                        <h5 class="widget-title">' + dataSource[i].title + '</h5>\n' +
            Default_Item +
            '                    </div>\n' +
            '                </div>';
    }
    return Default_InnerHtml;
}

/**
 * 页脚字符串模版
 * @param dataSource  数据结构为[{title: string, config: array<object>, type: 'production'}]
 * @returns {string}
 */
function footerInnerHtml(dataSource) {
    // 获取当前年份 设置版权信息
    var year = new Date().getFullYear();
    var copyRight = 'Copyright &copy;' + year + 'All rights reserved | 上海迪付金融有限公司.';
    return '<footer class="footer-area section-padding-100-0">\n' +
        '    <div class="container">\n' +
        '        <div class="row">\n' + FooterListTemplate(dataSource) + '</div>\n' +
        '    </div>\n' +
        '    <!-- Copywrite Area -->\n' +
        '    <div class="copywrite-area">\n' +
        '        <div class="container">\n' +
        '            <div class="row">\n' +
        '                <div class="col-12">\n' +
        '                    <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">\n' +
        '                        <!-- Footer Logo -->\n' +
        '                        <a href="index.html" class="footer-logo"><img src="src/img/core-img/logo.png" alt=""></a>\n' +
        '                        <!-- Copywrite Text -->\n' +
        '                        <p class="copywrite-text">' + copyRight + '</p>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</footer>\n';
}

/**
 * 导出字符串模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function FooterListItemTemplate(dataSource) {
    return generateTemplate(FooterListItemInnerHtml(dataSource));
}

/** 导出 重要产品字符串模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function FooterListItemProductTemplate(dataSource) {
    return generateTemplate(FooterListItemProductInnerHtml(dataSource));
}

/**
 * 导出 页脚list模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function FooterListTemplate(dataSource) {
    return generateTemplate(FooterListInnerHtml(dataSource));
}

/**
 * 导出footer模版
 * @returns {*}
 * @constructor
 */
function FooterTemplate() {
    var dataSource = [{
        title: '文档 & 技术支持',
        config: [{
            subtitle: '开发者中心'
        }, {
            subtitle: '开发指南'
        }, {
            subtitle: '接口&技术文档'
        }, {
            subtitle: '下载'
        }]
    }, {
        title: '帮助中心',
        config: [{
            subtitle: '搜索',
        }]
    }, {
        title: '公司情况',
        config: [{
            subtitle: '关于我们'
        }, {
            subtitle: '联系我们'
        }, {
            subtitle: '招聘'
        }, {
            subtitle: '合作'
        }, {
            subtitle: '免责条款'
        }]
    }, {
        title: '产品列表',
        config: [{
            subtitle: '重点产品1',
            description: '.......'
        }, {
            subtitle: '重点产品2',
            description: '.......'
        }, {
            subtitle: '重点产品3',
            description: '.......'
        }],
        type: 'production'
    }];
    return generateTemplate(footerInnerHtml(dataSource));
}