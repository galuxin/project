{* Страница категории *}

<div class="container he">

<div class="row text-center">
    <h2>{$rsCategory['name']}</h2>
    <hr>
</div>

    <div id="object" class="FadeIn0">
    <div class="row">
        {foreach $rsProducts as $item name=products}
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="thumbnail category catbordshadow huver">
                  <a href="/product/{$item['id']}/"><img src="/images/products/{$item['image']}" alt="..."></a>
                  <div class="caption">
                     <div class="row text-center">
                       <h5 class="minhe">{$item['name']}</h5>
                       <h5><strong>{$item['price']} грн</strong></h5>
                         <hr class="rh">
                         <a class="menuknopka" href="/product/{$item['id']}/">Открыть</a>
                     </div>
                  </div>
              </div>
        </div>
        {/foreach}
    </div>
    </div>

<nav class="row text-center">
  <ul class="pagination">
      {for $i = 0; $i < $rsCount; $i++}

          <li><a href="/category/{$rsCategory['id']}/{$i}/">{$i+1}</a></li>

      {/for}
  </ul>
</nav>
    
</div>





