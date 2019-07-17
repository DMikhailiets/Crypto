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
    <title>КМ адм наружный</title>

 <link rel="stylesheet" href="css.css" type="text/css">
<script language="javascript" src="jsindadm.js" type="text/javascript"></script>
 </head>
 
  <body style="height: 100%;" bgcolor="#C5C5C5">
<div style="text-align:center; width: 70px; height: 20px; position:absolute; top: 40px; left:30px; border: none; background:#C5C5C5; z-index:1;"><font color="#A60000" style="font:14px 'Lucida Console'">Система</font></div>  

<a id="seg" href="indexadmvn.php" onclick="changeseg()" href="#" style="text-align:center; width: 90px; height: 20px; position:absolute; top: 40px; right:30px; border: none; background:green; z-index:1; text-decoration:none; color: white;">Наружный</a>
<div style="width: 100%; height: 25px; position:relative; border: none; background:#30BFBF;">
<!--Пункт Консоль-->
<div style="width: 166px; height:200px; position:absolute; top:0px; left:0px; border: none; background:none;">
<a class="design" onclick="toggle(document.getElementById('sub-menu'))"><font color="#A60000">К</font>онсоль</a>
<ul id="sub-menu" style="display:none">
<div style="position:absolute; top:25px; left:0px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000; z-index:2;">
	<li><a class="design"><font color="#A60000">С</font>истема</a></li>
	<li><a class="design" href="#2"><font color="#A60000">П</font>орты</a></li>
	<a class="design" onclick="toggle(document.getElementById('sub-menu11'))" href="#3"><font color="#A60000">Т</font>естирование</a>
	<ul id="sub-menu11" style="display:none">	
		<div style="position:absolute; top:5px; left: 195px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000;">
			<li><a class="design" href="#okno"><font color="#A60000">P</font>ing</a></li>
			<li><a class="design" href="#okno">Trace&nbsp<font color="#A60000">r</font>oute</a></li>
			<li><a class="design" href="#okno">T<font color="#A60000">e</font>lnet</a></li>
			<li><a class="design" href="#okno"><font color="#A60000">D</font>NS-клиент</a></li>

		</div>	
	</ul>
	<li><a class="design" href="#3"><font color="#A60000">Ж</font>урнал</a></li>
	<li><a class="design" href="start.php"><font color="#A60000">В</font>ыход</a></li>
<a class="design" href="#3" onclick="toggle(document.getElementById('sub-menu12'))"><font color="#A60000">Р</font>ежим</a>
	<ul id="sub-menu12" style="display:none">
	<div style="position:absolute; top:105px; left: 195px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000;">
	<li><a class="design" href="indexnar.php"><font color="#A60000">О</font>ператор</a></li>
	<li><a class="design" href="#"><font color="#A60000">А</font>дминистратор</a></li>
	</div>
	</ul>
	<li><a class="design" href="#3"><font color="#A60000">Д</font>оступ</a></li>

</ul>
</div>			
</div>
<!--Пункт Диагностика-->
 <div style="width: 200px; height:200px; position:absolute; left:170px; top:8px; border: none; background:none;">
<a class="design" onclick="toggle(document.getElementById('sub-menu2'))" ><font color=#A60000>Д</font>иагностика</a>
<div style="position:absolute; top:25px; left:0px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000; z-index:2;">
<ul id="sub-menu2" style="display:none">
	<a class="design" onclick="toggle(document.getElementById('sub-menu21'))" href="#2"><font color=#A60000>П</font>араметры</a>	
		<ul id="sub-menu21" style="display:none">	
			<div style="position:absolute; top:20px; left: 195px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000; z-index:1;">
			
			
			<li><a class="design" href="#"><font color="#A60000">О</font>сновные&nbspконстанты</a></li>
			<li><a class="design" href="#">П<font color="#A60000">а</font>раметры TCP IP</a>
			<li><a class="design" href="#">T<font color="#A60000">р</font>ассировка</a></li>
			<li><a class="design" href="#">Передача на <font color="#A60000">S</font>LAVE</a></li>

		</div>	
		</ul>
	<li><a class="design" href="#2"><font color=#A60000>И</font>нтерфейс</a></li>
	<li><a class="design" href="#3"><font size="3,5"><font color=#A60000>Р</font>абочая&nbspтаблица</font></a></li>
	<li><a class="design" href="#3"><font color=#A60000>С</font>татистика</a></li>
	<li><a class="design" href="#3"><font color=#A60000>Т</font>уннели</a></li>
	<li><a class="design" href="#3"><font color=#A60000>N</font>AT</a></li>
	<li><a class="design" href="#3"><font color=#A60000>D</font>HCP</a></li>
</div>
</ul>
</div>

<!--Пункт Порты-->

 <div style="width: 150px; height:200px; position:absolute; left:360px; top:8px; border: none; background:none;">
 
<a class="design"><font color=#A60000>П</font>орты</a>

</div>

<!--Пункт Настройка-->

 <div style="width: 200px; height:200px; position:absolute; left:490px; top:8px; border: none; background:none;">
<a class="design" href="settingsnar.php" ><font color=#A60000>Н</font>астройка</a>


</div>

<!--Пункт Криптография-->

 <div style="width: 200px; height:200px; position:absolute; left:660px; top:8px; border: none; background:none;">
<a class="design" href="#crypto" ><font color=#A60000>К</font>риптография</a>

</div>

<!--Пункт Сервис-->

 <div style="width: 150px; height:200px; position:absolute; left:860px; top:8px; border: none; background:none;">
<a class="design" href="#service" ><font color=#A60000>С</font>ервис</a>


</div>


</div>
	
	 <div id="okno">
	<form method="POST" action="">
	<table cellpadding="2" cellspacing="0" style="font:14px 'Lucida Console'; border: 1px solid white; position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
	<td>Ping</td>
	<td><input style="font:14px 'Lucida Console'; background:none; border:none;	" name="PING"></input></td>
	</table>
	</form>
	 
    </div>



<p>
<div id="text" style="border: 1px solid black; height: 400px;" align="center" cellpadding="50%>
<pre style="font:14px 'Lucida Console'">
<p align="left">
<?php 
// Функция сравнения с IP
function filter($arg_1, $arg_2)
{ 	$count=0;
	$i=0;
	$f=true;
	
	while ($count!=2){
	
	if ($arg_1[$i]=='.') {$count++; $i++;}
	if ($arg_1[$i]==$arg_2[$i]) {$i++;} else {$f=false; break;}
	
	
	}
	
	return $f;
}

$_SESSION['ans']='0';
$_SESSION['self']='0';
$_SESSION['ping']=$_POST["PING"]; 
$_SESSION['flag']='0';


if(isset($_POST['PING'])) {$_SESSION['ans'] = mysql_fetch_array(mysql_query("SELECT * FROM router WHERE IPNAR='".$_SESSION['ping']."'")); $_SESSION['self'] = mysql_fetch_array(mysql_query("SELECT * FROM router WHERE SID='".$_SESSION['SID']."'"));}

if (($_SESSION['ans']['IPNAR']==$_SESSION['ping'])) $_SESSION['flag']='1';
// Задание условия пингования
 if ($_SESSION['self']['F']!='0') goto nar;
 if (!filter($_SESSION['self']['FD1'],$_SESSION['ping'])) goto nar;
 if (filter($_SESSION['self']['FS1'],$_SESSION['self']['IPNAR'])) $_SESSION['flag']='1'; goto nar;

	 
	 
if (($_SESSION['self']['FR'.$_SESSION['self']['F']]=='запретить')||($_SESSION['self']['FR'.$_SESSION['self']['F']]=='сбросить')) $_SESSION['flag']=false; else {if (($_SESSION['ping']==$_SESSION['ans']['IPNAR'])) {$_SESSION['flag']=false;}}

if(($_SESSION['ans']['F']!='0')&&($_SESSION['self']['FR'.$_SESSION['ans']['F']]=='разрешить'))
	{
		if (strpos(substr($_SESSION['ans'][$_SESSION['FD'.$_SESSION['ans']['F']]], 0, strrpos($_SESSION['ans'][$_SESSION['FD']], ".")),$_SESSION['ans']['IPNAR'])&&($_SESSION['ping']==$_SESSION['ans']['IPNAR'])&&(strpos(substr($_SESSION['ans'][$_SESSION['FS'.$_SESSION['ans']['F']]], 0, strrpos($_SESSION['ans'][$_SESSION['FS']], ".")),$_SESSION['ping'])))
			{$_SESSION['flag']=true;}
	}
else {if (($_SESSION['ans']['FR'.$_SESSION['ans']['F']]=='запретить')||($_SESSION['ans']['FR'.$_SESSION['ans']['F']]=='сбросить')) $_SESSION['flag']=false; else {if (($_SESSION['ping']==$_SESSION['ans']['IPNAR'])) {$_SESSION['flag']=false;}}}

nar:

if(isset($_POST['PING'])) {

if($_SESSION['flag']) {

    
    echo "&nbsp&nbspPinging: ".$_SESSION['ping']." (".$_SESSION['ping']."); data 64, interval 1 s:<br> &nbsp&nbsp&nbsp sent &nbsp&nbsp&nbsp rcvd &nbsp&nbsp % &nbsp&nbsp rtt &nbsp&nbsp&nbsp avg_rtt &nbsp&nbsp&nbsp mdev";
	echo "  <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1 &nbsp 100 &nbsp&nbsp".(rand ( 10 , 99 ))." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".(rand ( 10 , 99))."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0";
	echo "  <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2 &nbsp 100 &nbsp&nbsp".(rand ( 10 , 99 ))." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".(rand ( 10 , 99))."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0";
	echo "  <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  3 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3 &nbsp 100 &nbsp&nbsp".(rand ( 10 , 99 ))." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".(rand ( 10 , 99))."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0";
	echo "  <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  4 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4 &nbsp 100 &nbsp&nbsp".(rand ( 10 , 99 ))." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".(rand ( 10 , 99))."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0";
	
}

else {echo "Pinging: ".$_SESSION['ping']." (".$_SESSION['ping']."); data 64, interval 1 s:<br> &nbsp&nbsp&nbsp sent &nbsp&nbsp&nbsp rcvd &nbsp&nbsp % &nbsp&nbsp rtt &nbsp&nbsp&nbsp avg_rtt &nbsp&nbsp&nbsp mdev";
echo $_SESSION['test']; 
}}
else echo "&nbsp&nbspКанал 67 (ТСР) - открыт порт 80
<br>&nbsp&nbspКанал 67 (ТСР) - открыт порт 10
<br><br>
&nbspСИСТЕМА ГОТОВА К РАБОТЕ "
 
?> 
</p>
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
document.write(Hour+":"+Minutes+":"+Seconds);
window.location.rload();
</script></font></div>  
</body>
</html>