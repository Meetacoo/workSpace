/**
 * welcomeBanner 字符串模版
 * @param dataSource   类型结构为{linkTo： string，button: string, title: string, description: string}
 * @returns {string}
 */
function welcomeBannerInnerHtml(dataSource) {
    return '<section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(wp-content/themes/difu-web/assets/img/bg-img/6.jpg);">\n' +
        '    <div class="container">\n' +
        '        <div class="row justify-content-center">\n' +
        '            <div class="col-12 col-sm-10 col-lg-8">\n' +
        '                <div class="nl-content text-center">\n' +
        '                    <h2>' + dataSource.title + '</h2>\n' +
        '                    <a href="' + dataSource.linkTo + '">' + dataSource.button + '</a>\n' +
        '                    <p>' + dataSource.description + '</p>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</section>'
}

/**
 * 导出底部链接部分 模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function welcomeBannerTemplate(dataSource) {
    return generateTemplate(welcomeBannerInnerHtml(dataSource));
}