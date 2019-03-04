<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/3/1
 * Time: 9:20
 */

$homeUri = get_site_url();
$args = array(
    array(
        'menu' => '研发',
        'submenu' => array(
            'Java中级 [ 上海 ]',
            '测试工程师 [ 上海 ]',
            '网络工程师 [ 上海 ]',
            '前端开发 [ 上海 ]'
        ),
        'navId' => 'tab--1',
        'href' => 'tab1',
        'dataParent' => 'accordionOne',
        'ariaControls' => array(
            'r-java',
            'r-test',
            'r-network',
            'r-web',
        )
    ),
    array(
        'menu' => '销售',
        'submenu' => array(
            '助理 [ 上海 ]',
            '销售助理 [ 上海 ]',
            '实习生 [ 上海 ]'
        ),
        'navId' => 'tab--2',
        'href' => 'tab2',
        'dataParent' => 'accordionTwo',
        'ariaControls' => array(
            'sell-aid',
            'sell-sales-assistant',
            'sell-intern',
        ),
        'state' => 'active'
    ),
    array(
        'menu' => '职能',
        'submenu' => array(
            '总裁助理 [ 上海 ]',
            '综管助理 [ 上海 ]'
        ),
        'navId' => 'tab--3',
        'href' => 'tab3',
        'dataParent' => 'accordionThree',
        'ariaControls' => array(
            'function-assistant-president',
            'function-integrated-aid'
        )
    )
);
?>
<div class="credit-tabs-content mt-50 mb-50">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach ($args as $key => $value) { ?>
                <?php if ($value["state"]) { ?>
                    <li class="nav-item col-4 col-sm-4 col-md-4 col-lg-4">
                        <a class="nav-link <?php echo $value["state"] ?>" id="<?php echo $value["navId"] ?>"
                           data-toggle="tab"
                           href="#<?php echo $value["href"]; ?>" role="tab"
                           aria-controls="<?php echo $value["href"]; ?>"
                           aria-selected="false"><?php echo $value["menu"] ?></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item col-4 col-sm-4 col-md-4 col-lg-4">
                        <a class="nav-link" id="<?php echo $value["navId"] ?>" data-toggle="tab"
                           href="#<?php echo $value["href"]; ?>" role="tab"
                           aria-controls="<?php echo $value["href"]; ?>"
                           aria-selected="false"><?php echo $value["menu"] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
        <div class="tab-content" id="myTabContent">
            <?php foreach ($args

            as $key => $value) {
            if ($value["state"]) { ?>
            <div class="tab-pane fade show active" id="<?php echo $value["href"]; ?>" role="tabpanel"
                 aria-labelledby="<?php echo $value["navId"]; ?>">
                <?php } else { ?>
                <div class="tab-pane fade" id="<?php echo $value["href"]; ?>" role="tabpanel"
                     aria-labelledby="<?php echo $value["navId"]; ?>">
                    <?php } ?>
                    <div class="credit-tab-content">
                        <!-- Single News Area -->
                        <div class="col-12">
                            <div class="accordions mb-100" id="<?php echo $value["dataParent"]; ?>" role="tablist"
                                 aria-multiselectable="true">
                                <!-- single accordian area -->
                                <?php foreach ($value["ariaControls"] as $key => $ariaControls) { ?>
                                    <div class="panel single-accordion">
                                        <h6><a class="collapsed" href="<?php echo $homeUri.'/joinUs/'.$ariaControls; ?>" target="_blank">
                                                <?php echo $value["submenu"][$key] ?>
                                            </a></h6>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


