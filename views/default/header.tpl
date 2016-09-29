<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$pageTitle}</title>
        <link href="{$templateWebPath}css/animations.css" rel="stylesheet">
        <link href="{$templateWebPath}css/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="{$templateWebPath}css/main.css" rel="stylesheet">
        <link href="{$templateWebPath}css/main2.css" rel="stylesheet">
        <link href="{$templateWebPath}css/main3.css" rel="stylesheet">
        <link href="{$templateWebPath}css/main4.css" rel="stylesheet">
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
                {foreach $rsCategories as $item}
                    {if isset($item['children'])}
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$item['name']} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                {foreach $item['children'] as $itemChild}
                                    <li><a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a></li>
                                {/foreach}
                            </ul>
                        </li>
                    {else}
                        <li><a href="/category/{$item['id']}/">{$item['name']}</a></li>
                    {/if}
                {/foreach}
            </ul>

            <ul class="nav navbar-nav navbar-right">

                {if isset($arUser)}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$arUser['displayName']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/user/"><span class="glyphicon glyphicon-home"></span> Личный кабинет</a></li>
                            <li><a href="/user/logout/" onclick="logout();"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Выход</a></li>
                        </ul>
                    </li>
                {else}
                    <li><a href="/user/">Войти <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                {/if}

                <li>
                    <a href="/cart/" {if $cartCntItems == 0}id="ww" data-placement="bottom" data-toggle="tooltip" title="Ваша корзина пуста!"{/if} title="Перейти в корзину">Корзина
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        <span id="cartCntItems">
                            {if $cartCntItems > 0}
                               {$cartCntItems}
                            {/if}
                        </span>
                    </a>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
