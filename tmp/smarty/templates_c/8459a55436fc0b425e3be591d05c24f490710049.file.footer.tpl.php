<?php /* Smarty version Smarty-3.1.6, created on 2016-07-12 14:31:08
         compiled from "../views/default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3060456ab502abaf730-94614305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8459a55436fc0b425e3be591d05c24f490710049' => 
    array (
      0 => '../views/default\\footer.tpl',
      1 => 1455223644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3060456ab502abaf730-94614305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ab502ae42fa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ab502ae42fa')) {function content_56ab502ae42fa($_smarty_tpl) {?>
<div class="footer">
    <div class="container">
        <br>
        <br>
        <div class="row text-center">
            <div id="object" class="Pulse">
              <a class="icon" id="scroller" href="#">
                <i class="fa fa-chevron-circle-up fa" style="font-size: 37px;"><br><strong style="font-size: 13px; font-family: sans-serif;">Вверх</strong></i>
              </a>
            </div>
        </div>

        <div class="row text-center pad">
           <a class="icon" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
           <a class="icon" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
           <a class="icon" href="#"><i class="fa fa-instagram fa-2x"></i></a>
           <a class="icon" href="#"><i class="fa fa-vk fa-2x"></i></a>
             <address><br>
               <strong style="color: white;">© Интернет магазин</strong>
             </address>
        </div>

    </div>
</div>
<script>
    $('#ww').tooltip()
</script>
<script>
$(document).ready(function(){   
			// scroll body to 0px on click
			$('#scroller').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 900); //задаем скорость прокрутки
				return false;
			});
		});
</script>
<script>
    $(function () {
        //при нажатии на кнопку с id="save"
        $('#log').click(function () {
            //переменная formValid
            var formValid = true;
            //перебрать все элементы управления input
            $('input').each(function () {
                //найти предков, которые имеют класс .form-group, для установления success/error
                var formGroup = $(this).parents('.form-group');
                //найти glyphicon, который предназначен для показа иконки успеха или ошибки
                var glyphicon = formGroup.find('.form-control-feedback');
                //для валидации данных используем HTML5 функцию checkValidity
                if (this.checkValidity()) {
                    //добавить к formGroup класс .has-success, удалить has-error
                    formGroup.addClass('has-success').removeClass('has-error');
                    //добавить к glyphicon класс glyphicon-ok, удалить glyphicon-remove
                    glyphicon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
                } else {
                    //добавить к formGroup класс .has-error, удалить .has-success
                    formGroup.addClass('has-error').removeClass('has-success');
                    //добавить к glyphicon класс glyphicon-remove, удалить glyphicon-ok
                    glyphicon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
                    //отметить форму как невалидную
                    formValid = false;
                }
            });
        });
    });
</script>

</body>
</html><?php }} ?>