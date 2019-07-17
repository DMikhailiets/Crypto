<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ администратор нар</title>

 <link rel="stylesheet" href="css.css" type="text/css">
 <style>
   body {
    background-image: url(11.png); /* Путь к фоновому изображению */
    background-color: #C5C5C5; /* Цвет фона */
   }
   	a{
	display:inline-block;
	}
	.block{
	margin-left:630px;
	position:absolute;
	width:220px;
	height:40px;
	background:none;
	}
  </style>
 </head>
  <body style="height: 100%;" bgcolor="#C5C5C5">

	<div style="align:auto; width:300; height:100 top:20%; left:30%" id="okno2">
	<center> <form id="pass" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="border: 1px solid white;">
	<td style="font:22px 'Lucida Console';">Пароль</td>
	<td><input type="password" style="font:14px 'Lucida Console'; background:none; border:none;" name="pass"></input></td>
	</tr>
	</table>
	 </form></center>
	 	<?php 
		$PASS=$_POST['pass'];
		if (($PASS=="adm")||($PASS=="фвм"))
		{echo '<script>location.replace("indexst.php")</script>';}
		else echo '<script>location.replace("#")</script>';?>
    </div>

	
	<a href="indexst2.php">
	<div class="block">
	
	</div>
	</a>
	
<br><pre>




<font size="6">







<?php 
$PASS=$_POST['pass'];
if (($PASS=="adm"))
{echo $PASS;}
else echo $PASS;?>
Для дальнейшей настройки криптомаршрутизатора выберите пункт Настройка

После чего необходимо выбрать пункт меню Интерфейсы
</font>
</pre>
</body>
</html>