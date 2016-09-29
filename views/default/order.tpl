{* страница заказа *}

<div class="container he">
    <div class="row text-center">
        <h2>Оформление заказа</h2>
        <hr>
    </div>

<div id="object" class="FadeIn0">
  <div class="container-fluid">
    <form id="frmOrder" action="/cart/saveorder/" method="POST">

      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 blockright">
            {if ! isset($arUser)}

                <div role="tabpanel" id="tabpanelka">

                    <div class="alert alert-warning text-center" role="alert">
                        <p><h5>Для оформления заказа вы должны быть</h5></p>
                        <p><h5>зарегистрированы или авторизированы!</h5></p>
                    </div>

                    <ul class="nav nav-pills nav-justified">
                        <li role="presentation"><a class="modknopka" href="#" type="button" data-toggle="modal" data-target=".bs-example-modal-sm">Регистрация</a></li>
                        <li role="presentation" style="margin: 0px;"><a class="modknopka" href="#" type="button" data-toggle="modal" data-target=".bs-example-modal-sm1">Авторизация</a></li>
                    </ul>

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                               <div class="modal-header" style="padding: 4px;">
                                   <h4 class="text-center">Регистрация</h4>
                                </div>
                                <div class="modal-body">
                                <div id="registerBox" class="form-horizontal text-center" role="form" style="padding-top: 25px;">

                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="text" id="name" required="required" name="name" value="" placeholder="Имя">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="email" id="email" required="required" name="email" value="" placeholder="Ваш e-mail">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="tel" id="phone" required="required" name="phone" value="" placeholder="Номер телефона">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="password" id="pwd1" required="required" name="pwd1" value="" placeholder="Пароль">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="password" id="pwd2" required="required" name="pwd2" value="" placeholder="Повторите пароль">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="log" type="button" onclick="registerNewUser1();" class="btn btn-info btn-sm">Зарегистрироваться</button>
                                    </div>

                                </div>                           
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header" style="padding: 4px;">
                                <h4 class="text-center">Вход</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-horizontal text-center" role="form" style="padding-top: 25px;">
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="email" id="loginEmail" required="required" name="loginEmail" value="" placeholder="E-mail">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-group has-feedback">
                                        <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                            <input class="form-control" type="password" id="loginPwd" required="required" name="loginPwd" value="" placeholder="Пароль">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="log" type="button" onclick="login1();" class="btn btn-info btn-sm">Войти</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>

            {$buttonClass = "hideme"}
            {/if}

          <div id="kontakt" class="text-center {$buttonClass}">
              <h4 style="margin-top: 0px;">Контактные данные</h4>
          </div>

          <div id="formOrder" class="form-horizontal {$buttonClass}" role="form" style="padding-top: 10px;">
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <input class="form-control" type="text" id="name" name="name" value="" placeholder="Имя">
                  </div>
              </div>
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <input class="form-control" type="email" id="loginEmail" name="loginEmail" value="" placeholder="E-mail">
                  </div>
              </div>
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <input class="form-control" type="tel" id="phone" name="phone" value="" placeholder="Номер телефона">
                  </div>
              </div>
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <input class="form-control" type="text" id="city" name="city" value="" placeholder="Город">
                  </div>
              </div>
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <label class="control-label" style="padding-top: 0px;"><a href="https://novaposhta.ua/office" target="_blank">Узнать ближайшие отделения</a></label>
                      <input class="form-control" type="text" id="adress" name="adress" value="" placeholder="Номер отделения новой почты">
                  </div>
              </div>
              <div class="form-group form-group" style="margin-bottom: 15px;">
                  <div class="col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                      <label class="control-label" style="padding-top: 0px;">Форма оплаты</label>
                      <select class="form-control">
                        <option>Наложенным платежом</option>
                        <option>Полная предоплата</option>
                      </select>
                  </div>
              </div>
          </div>



            <div class="text-center" style="padding-right: 10px; padding-left: 10px;">
               <input class="btn btn-default btn-lg col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 rad {$buttonClass}" id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();">
            </div>
      </div>


      <div class="text-left">
         <h4>Заказ</h4>
      </div>
	 
	{foreach $rsProducts as $item name=products}

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 blockleft">
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
                    <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                        <h5 style="font-size: 14px; padding-top: 8px; padding-bottom: 3px;">{$item['price']} грн</h5>
                    </span>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <div class="text-right topmarg">
                    <span class="badge" id="itemCnt_{$item['id']}">
				        <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}">{$item['cnt']}
				    </span>
                </div>
            </div>
        </div>

	{/foreach}


    </form>
  </div>
  <br>
  <br>
</div>
</div>