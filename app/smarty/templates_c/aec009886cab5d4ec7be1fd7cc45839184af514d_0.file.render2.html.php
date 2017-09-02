<?php
/* Smarty version 3.1.30, created on 2017-08-30 21:40:22
  from "C:\laragon\www\vkphp\app\smarty\templates\index\render2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a79336b40331_58377120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec009886cab5d4ec7be1fd7cc45839184af514d' => 
    array (
      0 => 'C:\\laragon\\www\\vkphp\\app\\smarty\\templates\\index\\render2.html',
      1 => 1504103451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a79336b40331_58377120 (Smarty_Internal_Template $_smarty_tpl) {
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
