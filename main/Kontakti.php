<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
   <title>Контакты</title>
     <link
       rel="stylesheet"
	   href="../css/style.css"
	   type="text/css" 
	 />
  </head>
 <body>
 
 
 <div id="main">
			<div id="header">
				<td >
					<div id="log1">
					<img src="../img/logo.png" id="logo">
					</div>
					<div id="zag">
					<h1 class="is_border" align="center">Контакты</h1>
					</div>
				</td>
			</div>
			<div id="menu">
				<td >
					<ul>
						 <li><a href="../index.html">Главная</a></li>
						 <li><a href="Katalog_tovara.html">Каталог товаров</a></li>
						 <li><a href="Akcii.html">Акции</a></li>
						 <li><a href="Sxema_proezda.html">Схема проезда</a></li>
						 <li><a href="Kontakti.php">Контакты</a></li>
					</ul>
				</td>
			</div>
			<div class="kontakt_content">
				
				
					<div class="kontakt_centr">
					
					

					
					
				<div id="fos">
					<?php 
function show_form() 
{ 
?> 
<form action="Kontakti.php" method=post> 

              <br />Имя*<br /> 
              <input  class="username" type="text" name="name" size="20"> 
              <br />Контактный телефон<br /> 
              <input class="userphone" type="text" name="tel" size="20"> 
              <br />Контактный email*<br /> 
              <input class="usermail" type="text" name="email" size="20"> 
              <br />Teма<br /> 
              <input class="username" type="text" name="title" size="20"> 
              <br />Сообщение*<br /> 
              <textarea class="userqueation" rows="10" name="mess" cols="30"></textarea> 
              <br /><input type="submit" value="Отправить" name="submit"> 

</form> 
* Помечены поля необходимо заполнить 
<? 
} 
 
function complete_mail() { 
        $_POST['title'] =  substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
        $_POST['tel'] =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 30); 
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50); 
        // если не заполнено поле "Имя" - показываем ошибку 0 
        if (empty($_POST['name'])) 
             output_err(0); 
        // если неправильно заполнено поле email - показываем ошибку 1 
        if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
             output_err(1); 
        // если не заполнено поле "Сообщение" - показываем ошибку 2 
        if(empty($_POST['mess'])) 
             output_err(2); 
        // создаем наше сообщение 
        $mess = ' 
        Имя отправителя:'.$_POST['name'].' 
        Контактный телефон:'.$_POST['tel'].' 
        Контактный email:'.$_POST['email'].' 
        '.$_POST['mess']; 
        // $to - кому отправляем 
        $to = 'inilion@yandex.ru'; 
        // $from - от кого 
        $from='email'; 
        mail($to, $_POST['title'], $mess, "From:".$from); 
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
 
function output_err($num) 
{ 
    $err[0] = 'ОШИБКА! Не введено имя.'; 
    $err[1] = 'ОШИБКА! Неверно введен e-mail.'; 
    $err[2] = 'ОШИБКА! Не введено сообщение.'; 
    echo '<p>'.$err[$num].'</p>'; 
    show_form(); 
    exit(); 
} 
 
if (!empty($_POST['submit'])) complete_mail(); 
else show_form(); 
?> 

					
				</div>
				
				<div class="telefon">
						<p>
							Тел. 8-9272-60-82-32 / 990-82-32<br>
							E-mail: fenix@upakovka-vsamare.ru<br>
							Адрес : г. Самара пр-д Мальцева 9
						</p>
					</div>
					
					
						</div>
				
			</div>
			<div class="kontakt_footer">
				<div >
				     <footer>&copy ООО "Феникс-Самара"  г. Самара пр-д Мальцева 9</footer>
				</div>
			</div>
		</div>
		
 </body>
 </html>
