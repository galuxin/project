
<div class="container he">
<div class="row text-center">
    <h2>Вход</h2>
    <hr>
</div>
    <br>
    <br>
    <br>
    <br>
    <div id="object" class="FadeIn0">
     <div class="row text-center">


        <form class="form-horizontal" role="form">

            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="email" id="loginEmail" required="required" name="loginEmail" value="" placeholder="E-mail">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group form-group-lg has-feedback">
                <div class="col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-md-offset-4 col-lg-offset-4">
                    <input class="form-control" type="password" id="loginPwd" required="required" name="loginPwd" value="" placeholder="Пароль">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group">
                <button id="log" type="button" onclick="login();" class="btn btn-info">Войти</button>
                <a href="/user/registeruser/"><button type="button" class="btn btn-default">Регистрация</button></a>
            </div>

        </form>

     </div>
    </div>
</div>

