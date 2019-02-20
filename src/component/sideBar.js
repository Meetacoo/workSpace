/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: HJF(2283785225@qq.com)
 * date: 2019/2/15
 */

/**
 * 生成sideBar list item字符串模版
 * @param dataSource  格式为{title: string, id: number}
 * @returns {string}
 */
function SideBarListItemInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    var id = '';
    var result = [];
    for (var i = 0; i < dataSource.length; i++) {
        if (!dataSource[i].config) {
            id = parseInt(dataSource[i].id);
            Default_InnerHtml += '<li class="main-nav-list">\n' +
                '    <a class="nav-link" id="tab--' + id + '" data-toggle="tab" href="#tab' + id + '" role="tab"\n' +
                '       aria-controls="tab' + id + '" aria-selected="false">' + dataSource[i].title + '</a>\n' +
                '</li>';
        }
        result.push(Default_InnerHtml);
    }
    return Default_InnerHtml;
}

/**
 * 生成产品item 字符串模版
 * @param dataSource  格式为{subtitle: string, id: number}
 * @returns {string}
 */
function SideBarListItemDropDownInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    var id = '';
    for (var i = 0; i < dataSource.length; i++) {
        id = dataSource[i].id;
        Default_InnerHtml += '<a class="nav-link" id="tab--' + id + '" data-toggle="tab" href="#tab' + id + '" role="tab"\n' +
            '   aria-controls="tab' + id + '" aria-selected="false">' + dataSource[i].subtitle + '</a>';
    }
    return Default_InnerHtml;
}

/**
 * 侧边栏 list 字符串模版
 * @param dataSource
 * @returns {title:string, config:array, type:string}
 * @constructor
 */
function SideBarListInnerHtml(dataSource) {
    var Default_InnerHtml = '';
    var Default_Item = SideBarListItemTemplate(dataSource);
    for (var i = 0; i < dataSource.length; i++) {
        if (dataSource[i].type === 'dropDown') {
            Default_Item = SideBarListItemDropDownTemplate(dataSource[i].config);
            Default_InnerHtml += '<li class="main-nav-list dropdown">\n' +
                '                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"\n' +
                '                       aria-haspopup="true" aria-expanded="false">' + dataSource[i].title + '</a>\n' +
                '                    <div class="dropdown-menu">\n' +
                Default_Item +
                '                    </div>\n' +
                '                </li>';
        }
    }
    Default_InnerHtml += SideBarListItemTemplate(dataSource);
    return Default_InnerHtml;
}

/**
 * 侧边栏字符串模版
 * @param dataSource
 * @returns {*}
 */
function sideBarInnerHtml(dataSource) {
    return SideBarListTemplate(dataSource);
}


/**
 * 导出字符串模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function SideBarListItemTemplate(dataSource) {
    return generateTemplate(SideBarListItemInnerHtml(dataSource));
}

/** 导出 下拉菜单字符串模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function SideBarListItemDropDownTemplate(dataSource) {
    return generateTemplate(SideBarListItemDropDownInnerHtml(dataSource));
}

/**
 * 导出 不是下拉的普通菜单模版
 * @param dataSource
 * @returns {*}
 * @constructor
 */
function SideBarListTemplate(dataSource) {
    return generateTemplate(SideBarListInnerHtml(dataSource));
}