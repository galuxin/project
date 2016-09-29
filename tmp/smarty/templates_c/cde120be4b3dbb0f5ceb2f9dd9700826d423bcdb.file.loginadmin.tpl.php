<?php /* Smarty version Smarty-3.1.6, created on 2016-03-30 14:13:01
         compiled from "../views/admin\adminLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1236056fbaeab47fcc4-16658435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde120be4b3dbb0f5ceb2f9dd9700826d423bcdb' => 
    array (
      0 => '../views/admin\\adminLogin.tpl',
      1 => 1459336378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236056fbaeab47fcc4-16658435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fbaeab6721b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbaeab6721b')) {function content_56fbaeab6721b($_smarty_tpl) {?>
<div class="container he">

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
                </div>

            </form>

        </div>
    </div>
</div><?php }} ?>