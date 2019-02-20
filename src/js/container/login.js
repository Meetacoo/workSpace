(function ($) {
    "use strict";

    var input = $('.validate-input .input100');

    /**
     * 注册表单正则验证
     */
    $('.register-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        if ($('.register-pwd').val() !== $('.register-rePwd').val()) {
            alert('两次密码不一致，请检查后重新输入');
            check = false;
        }
        return check;
    });

    /**
     * 重置表单正则验证
     */
    $('.reset-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        if ($('.register-pwd').val() !== $('.register-rePwd').val()) {
            alert('两次密码不一致，请检查后重新输入');
            check = false;
        }
        return check;
    });
    /**
     * 登录表单正则验证
     */
    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        return check;
    });

    /**
     * 隐藏提示语句
     */
    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });
    $('.register-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });
    $('.reset-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'number' || $(input).attr('name') == 'number') {
            if ($(input).val().trim().match(/^1[3456789][0-9]{9}$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /**
     * 隐藏所有表单的提示信息
     */
    function hideAllValidate() {
        $('.validate-form .input100').each(function () {
            hideValidate(this);
        });
        $('.register-form .input100').each(function () {
            hideValidate(this);
        });
        $('.reset-form .input100').each(function () {
            hideValidate(this);
        });
    }

    $('.login').click(function () {
        hideAllValidate();
        $('.validate-form').animate({height: "toggle", display: "siblings"}, "slow");
        $('.register-form').css("display", "none");
        $('.reset-form').css("display", "none");
    });
    $('.register').click(function () {
        hideAllValidate();
        $('.register-form').animate({height: "toggle", display: "siblings"}, "slow");
        $('.validate-form').css("display", "none");
        $('.reset-form').css("display", "none");
    });
    $('.resetPwd').click(function () {
        hideAllValidate();
        $('.reset-form').animate({height: "toggle", display: "siblings"}, "slow");
        $('.register-form').css("display", "none");
        $('.validate-form').css("display", "none");
    });


})(jQuery);