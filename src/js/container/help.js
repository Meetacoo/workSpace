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
        title: '开始使用',
        config: [{
            subtitle: '产品介绍',
            id: 1
        }, {
            subtitle: '商务接入流程',
            id: 2
        }, {
            subtitle: '接入的产品能够解决怎样的问题',
            id: 3
        }, {
            subtitle: '初步接入过程中需注意的关键点',
            id: 4
        }],
        type: 'dropDown'
    }, {
        title: '账户管理/管理平台',
        config: [{
            subtitle: '注册信息修改',
            id: 5
        }, {
            subtitle: '账户查询',
            id: 6
        }, {
            subtitle: '数据服务',
            id: 7
        }, {
            subtitle: '订单查询',
            id: 8
        }],
        type: 'dropDown'
    }, {
        title: '接入开发',
        config: [{
            subtitle: '参数的配置',
            id: 9
        }, {
            subtitle: '报错数据查询',
            id: 10
        }, {
            subtitle: '返回码汇总',
            id: 11
        }, {
            subtitle: '接入流程问题',
            id: 12
        }, {
            subtitle: '其他常见问题',
            id: 13
        }],
        type: 'dropDown'
    }, {
        title: '费用',
        config: [{
            subtitle: '支付通道标准费用',
            id: 14
        }, {
            subtitle: '我司收费',
            id: 15
        }, {
            subtitle: '关于发票',
            id: 16
        }, {
            subtitle: '其他',
            id: 17
        }],
        type: 'dropDown'
    }, {
        title: '安全',
        id: 18
    }, {
        title: '免责条款',
        id: 19
    }, {
        title: '重点商务问题汇总',
        id: 20
    }, {
        title: '重点技术开发问题汇总',
        id: 21
    }, {
        title: '邮件&电话&微信沟通界面',
        id: 22
    }];
    return generateTemplate(sideBarInnerHtml(dataSource));
}
$('#myTab').html(SideBarTemplate());