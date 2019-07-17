<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ настройка интерфейса</title>

 <link rel="stylesheet" href="css.css" type="text/css">
 <style>
   body {
    background-image: url(21.png); /* Путь к фоновому изображению */
    background-color: #C5C5C5; /* Цвет фона */
   }
   	a{
	display:inline-block;
	}
	.block{
	position:absolute;
	margin-left:180px;
	margin-top:200px;
	width:1020px;
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

	
	<a href="indexst3.php">
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








      Для дальнейшей настройки криптомаршрутизатора выберите интерфейс _Ext1, 
       щелкнув по нему
</font>
</pre>
</body>
</html>