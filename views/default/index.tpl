{* шаблон главной страницы *}

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
        {foreach $rsCategories as $item}
            {if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                    <a href="/category/{$itemChild['id']}/">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 paddd">
                            <div class="effect homeblock">
                                <img src="/images/products/{$itemChild['image']}">
                                <div class="figura">
                                    <h2>{$itemChild['name']}</h2>
                                    <p>Lily likes to play with crayons and pencils</p>
                                </div>
                            </div>
                        </div>
                    </a>
                {/foreach}
            {/if}
        {/foreach}
    </div>
    
</div>

    
        
        
        


