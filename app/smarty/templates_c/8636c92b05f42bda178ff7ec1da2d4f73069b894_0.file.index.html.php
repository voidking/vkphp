<?php
/* Smarty version 3.1.31, created on 2017-09-19 11:05:34
  from "C:\laragon\www\vkphp\app\smarty\templates\bookmark\manage\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c0897ec995e9_33739437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8636c92b05f42bda178ff7ec1da2d4f73069b894' => 
    array (
      0 => 'C:\\laragon\\www\\vkphp\\app\\smarty\\templates\\bookmark\\manage\\index.html',
      1 => 1505790331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0897ec995e9_33739437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <meta name="description" content="">
  <meta name="author" content="">
  <title>我的书签</title>
  <link href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/css/bookmark/manage/index.css">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">VKPHP-BOOKMARK</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <button type="button" class="btn btn-success">管理</button>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-default">退出</button>
          </div> 
        </form>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container">
      <h2 style="margin-top:40px;">功能简介</h2>
      <p>增删改查书签。</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row b-box">
      <div class="col-md-12">
        <h3 class="b-title">推荐书签</h3>
      </div>
      <div class="col-md-4 b-item-parent">
        <div class="b-item">
          <h4><a href="http://www.voidking.com">VoidKing</a></h4>
          <p>书签说明</p>
        </div>
      </div>
      <div class="col-md-4 b-item-parent">
        <div class="b-item">
          <h4><a href="http://www.voidking.com">VoidKing</a></h4>
          <p>书签说明</p>
        </div>
      </div>
      <div class="col-md-4 b-item-parent">
        <div class="b-item">
          <h4><a href="http://www.voidking.com">VoidKing</a></h4>
          <p>书签说明</p>
        </div>
      </div>
    </div>

    <hr>

    <footer>
      <p>&copy; 2017 VoidKing</p>
    </footer>
  </div> <!-- /container -->
  <?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
/lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
/lib/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
