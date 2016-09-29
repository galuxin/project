<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 15:33:50
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:898056ab5375dac256-76584686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1458673272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '898056ab5375dac256-76584686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab5376a9806',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
    'rsNews' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab5376a9806')) {function content_56ab5376a9806($_smarty_tpl) {?>

<div class="container he">

    <div class="row text-center">
        <h2><a class="hav hover texn" title="Вернуться назад" href="/category/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['category_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['category_name'];?>
</a></h2>
        <hr>
    </div>

    <div id="object" class="FadeIn0">

        <div class="product">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 otstup">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Обгортка для слайдів -->
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
                        </div>
                        <div class="item">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
">
                        </div>
                        <div class="item">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image3'];?>
">
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['rsProduct']->value['image4']==true){?>
                            <div class="item">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image4'];?>
">
                            </div>
                            <div class="item">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image5'];?>
">
                            </div>
                            <div class="item">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image6'];?>
">
                            </div>
                        <?php }?>
                    </div>
                    </a>


                    <!-- Управління -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span id="object" class="glyphicon glyphicon-chevron-left Pulse" aria-hidden="true"></span>

                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span id="object" class="glyphicon glyphicon-chevron-right Pulse" aria-hidden="true"></span>

                    </a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 otstup">

                <div class="mag">
                    <h1><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h1>
                    <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 грн</h3>
                    <button id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" class="btn btn-default btn-lg btn-block rad <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>hideme<?php }?>" onClick="addToCart1(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" type="button">Добавить в корзину</button>
                    <a id="removeCart" class="btn btn-default btn-lg btn-block active rad" href="/cart/" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>style="display: none"<?php }?> role="button">Перейти в корзину</a>
                </div>


                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="hover" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-align-justify"></span> Описание
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <h3 class="text-left texn">Новинки</h3>
        <hr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail category huver bordik">
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="..."></a>
                    <div class="caption">
                        <div class="row column text-center">
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


    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 32px;">&times;</span></button>
                </div>
                <div class="modal-body">

                 <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

        <!-- Обгортка для слайдів -->
        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
                </div>
                <div class="item">
                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
">
                </div>
                <div class="item">
                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image3'];?>
">
                </div>

                <?php if ($_smarty_tpl->tpl_vars['rsProduct']->value['image4']==true){?>
                    <div class="item">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image4'];?>
">
                    </div>
                    <div class="item">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image5'];?>
">
                    </div>
                    <div class="item">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image6'];?>
">
                    </div>
                <?php }?>
            </div>
        </a>

        <!-- Управління -->
        <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Попередній</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Наступний</span>
        </a>


    </div>

                </div>

            </div>
        </div>
    </div>


</div>
<br><?php }} ?>