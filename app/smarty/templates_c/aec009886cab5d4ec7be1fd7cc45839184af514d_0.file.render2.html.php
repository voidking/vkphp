<?php
/* Smarty version 3.1.31, created on 2017-09-14 10:30:06
  from "C:\laragon\www\vkphp\app\smarty\templates\index\render2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59b9e9ae19fad9_54104850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec009886cab5d4ec7be1fd7cc45839184af514d' => 
    array (
      0 => 'C:\\laragon\\www\\vkphp\\app\\smarty\\templates\\index\\render2.html',
      1 => 1505199365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b9e9ae19fad9_54104850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smarty</title>
</head>
<body>
    <p>第一个Smarty页面</p>
    <p>用户名：<?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</p>
</body>
</html><?php }
}
