<?php

// Пример работы с сессиями.
session_start();
	$_SESSION['SID']=(string)session_id();
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

	<center> <form action="" id="start" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="font:14px 'Lucida Console'; border: 1px solid white;">
	<tr>
	<td style="font:14px 'Lucida Console';">Введите учебную группу</td>
	<td><input form="start" style="font:14px 'Lucida Console'; background:none; border:none;" name="Group"></input></td>
	</tr>
	
	<tr>
	<td style="font:14px 'Lucida Console';">Введите фамилию</td>
	<td><input form="start" style="font:14px 'Lucida Console'; background:none; border:none;" name="Name"></input></td>
	</tr>
	</table>
	<input value="Готово" form="start" type="submit">
	 </form></center>
<?php 
	$_SESSION['Group']=$_POST["Group"];
	$_SESSION['Name']=$_POST["Name"];
	if(isset($_POST["Name"]))
{mysql_query("INSERT INTO ".$db_table."(SID) VALUE ('".$_SESSION['SID']."')");
 mysql_query("UPDATE `router` SET `Name`='".$_SESSION['Name']."-".$_SESSION['Group']."' WHERE `SID`='".$_SESSION['SID']."' "); 
 echo"<script>window.location.href = 'start.php';</script>";}
else echo "Заполните все поля!";
?> 

</body>
</html>