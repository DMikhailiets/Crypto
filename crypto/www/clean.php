<?php

// Пример работы с сессиями.
session_start();

    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "router"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение");
     
    // Выборка базы
    mysql_select_db("km",$db);
     
    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);
     
?>


 <link rel="stylesheet" href="css.css" type="text/css">

<html>
<body>

	<center> <form id="pass" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="font:14px 'Lucida Console'; border: 1px solid white;">
	<td style="font:14px 'Lucida Console';">Введите пароль</td>
	<td><input type="password" style="font:14px 'Lucida Console'; background:none; border:none;" name="pass"></input></td>
	</tr>
	</table>
	 </form></center>
	<?php $_SESSION['pass']="none"; $_SESSION['pass'] = $_POST["pass"]; if ($_SESSION['pass']=="32")
		{	mysql_query("TRUNCATE TABLE ".$db_table);
			echo '<script>location.replace("start.php")</script>';}
			
		else echo " ";?>

</body>
</html>