<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ оператор нар</title>

 <link rel="stylesheet" href="css.css" type="text/css">
 <style>
   body {
    background-image: url(1.1.png); /* Путь к фоновому изображению */
    background-color: #C5C5C5; /* Цвет фона */
   }
  </style>
 </head>
  <body style="height: 100%;" bgcolor="#C5C5C5">

	<div style="display: table; width:300; height:100 top:20%; left:30%" id="okno2">
	<center> <form id="pass" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="border: 1px solid white;">
	<td style="font:22px 'Lucida Console';">Пароль</td>
	<td><input type="password" style="font:14px 'Lucida Console'; background:none; border:none;" name="pass" autofocus></input></td>
	</tr>
	</table>
	 </form></center>
	 	<?php 
		$PASS=$_POST['pass'];
		if (($PASS=="adm")||($PASS=="фвм"))
		{echo '<script>location.replace("indexst1.php")</script>';}
		else echo '<script>location.replace("#")</script>';?>
    </div>

<br><pre>




<font size="6">







 Для перехода в режим администратора необходимо ввести пароль администратора (adm),
 предварительно выбрав пункт Консоль -  Режим - Администратор

 Для продолжения введите пароль администратора
</font>
</pre>
</body>
</html>