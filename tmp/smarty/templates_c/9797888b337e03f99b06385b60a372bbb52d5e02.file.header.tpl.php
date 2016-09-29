<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 14:31:08
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2735856ab502a2fdc74-85139683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1462451456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2735856ab502a2fdc74-85139683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab502a75268',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'arUser' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab502a75268')) {function content_56ab502a75268($_smarty_tpl) {?><html lang="ru">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/animations.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main2.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main3.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main4.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="/js/bootstrap/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top container-fluid" role="navigation">
    
        <div class="container-fluid">
        <!-- Бренд та перемикач згруповані для кращого відображення на мобільних пристроях -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index/"><img src="/images/brand/logomini.jpg"></a>
        </div>

        <!-- Зібрано навігаційні лінки, форми, та інший вміст для переключення -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li><a href="/index/">Главная</a></li>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                                    <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php }else{ ?>
                        <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }?>
                <?php } ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
 <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/user/"><span class="glyphicon glyphicon-home"></span> Личный кабинет</a></li>
                            <li><a href="/user/logout/" onclick="logout();"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Выход</a></li>
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li><a href="/user/">Войти <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                <?php }?>

                <li>
                    <a href="/cart/" <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value==0){?>id="ww" data-placement="bottom" data-toggle="tooltip" title="Ваша корзина пуста!"<?php }?> title="Перейти в корзину">Корзина
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        <span id="cartCntItems">
                            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?>
                               <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

                            <?php }?>
                        </span>
                    </a>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php }} ?>