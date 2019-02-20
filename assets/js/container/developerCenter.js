/**
 * Copyright: Copyright (C) 2018 sitb.software,All Rights Reserved
 * author: HJF(2283785225@qq.com)
 * date: 2019/2/15
 */

/**
 * 导出SideBar模版
 * @returns {*}
 * @constructor
 */
function SideBarTemplate() {
    var dataSource = [{
        title: '概述和基础',
        config: [{
            subtitle: '产品介绍',
            id: 16
        }, {
            subtitle: '商务接入流程',
            id: 17
        }, {
            subtitle: '接入的产品能够解决怎样的问题',
            id: 18
        }],
        type: 'dropDown'
    }, {
        title: '接入',
        config: [{
            subtitle: '注册信息修改',
            id: 11
        }],
        type: 'dropDown'
    }, {
        title: '调试',
        config: [{
            subtitle: '参数的配置',
            id: 13
        }],
        type: 'dropDown'
    }, {
        title: '论坛',
        config: [{
            subtitle: '支付通道标准费用',
            id: 14
        }],
        type: 'dropDown'
    }, {
        title: '其他',
        id: 15
    }];
    return generateTemplate(sideBarInnerHtml(dataSource));
}
$('#myTab2').html(SideBarTemplate());