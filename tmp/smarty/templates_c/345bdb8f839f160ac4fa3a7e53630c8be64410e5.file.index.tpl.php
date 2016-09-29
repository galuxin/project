<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 14:31:08
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2169556ab502a94bf72-83503799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1455265862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169556ab502a94bf72-83503799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab502aa9ab0',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab502aa9ab0')) {function content_56ab502aa9ab0($_smarty_tpl) {?>

<div id="object" class="slideDown">

<div class="jumbotron shop">
    <div class="row text-center">
          <h2>Handmade</h2>
        <div id="object" class="FadeIn2">
          <h3>Магазин изделий ручной работы</h3>
        </div>
        <br>
        <div id="object" class="Pulse">
          <span class="glyphicon glyphicon-menu-down" style="font-size: 24px;"></span>
        </div>
    </div>
</div>
   
</div>
<div id="object" class="slideUp">
    
    <div class="container-fluid paddd">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 paddd">
                            <div class="effect homeblock">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['image'];?>
">
                                <div class="figura">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</h2>
                                    <p>Lily likes to play with crayons and pencils</p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php }?>
        <?php } ?>
    </div>
    
</div>

    
        
        
        


<?php }} ?>