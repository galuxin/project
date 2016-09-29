<?php /* Smarty version Smarty-3.1.6, created on 2016-03-30 13:44:47
         compiled from "../views/admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2030256fbae1fe5e6a9-83294807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2ebd3e5a5bbbbad9b7bae3f11cca59b8d91b2f' => 
    array (
      0 => '../views/admin\\login.tpl',
      1 => 1459334621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030256fbae1fe5e6a9-83294807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fbae20557d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbae20557d4')) {function content_56fbae20557d4($_smarty_tpl) {?><html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/animations.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main2.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main3.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main4.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.js"></script>
</head>
<body>

<div class="container he">
    <div class="row text-center">
        <h2>Вход</h2>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="object" class="FadeIn0">
        <div class="row text-center">


            <form class="form-horizontal" role="form">

                <div class="form-group form-group-lg has-feedback">
                    <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                        <input class="form-control" type="email" id="loginEmail" required="required" name="loginEmail" value="" placeholder="E-mail">
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group form-group-lg has-feedback">
                    <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                        <input class="form-control" type="password" id="loginPwd" required="required" name="loginPwd" value="" placeholder="Пароль">
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group">
                    <button id="log" type="button" onclick="login();" class="btn btn-info">Войти</button>
                    <a href="/user/registeruser/"><button type="button" class="btn btn-default">Регистрация</button></a>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html><?php }} ?>