<?php /* Smarty version Smarty-3.1.6, created on 2016-02-02 13:21:00
         compiled from "../views/default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1649056ab504e2a65a8-70229388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd60692b94da5eefc2a8473e97a897c0c933d9e' => 
    array (
      0 => '../views/default\\login.tpl',
      1 => 1454408457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649056ab504e2a65a8-70229388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab504e432e4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab504e432e4')) {function content_56ab504e432e4($_smarty_tpl) {?>
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

<?php }} ?>