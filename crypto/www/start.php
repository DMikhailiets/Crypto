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
<center><img src="s1.png" width="13%" height="35%"></center>
    <div style="display:none">
            <input type="text" name="hiddenText"/>
    </div>
	<center><h1>Программа-тренажер для имитации работы криптомаршрутизатора</h1>
	<pre>Для начала работы необходимо ввести номер учебной группы и фамилию в пункте Ввести данные, после чего выбрать пункт Начать
	или пройти обучение при необходимости</pre>


	
	<p><a class="design" style="width:200;align:center; text-align:center;" href="indexnar.php">Начать</a></h1>
	<p><a class="design" style="width:200;align:center; text-align:center;" href="clean.php">Очистить таблицы</a></h1>
	<p><a class="design" style="width:200;align:center; text-align:center;" href="form.php">Ввести данные</a></h1>
	<p><a class="design" style="width:200;align:center; text-align:center;" href="indexstart.php#okno2">Обучение</a></h1>
	<img align='left'src="s2.png" height="15%" width="7%">
	<img align='left' src="s3.png" height="15%" width="7%">
	<img align='right' src="s4.png" height="20%" width="15%">
	<br><p><h3>32 КАФЕДРА<p>ВАС 2018</h3></center>

</body>
</html>