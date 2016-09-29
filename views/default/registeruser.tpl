<div class="container he">
    <div class="row text-center">
        <h2>Регистрация</h2>
        <hr>
    </div>
    <br>
    <br>
    <div id="object" class="FadeIn0">
     <div class="row text-center">


        <form id="registerBox" class="form-horizontal" role="form">

            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="text" id="name" required="required" name="name" value="" placeholder="Имя">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="email" id="email" required="required" name="email" value="" placeholder="Ваш e-mail">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="tel" id="phone" required="required" name="phone" value="" placeholder="Номер телефона">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="password" id="pwd1" required="required" name="pwd1" value="" placeholder="Пароль">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="password" id="pwd2" required="required" name="pwd2" value="" placeholder="Повторите пароль">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group">
                <button id="log" type="button" onclick="registerNewUser();" class="btn btn-info">Зарегистрироваться</button>
            </div>

        </form>

     </div>
    </div>

</div>

