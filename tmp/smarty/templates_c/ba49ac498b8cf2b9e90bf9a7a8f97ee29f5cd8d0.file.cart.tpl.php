<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 15:33:58
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3111656ab893bac2084-33774968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1454528930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3111656ab893bac2084-33774968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab893cbe93e',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab893cbe93e')) {function content_56ab893cbe93e($_smarty_tpl) {?>

<div class="container he">
    <div class="row text-center">
        <h2>Корзина</h2>
        <hr>
    </div>

    <div id="object" class="FadeIn0">
            <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
                <br>
                <br>
                <br>
                <div class="row text-center">
                    <h4>В корзине пусто</h4>
                </div>
            <?php }else{ ?>
              <div class="container-fluid">
                <form action="/cart/order/" method="POST">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 blockright">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="hover" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="glyphicon glyphicon-align-justify"></span> Оплата и доставка
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body" style="font-size: 12px;">
                                         <p><strong>Оплата</strong></p>
                                         <p>- Полная оплата товара на карту Приват Банка.</p>
                                         <p>- Наложенным платежом при получении (комиссия перевозчика 20 грн. + 2 % от суммы).</p>
                                         <p>- Предоплата на карту Приват Банка.</p>
                                         <p><strong>Доставка</strong></p>
                                         <p>- Отделение Новой Почты. (Стоимость доставки 25 грн.)</p>
                                         <p><strong>Контакты</strong></p>
                                         <p>- тел: 0957456321</p>
                                         <p>- e-mail: RB@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input class="btn btn-default btn-lg btn-block rad" type="submit" value="Оформить заказ">
                        </div>
                    </div>

                    <div class="text-left">
                        <h4>Товар</h4>
                    </div>

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 blockleft">
                            <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4" style="padding-left: 0px;">
                                <div class="thumbnail topmarg cartbord">
                                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                       <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3">
                                <div class="text-left topmarg">
                                    <a class="hav hover" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><h5><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h5></a>
                                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><h5 style="font-size: 14px; padding-top: 8px; padding-bottom: 3px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 грн</h5></span>
                                    <input class="form-control input-sm" style="width: 37px;" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="text-right topmarg">
                                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины"><span class="glyphicon glyphicon-remove" style="color: #444444;" aria-hidden="true"></span></a>
                                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент"><span class="glyphicon glyphicon-refresh" style="color: green;" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </form>
              </div>
                <br>
                <br>
            <?php }?>
    </div>
</div><?php }} ?>