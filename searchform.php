<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/27
 * Time: 10:03
 */
?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <input class="searchInput" type="search" name="search" placeholder="输入关键字" name="s" id="s"/>
    <button type="submit" onClick="if(document.forms['search'].searchinput.value=='- Search -')document.forms['search'].searchinput.value='';" alt="Search">搜索</button>
</form>

<script type="text/javascript">
    $(document).ready(function(){
// 当鼠标聚焦在搜索框
        $('#s').focus(
            function() {
                if($(this).val() == '输入关键字') {
                    $(this).val('').css({color:"#454545"});
                }
            }
// 当鼠标在搜索框失去焦点
        ).blur(
            function(){
                if($(this).val() == '') {
                    $(this).val('输入关键字').css({color:"#333333"});
                }
            }
        );
    });
</script>