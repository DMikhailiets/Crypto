<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ настройка интерфейса</title>

 <link rel="stylesheet" href="css.css" type="text/css">
 <style>
   body {
    background-image: url(31.png); /* Путь к фоновому изображению */
    background-color: #C5C5C5; /* Цвет фона */
   }
   	a{
	display:inline-block;
	}
	.block{
	position:absolute;
	margin-left:200px;
	margin-top:255px;
	width:220px;
	height:40px;
	background:none;
	border:none;
	}
  </style>
 </head>
  <body style="height: 100%;" bgcolor="#C5C5C5">

	<div style="align:auto; width:300; height:100 top:20%; left:30%" class="block">
	<center> <form id="pass" method="POST">
	<input style="font:25px 'Lucida Console'; background:white; border:none;" name="pass"></input>
	 </form></center>
	 	<?php 
		$PASS=$_POST['pass'];
		if (($PASS=="192.168.1.1"))
		{echo '<script>location.replace("indexst4.php")</script>';}
		else echo '<script>location.replace("#")</script>';?>
    </div>

	

	
	
	
<br><pre>




<font size="6">













	
	Для дальнейшей настройки криптомаршрутизатора задайте 
	
	локальный адрес интерфейса 192.168.1.1 в поле Локальный IP-адрес
</font>
</pre>
</body>
</html>