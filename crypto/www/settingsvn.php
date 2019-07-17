<?php
session_start();

	$_SESSION['SID'] = (string)session_id();
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "router"; // Имя Таблицы БД
     
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
     
    // Выборка базы
    mysql_select_db("km",$db);
     
    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);
?>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ внутренний настройки</title>

 <link rel="stylesheet" href="css.css" type="text/css">
<script language="javascript" src="jsset.js" type="text/javascript"></script>
 </head>
 
  <body style="height: 100%;" bgcolor="#C5C5C5">
<div style="text-align:center; width: 70px; height: 20px; position:absolute; top: 40px; left:30px; border: none; background:#C5C5C5; z-index:1;"><font color="#A60000" style="font:14px 'Lucida Console'">Система</font></div>  

<a id="seg" onclick="" href="settingsnar.php" style="text-align:center; width: 90px; height: 20px; position:absolute; top: 40px; right:30px; border: none; background:red; z-index:1; text-decoration:none; color: white;">Внутренний</a>
<div style="width: 100%; height: 25px; position:relative; border: none; background:#30BFBF;">
<!--Пункт Параметры-->
<div style="width: 500px; height:200px; position:absolute; top:0px; left:0px; border: none; background:none;">
<a class="design" onclick="toggle(document.getElementById('sub-menu'))"><font color="#A60000">П</font>араметры</a>
<ul id="sub-menu" style="display:none">
<div style="position:absolute; top:25px; left:0px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000; z-index:2;">
	<li><a class="design"><font color="#A60000">О</font>сновные константы</a></li>
	<a class="design" onclick="toggle(document.getElementById('sub-menu11'))" href="#3"><font color="#A60000">П</font>араметры TCP/IP</a>
	<ul id="sub-menu11" style="display:none">	
		<div style=" width:400px; position:absolute; top:5px; left: 255px; border: none; background:none;  box-shadow: 5px 5px 0px -1px #000000;">
			<li><a class="design" style="font:11px 'Lucida Console';">
				<form method="POST" action=""><p style="text-align: right; display:inline">Собственный IP наружн.:</p><input readonly  value="<?php echo $_SESSION['ans']['IPNAR'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPNAR"></input></form>
				<form method="POST" action="">внутр.:<input readonly value="<?php echo $_SESSION['ans']['IPVN'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPVN"></input></form></p></a></li>
			
			<li><a class="design" href="#TTL" style="font:13px 'Lucida Console';">Время жизни IP-датаграмм&nbsp(<font color="#A60000">T</font>TL) :<font color="black"> 32</font></a></li>
			<li><a class="design" href="#MSS" style="font:13px 'Lucida Console';">Макс. размер TCP-пакета&nbsp(<font color="#A60000">M</font>SS) :<font color="black"> 512</font></a></li>
			<li><a class="design" href="#Win" style="font:13px 'Lucida Console';">Размер TCP-окна&nbsp(<font color="#A60000">W</font>indow) :<font color="black"> 8192</font></a></li>

		</div>	
	</ul>
	<li><a class="design" href="#3"><font color="#A60000">Ж</font>урнал</a></li>
	<li><a class="design" href="start.php"><font color="#A60000">В</font>ыход</a></li>
		<a class="design" href="#3" onclick="toggle(document.getElementById('sub-menu12'))"><font color="#A60000">Р</font>ежим</a>
	<ul id="sub-menu12" style="display:none">
	<div style="position:absolute; top:105px; left: 195px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000;">

	<li><a class="design" href="indexvn.php"><font color="#A60000">О</font>ператор</a></li>
	<li><a class="design" href="#okno2"><font color="#A60000">А</font>дминистратор</a></li>
	</div>
	</ul>
	<li><a class="design" href="#3"><font color="#A60000">Д</font>оступ</a></li>

</ul>
</div>			
</div>
<!--Пункт Интерфейсы-->
 <div style="width: 200px; height:200px; position:absolute; left:170px; top:8px; border: none; background:none;">
<a class="design" href="#interfeisy" ><font color=#A60000>И</font>нтерфейсы</a>
</div>

<!--Пункт Службы-->

 <div style="width: 150px; height:200px; position:absolute; left:360px; top:8px; border: none; background:none;">
 
<a class="design"><font color=#A60000>С</font>лужбы</a>

</div>

<!--Пункт Защита-->

 <div style="width: 200px; height:200px; position:absolute; left:490px; top:8px; border: none; background:none;">
<a class="design" href="#interfeisy" ><font color=#A60000>З</font>ащита<a>


</div>

<!--Пункт Абоненты-->

 <div style="width: 200px; height:200px; position:absolute; left:660px; top:8px; border: none; background:none;">
<a class="design" href="#crypto" ><font color=#A60000>А</font>боненты</a>

</div>

<!--Пункт выход-->

 <div style="width: 150px; height:200px; position:absolute; left:860px; top:8px; border: none; background:none;">
<a class="design" href='indexadmvn.php' ><font color=#A60000>В</font>ыход</a>


</div>

</div>
	
	 <div id="okno">

	 
    </div>
<?php 

//$_SESSION['IPVN']=$_POST["IPVN"]; if(isset($_POST['IPVN'])) {mysql_query("UPDATE `router` SET `IPVN`='".$_SESSION['IPVN']."' WHERE `SID`='".$_SESSION['SID']."' ");}
//$_SESSION['IPNAR']=$_POST["IPNAR"]; if(isset($_POST['IPNAR'])) {mysql_query("UPDATE `router` SET `IPNAR`='".$_SESSION['IPNAR']."' WHERE `SID`='".$_SESSION['SID']."' ");}

?> 
	
	<div id="okno1">
      <a href="#" class="close">Закрыть окно</a>
    </div>
	
	<div id="okno2">
	<center> <form id="pass" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="style="font:14px 'Lucida Console';"border: 1px solid white;">
	<td style="font:14px 'Lucida Console';">Пароль</td>
	<td><input style="font:14px 'Lucida Console'; background:none; border:none;" name="pass"></input></td>
	</tr>
	</table>
	 </form></center>
    </div>
	
	<div id="interfeisy" style="width:60%; position:absolute; align:auto; left:150px; top:100px; height:20%;">
	<center>
	<table style="font: 14px 'Lucida Console'; border: 1px solid white; width:100%; height:100%" cellspacing="0">
	<td><center><font color="white">&nbsp<p>&nbsp&nbsp&nbspВнутренний маршрутизатор не может менять конфигурацию узла!&nbsp&nbsp&nbsp<br>Для этой цели воспользуйтесь наружным маршрутизатором.<p>&nbsp</font></center></td> 
	</table>
	</center>
    </div>


<p>
<div id="text" style="border: 1px solid black; height: 400px;" align="center" cellpadding="50%>
<pre style="font:14px 'Lucida Console'">



<textarea type="text" id="console" name="console" readonly style="font:14px 'Lucida Console'; width: 100%; height:100%; position:absolute; top:15%; left:60px; border: none; background:none; z-index:-1;">
</textarea>


<form id="shell" method="post">
<input type="text" id="var1" name="var1" placeholder="#" style="font:14px 'Lucida Console'; width: 100%; height:10%;  position:absolute; top:400px; left:60px; border: none; background:none;" />
</form>

</pre>
</div>
<div style="text-align:center; width: 70px; height: 20px; position:absolute; top: 440px; right:30px; border: none; background:#30BFBF; z-index:1;"><font color="white" style="font:14px 'Lucida Console'">
<script>Data = new Date();
Hour = Data.getHours();
Minutes = Data.getMinutes();
Seconds = Data.getSeconds(); 
document.write(Hour+":"+Minutes+":"+Seconds);</script></font></div>  
</body>
</html>