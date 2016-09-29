{* шаблон корзины *}

<div class="container he">
    <div class="row text-center">
        <h2>Корзина</h2>
        <hr>
    </div>

    <div id="object" class="FadeIn0">
            {if ! $rsProducts}
                <br>
                <br>
                <br>
                <div class="row text-center">
                    <h4>В корзине пусто</h4>
                </div>
            {else}
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

                    {foreach $rsProducts as $item name=products}

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 blockleft">
                            <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4" style="padding-left: 0px;">
                                <div class="thumbnail topmarg cartbord">
                                    <a href="/product/{$item['id']}/">
                                       <img src="/images/products/{$item['image']}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3">
                                <div class="text-left topmarg">
                                    <a class="hav hover" href="/product/{$item['id']}/"><h5>{$item['name']}</h5></a>
                                    <span id="itemPrice_{$item['id']}" value="{$item['price']}"><h5 style="font-size: 14px; padding-top: 8px; padding-bottom: 3px;">{$item['price']} грн</h5></span>
                                    <input class="form-control input-sm" style="width: 37px;" name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});"/>
                                    {*<span id="itemRealPrice_{$item['id']}"><h5 style="font-size: 14px; padding-top: 8px; padding-bottom: 3px;">Итого: {$item['price']} грн</h5></span>*}
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="text-right topmarg">
                                    <a id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;" title="Удалить из корзины"><span class="glyphicon glyphicon-remove" style="color: #444444;" aria-hidden="true"></span></a>
                                    <a id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;" title="Восстановить элемент"><span class="glyphicon glyphicon-refresh" style="color: green;" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>

                    {/foreach}

                </form>
              </div>
                <br>
                <br>
            {/if}
    </div>
</div>