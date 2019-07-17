<?php
session_start();
	$_SESSION['IPVN'];
	$_SESSION['IPNAR'];
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
	
	if(!empty($_REQUEST["Int"]))
	{$_SESSION["IntName"] = $_REQUEST["Int"];}

	if(!empty($_REQUEST["Fil"]))
	{$_SESSION["F"] = $_REQUEST["Fil"];}
?>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ интерфейсы</title>

 <link rel="stylesheet" href="css.css" type="text/css">
<script language="javascript" src="jsset.js" type="text/javascript"></script>
 </head>
 
  <body style="height: 100%;" bgcolor="#C5C5C5">
<div style="text-align:center; width: 70px; height: 20px; position:absolute; top: 40px; left:30px; border: none; background:#C5C5C5; z-index:1;"><font color="#A60000" style="font:14px 'Lucida Console'">Система</font></div>  

<?php $_SESSION['ans']=mysql_fetch_array(mysql_query("SELECT * FROM router WHERE SID='".$_SESSION['SID']."'"));?>

<a id="seg" onclick="" href="settingsvn.php" style="text-align:center; width: 90px; height: 20px; position:absolute; top: 40px; right:30px; border: none; background:green; z-index:1; text-decoration:none; color: white;">Наружный</a>
<div style="width: 100%; height: 25px; position:relative; border: none; background:#30BFBF;">
<!--Пункт Параметры-->
<div style="width: 500px; height:200px; position:absolute; top:0px; left:0px; border: none; background:none;">
<a class="design" onclick="toggle(document.getElementById('sub-menu'))"><font color="#A60000">П</font>араметры</a>
<ul id="sub-menu" style="display:none">
<div style="position:absolute; top:25px; left:0px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000; z-index:2;">
	<li><a class="design"><font color="#A60000">О</font>сновные константы</a></li>
	<a class="design" onclick="toggle(document.getElementById('sub-menu11'))" href="#3"><font color="#A60000">П</font>араметры TCP/IP</a>
	<ul id="sub-menu11" style="display:none">	
		<div style=" width:400px; position:absolute; top:5px; left: 255px; border: none; background:none; display:inline;  box-shadow: 5px 5px 0px -1px #000000;">
			<li><a class="design" style="font:11px 'Lucida Console';">
				<form method="POST" action=""><p style="text-align: right; display:inline">Собственный IP наружн.:</p><input  value="<?php echo $_SESSION['ans']['IPNAR'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPNAR"></input></form>
				<form method="POST" action="">внутр.:<input value="<?php echo $_SESSION['ans']['IPVN'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPVN"></input></form></p></a></li>
			
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

	<li><a class="design" href="indexnar.php"><font color="#A60000">О</font>ператор</a></li>
	<li><a class="design" href="#okno2"><font color="#A60000">А</font>дминистратор</a></li>
	</div>
	</ul>
	<li><a class="design" href="#3"><font color="#A60000">Д</font>оступ</a></li>

</ul>
</div>			
</div>
<!--Пункт Интерфейсы-->
 <div style="width: 200px; height:200px; position:absolute; left:170px; top:8px; border: none; background:none;">
<a class="design" href="settingsnar.php#interfeisy" ><font color=#A60000>И</font>нтерфейсы</a>
</div>

<!--Пункт Службы-->

 <div style="width: 150px; height:200px; position:absolute; left:360px; top:8px; border: none; background:none;">
 
<a class="design"><font color=#A60000>С</font>лужбы</a>

</div>

<!--Пункт Защита-->

 <div style="width: 200px; height:200px; position:absolute; left:490px; top:8px; border: none; background:none;">
<a class="design" href="#nastroika" ><font color=#A60000>З</font>ащита<a>


</div>

<!--Пункт Абоненты-->

 <div style="width: 200px; height:200px; position:absolute; left:660px; top:8px; border: none; background:none;">
<a class="design" href="#crypto" ><font color=#A60000>А</font>боненты</a>

</div>

<!--Пункт выход-->

 <div style="width: 150px; height:200px; position:absolute; left:860px; top:8px; border: none; background:none;">
<a class="design" href='indexadmnar.php' ><font color=#A60000>В</font>ыход</a>


</div>

</div>
	
<?php 

$_SESSION['IPVN']=$_POST["IPVN"]; if(isset($_POST['IPVN'])) {mysql_query("UPDATE `router` SET `IPVN`='".$_SESSION['IPVN']."' WHERE `SID`='".$_SESSION['SID']."' ");}
$_SESSION['IPNAR']=$_POST["IPNAR"]; if(isset($_POST['IPNAR'])) {mysql_query("UPDATE `router` SET `IPNAR`='".$_SESSION['IPNAR']."' WHERE `SID`='".$_SESSION['SID']."' ");}
if(!empty($_SESSION['F'])) {mysql_query("UPDATE `router` SET `F`='".$_SESSION['F']."' WHERE `SID`='".$_SESSION['SID']."' ");}

?> 
	
	<div style="width:40%; padding: 15px;background-color:#30BFBF; margin: auto; z-index: 4; box-shadow: 15px 15px 0px -1px rgba(0, 0, 0, .8); position:absolute; align:static; left:290px; top:120px; height:40%;" >
     <center>
	<table cellpadding="5" cellspacing="0" style="position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
   <tr>
    <td style="width: 50%; border-bottom: 2px solid white; border-right:2px solid white;" colspan="2"><a style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">И</font>мя интерфейса&nbsp <font color="black" style=" font-weight:bold;"><?php echo $_SESSION['IntName']; ?></font></a></td>
	<td style="border-bottom: 2px solid white;" colspan="2"><center><a href="#interfeisy" style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Таблица <font color="#A60000">м</font>аршрутов</a></td>
   </tr>
   <tr>
   <td style="width:30%; border-bottom: 2px solid white; border-right:2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Тип &nbsp <font color="black" style=" font-weight:bold;"> Factor</font></td>
   <td style="border-bottom: 2px solid white;" colspan="3"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Режим активизации&nbsp <font color="black" style=" font-weight:bold;"> Статический</font></a></td>
   </tr>
   
   <tr>
   <td style="border-bottom: 2px solid white;" colspan="2"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">Л</font>окальный IP-адрес	&nbsp <font color="black" style=" font-weight:bold;"> </font></a></td>
   
   <td style="border-bottom: 2px solid white;" colspan="2"><form action=""  method="POST"><input name="Name"  value="<?php echo $_SESSION['ans'][$_SESSION['IntName']];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></td>
   
   
   
   <?php 
	$_SESSION['Name']=$_POST["Name"]; if(isset($_POST['Name'])) {mysql_query("UPDATE `router` SET `".$_SESSION['IntName']."`='".$_SESSION['Name']."' WHERE `SID`='".$_SESSION['SID']."' ");}

	?> 
   
   </tr>
    <tr>
	<td style="border-bottom: 2px solid white;" colspan="4"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:gray; border:none;">Допустимое время неактивности интерфейса &nbsp <font color="black" style=" font-weight:bold;">0</font></a></td>
   </tr>
   <tr>
   <td style="border-bottom: 2px solid white;" colspan="4"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Максимальный <font color="#A60000">р</font>азмер IP-датаграмм (MTU)&nbsp <font color="black" style=" font-weight:bold;">1500 </font></a></td>
   </tr>   
   <tr>
   <td style="width: 50%; border-bottom: 2px solid white; border-right:2px solid white;" colspan="2"><a href="#filter" style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Фильтр <font color="#A60000">в</font>ходящих </a></td>
   <td style="border-bottom: 2px solid white;" colspan="2"><a href="#filter" style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Фильтр ис<font color="#A60000">х</font>одящих </a></td>
   </tr>
   <tr>
   <td style="width: 50%; border-right:2px solid white;" colspan="2"><a style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">С</font>пециальные настройки</a></td> 
   <td colspan="2"><a href="#s" style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">Д</font>ополнительные параметры </a></td>
   </tr>

	</table>
	</center>
    </div>



	
	
	<div id="okno2">
	<center> <form id="pass" method="POST">
	<table  cellpadding="2" cellspacing="0" style="style="font:14px 'Lucida Console'; border: 1px solid white;">
	<td style="font:14px 'Lucida Console';">Пароль</td>
	<td><input style="font:14px 'Lucida Console'; background:none; border:none;" name="pass"></input></td>
	</tr>
	</table>
	 </form></center>
    </div>

	<div style="width:80%; padding: 15px;background-color:#30BFBF; margin: auto; z-index: 3; box-shadow: 15px 15px 0px -1px rgba(0, 0, 0, .8); position:absolute; align:static; left:50px; top:70px; height:60%;">
	<center>
	<table cellpadding="5" cellspacing="0" style="position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
   <tr>
    <td style="border-bottom: 2px solid white;" colspan="6"><text style="font-align:center; font-weight:bold; background:#DCDCDC; color:blue; ">Esc</text>&nbsp<font color="white">-&nbspвыход.</font></td>
   </tr>
   <tr>
	<td><font color="yellow">Имя</font></td><td><font color="yellow">Тип</td><td><font color="yellow">Локальный адрес </td><td><font color="yellow"> &rarr;  Удаленный адрес</td><td><font color="yellow">MTU</td><td><font color="yellow">Доп.параметры</td>
   </tr>
   <tr>
   <td><a href="#Ext1" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Ext1&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Ext1'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>
    <tr>
   <td><a href="#Ext2" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Ext2&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Ext2'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>
   <tr>
   <td><a href="#Ext3" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Ext3&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Ext3'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>   
   <tr>
   <td><a href="#Int" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Int1&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Int1'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>
   <tr>
   <td><a href="#Int2" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Int2&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Int2'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>
	<tr>
   <td><a href="#Int3" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>_Int3&nbsp&nbsp</td><td>s/Factor&nbsp&nbsp</td><td><?php echo $_SESSION['ans']['Int3'];?></td><td>&rarr;0.0.0.0</td><td>1500</td><td>Board=0</td>
   </tr>
   
   <tr>
    <td style="border-top: 2px solid white;" colspan="6"></td>
   </tr>
	</table>
	</center>
    </div>
	
	
	<div id="interfeisy" style="width:50%; position:absolute; align:auto; left:150px; top:100px; height:40%;">
	<center>
	<table cellpadding="5" cellspacing="0" style="position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
   <tr>
    <td style="border-bottom: 2px solid white;" colspan="4"><text style="font-align:center; font-weight:bold; background:#DCDCDC; color:blue; ">Esc</text>&nbsp<font color="white">-&nbspвыход.</font></td>
   </tr>
   <tr>
	<td><font color="yellow">----Адрес бит----</font></td><td><font color="yellow">--Адрес шлюза--</td><td><font color="yellow">Метрика</td><td><font color="yellow">Метка</td>
   </tr>
   <tr>
   <td><a href="Int.php?Int=Ext1" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>
   &nbsp&nbsp&nbsp&nbsp<?php echo substr($_SESSION['ans'][$_SESSION['IntName']], 0, strrpos($_SESSION['ans'][$_SESSION['IntName']], ".")); echo ".0/24";?></td>
   <td>&nbsp&nbsp&nbsp&nbsp&nbsp0.0.0.0</td>
   <td>&nbsp&nbsp&nbsp0</td>
	<td>&nbsp&nbsp&nbsp0</td>
   </tr>
	<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
    <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
	<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
   
   
	<tr>
    <td style="border-top: 2px solid white;" colspan="6"></td>
	</tr>
	</table>
	</center>

    </div>
	
	
	<div id="filter" style="width:30%; position:absolute; align:static; left:250px; top:70px; height:60%;">

	<table cellpadding="5" cellspacing="0" style="text-align:top; position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
     <tr>
     <td style="border-bottom: 2px solid white;"><text style="font-align:center; font-weight:bold; background:#DCDCDC; color:blue; ">Esc</text>&nbsp<font color="white">-&nbspвыход.</font></td>
     </tr>
     <tr>
	 <td> <a href="Int.php?Fil=1" style="position: absolute; width: 100%; left: 0px; height: 150%;"></a>WAN_IN</td>
	 </tr> 
     <tr>
	 <td> <a href="Int.php?Fil=2" style="position: absolute; width: 100%; left: 0px; height: 150%;"></a>WAN_OUT</td>
	 </tr> 
	 <tr>
	 <td> <a href="Int.php?Fil=3" style="position: absolute; width: 100%; left: 0px; height: 150%;"></a>LAN_IN</td>
	 </tr> 
	 <tr>
	 <td> <a href="Int.php?Fil=4" style="position: absolute; width: 100%; left: 0px; height: 150%;"></a>LAN_OUT</td>
	 </tr> 
	 <tr>
	 <td> <a href="Int.php?Fil=5" style="position: absolute; width: 100%; left: 0px; height: 150%;"></a>in_out</td>
	 </tr>
   <tr>
    <td style="border-top: 2px solid white;"></td>
   </tr>
	</table>

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