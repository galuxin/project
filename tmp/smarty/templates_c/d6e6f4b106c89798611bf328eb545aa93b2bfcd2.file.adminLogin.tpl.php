<?php /* Smarty version Smarty-3.1.6, created on 2016-05-05 15:12:50
         compiled from "../views/admin\adminLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1445656fbb5ad00fcb1-40982486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e6f4b106c89798611bf328eb545aa93b2bfcd2' => 
    array (
      0 => '../views/admin\\adminLogin.tpl',
      1 => 1462450368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1445656fbb5ad00fcb1-40982486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fbb5ad6a205',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fbb5ad6a205')) {function content_56fbb5ad6a205($_smarty_tpl) {?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <div class="container text-center">

            <form class="form-horizontal" role="form">

                <div class="form-group form-group-lg has-feedback">
                    <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                        <input class="form-control" type="email" id="adminEmail" required="required" name="loginEmail" value="" placeholder="E-mail">
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group form-group-lg has-feedback">
                    <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                        <input class="form-control" type="password" id="adminPwd" required="required" name="loginPwd" value="" placeholder="Пароль">
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group">
                    <button id="log" type="button" onclick="loginadmin();" class="btn btn-info">Войти</button>
                </div>

            </form>

        </div><?php }} ?>