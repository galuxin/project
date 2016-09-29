{* страница продукта *}

<div class="container he">

    <div class="row text-center">
        <h2><a class="hav hover texn" title="Вернуться назад" href="/category/{$rsProduct['category_id']}/">{$rsProduct['category_name']}</a></h2>
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
                            <img src="/images/products/{$rsProduct['image']}">
                        </div>
                        <div class="item">
                            <img src="/images/products/{$rsProduct['image2']}">
                        </div>
                        <div class="item">
                            <img src="/images/products/{$rsProduct['image3']}">
                        </div>

                        {if $rsProduct['image4'] == true}
                            <div class="item">
                                <img src="/images/products/{$rsProduct['image4']}">
                            </div>
                            <div class="item">
                                <img src="/images/products/{$rsProduct['image5']}">
                            </div>
                            <div class="item">
                                <img src="/images/products/{$rsProduct['image6']}">
                            </div>
                        {/if}
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
                    <h1>{$rsProduct['name']}</h1>
                    <h3>{$rsProduct['price']} грн</h3>
                    <button id="addCart_{$rsProduct['id']}" class="btn btn-default btn-lg btn-block rad {if $itemInCart}hideme{/if}" onClick="addToCart1({$rsProduct['id']}); return false;" type="button">Добавить в корзину</button>
                    <a id="removeCart" class="btn btn-default btn-lg btn-block active rad" href="/cart/" {if ! $itemInCart}style="display: none"{/if} role="button">Перейти в корзину</a>
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
                                <p>{$rsProduct['description']}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <h3 class="text-left texn">Новинки</h3>
        <hr>

        {foreach $rsNews as $item name=products}
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail category huver bordik">
                    <a href="/product/{$item['id']}/"><img src="/images/products/{$item['image']}" alt="..."></a>
                    <div class="caption">
                        <div class="row column text-center">
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
                    <img src="/images/products/{$rsProduct['image']}">
                </div>
                <div class="item">
                    <img src="/images/products/{$rsProduct['image2']}">
                </div>
                <div class="item">
                    <img src="/images/products/{$rsProduct['image3']}">
                </div>

                {if $rsProduct['image4'] == true}
                    <div class="item">
                        <img src="/images/products/{$rsProduct['image4']}">
                    </div>
                    <div class="item">
                        <img src="/images/products/{$rsProduct['image5']}">
                    </div>
                    <div class="item">
                        <img src="/images/products/{$rsProduct['image6']}">
                    </div>
                {/if}
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
<br>