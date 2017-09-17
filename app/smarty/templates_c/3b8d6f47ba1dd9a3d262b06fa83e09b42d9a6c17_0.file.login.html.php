<?php
/* Smarty version 3.1.31, created on 2017-09-17 21:47:54
  from "C:\laragon\www\vkphp\app\smarty\templates\bookmark\user\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59be7d0af0e6b0_44606537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b8d6f47ba1dd9a3d262b06fa83e09b42d9a6c17' => 
    array (
      0 => 'C:\\laragon\\www\\vkphp\\app\\smarty\\templates\\bookmark\\user\\login.html',
      1 => 1505656071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59be7d0af0e6b0_44606537 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
/css/login.css">
    <title>买家登录注册</title>
</head>

<body>
    <h1>
        买家登录注册
    </h1>
    <div class="login" style="margin-top:50px;">
        <div class="header">
            <div class="switch" id="switch">
                <a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);"
                tabindex="7">
                    快速登录
                </a>
                <a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">
                    快速注册
                </a>
                <div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;">
                </div>
            </div>
        </div>
        <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">
            <!--登录-->
            <div class="web_login" id="web_login">
                <div class="login-box">
                    <div class="login_form">
                        <form action="" name="loginform" accept-charset="utf-8" id="login_form"
                        class="loginForm" method="post">
                            <div class="uinArea" id="uinArea">
                                <label class="input-tips" for="username">
                                    帐号：
                                </label>
                                <div class="inputOuter" id="uArea">
                                    <input type="text" name="username" class="inputstyle" />
                                </div>
                            </div>
                            <div class="pwdArea" id="pwdArea">
                                <label class="input-tips" for="password">
                                    密码：
                                </label>
                                <div class="inputOuter" id="pArea">
                                    <input type="password" name="password" class="inputstyle" />
                                </div>
                            </div>
                            <div style="padding-left:50px;margin-top:20px;">
                                <input type="submit" value="登 录" style="width:150px;" class="button_blue"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--登录end-->
        </div>
        <!--注册-->
        <div class="qlogin" id="qlogin" style="display: none; ">
            <div class="web_login">
                <form name="form2" id="reg_form" accept-charset="utf-8" action="" method="post">
                    <input type="hidden" name="to" value="reg" />
                    <input type="hidden" name="did" value="0" />
                    <ul class="reg_form" id="reg-ul">
                        <div id="userCue" class="cue">
                            快速注册请注意格式
                        </div>
                        <li>
                            <label for="username" class="input-tips2">
                                用户名：
                            </label>
                            <div class="inputOuter2">
                                <input type="text" name="username" maxlength="16" class="inputstyle2"
                                />
                            </div>
                        </li>
                        <li>
                            <label for="password" class="input-tips2">
                                密码：
                            </label>
                            <div class="inputOuter2">
                                <input type="password" name="password" maxlength="16" class="inputstyle2"
                                />
                            </div>
                        </li>
                        <li>
                            <label for="repassword" class="input-tips2">
                                确认密码：
                            </label>
                            <div class="inputOuter2">
                                <input type="password"  name="repassword" maxlength="16" class="inputstyle2"
                                />
                            </div>
                        </li>
                        <li>
                            <div class="inputArea">
                                <input type="submit" id="reg" style="margin-top:10px;margin-left:50px; width: 200px;"
                                class="button_blue" value="注册" />
                                <a href="#" class="zcxy" target="_blank"></a>
                            </div>
                        </li>
                        <div class="cl">
                        </div>
                    </ul>
                </form>
            </div>
        </div>
        <!--注册end-->
    </div>
<input type="hidden" id="basepath" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['basepath']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
/lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
/lib/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
/js/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function() {
    $('#login_form').submit(function(event) {
        event.preventDefault();
        var data = $(this).serialize();
        var basepath = $('#basepath').val();
        $.ajax({
            url: basepath+'/bookmark/user/login',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(data){
                console.log(data);
                if(data.code == '0'){
                    layer.msg('登录成功！');
                    setTimeout(function(){
                        window.location.href = basepath + '/bookmark/manage';
                    },1500);
                }else{
                    layer.msg(data.ext);
                }
                
            },
            error: function(xhr){
                console.log(xhr);
            }
        });
        
    });

    $('#reg_form').submit(function(event) {
        event.preventDefault();
        var data = $(this).serialize();
        var basepath = $('#basepath').val();
        $.ajax({
            url: basepath+'/bookmark/user/reg',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(data){
                console.log(data);
                if(data.code == '0'){
                    layer.msg('注册成功！');
                    setTimeout(function(){
                        window.location.reload();
                    },1500);
                }else{
                    layer.msg(data.ext);
                }
                
            },
            error: function(xhr){
                console.log(xhr);
            }
        });
        
    });
})    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
