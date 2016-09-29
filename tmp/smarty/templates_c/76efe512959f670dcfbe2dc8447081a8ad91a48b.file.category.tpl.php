<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 14:31:19
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1608556ab502e35cd88-05544739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1455045198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1608556ab502e35cd88-05544739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab502e600e7',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'i' => 0,
    'rsCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab502e600e7')) {function content_56ab502e600e7($_smarty_tpl) {?>

<div class="container he">

<div class="row text-center">
    <h2><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h2>
    <hr>
</div>

    <div id="object" class="FadeIn0">
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="thumbnail category catbordshadow huver">
                  <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="..."></a>
                  <div class="caption">
                     <div class="row text-center">
                       <h5 class="minhe"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h5>
                       <h5><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 грн</strong></h5>
                         <hr class="rh">
                         <a class="menuknopka" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Открыть</a>
                     </div>
                  </div>
              </div>
        </div>
        <?php } ?>
    </div>
    </div>

<nav class="row text-center">
  <ul class="pagination">
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['rsCount']->value){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['rsCount']->value; $_smarty_tpl->tpl_vars['i']->value++){
?>

          <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a></li>

      <?php }} ?>
  </ul>
</nav>
    
</div>





<?php }} ?>