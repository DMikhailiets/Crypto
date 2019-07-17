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
	
	if(!empty($_REQUEST["Tun"]))
	{$_SESSION["TunName"] = $_REQUEST["Tun"];}
?>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ тунелли</title>

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
<a class="design" href="#interfeisy" ><font color=#A60000>И</font>нтерфейсы</a>
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

?> 
	
	<div style="width:45%; padding: 15px;background-color:#30BFBF; margin: auto; z-index: 4; box-shadow: 15px 15px 0px -1px rgba(0, 0, 0, .8); position:absolute; align:static; left:290px; top:60px; height:65%;" >
     <center>
	<table cellpadding="5" cellspacing="0" style="position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
   <tr>
    <td style=" border-bottom: 2px solid white;" colspan="4"><a style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">О</font>писание</a></td>
   </tr>
   <tr>
   <td style="border-bottom: 2px solid white;" colspan="4"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">И</font>дентификатор туннеля <font color="black" style=" font-weight:bold;"><?php echo substr($_SESSION['TunName'],1); ?></font></a></td>
   </tr>
   
   <tr>
   <td style="border-bottom: 2px solid white;" colspan="2"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">Л</font>окальный IP-адрес	&nbsp <font color="black" style=" font-weight:bold;"> </font></a></td>
   
   <td style="border-bottom: 2px solid white;" colspan="2"><form action=""  method="POST"><input name="Name1"  value="<?php echo $_SESSION['ans'][$_SESSION['TunName']];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></td>
   

   </tr>
    <tr>
	 <td style="border-bottom: 2px solid white;" colspan="2"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">У</font>даленный IP-адрес	&nbsp </a></td>
   
   <td style="border-bottom: 2px solid white;" colspan="2"><form action=""  method="POST"><input name="Name2"  value="<?php $_SESSION['TunName2']=$_SESSION['TunName']."D"; echo $_SESSION['ans'][$_SESSION['TunName2']];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></td>
   </tr>

   <tr>
   <td style="width: 50%; border-bottom: 2px solid white; border-right:2px solid white;" colspan="2"><a href="#tunnel" style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">П</font>равила отбора</a></td>
   <td style="border-bottom: 2px solid white;" colspan="2"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">З</font>аголовок TNL</a></td>
   </tr>
   
   <tr> <td style="border-bottom: 2px solid white;width:5%;" rowspan="5"></td> <td style="width:60%;border-bottom: 2px solid white;border-left: 2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">
   <font color="black" style="font-weight:bold;">Шифрование потока   ДА</font></a></td><td style="border-bottom: 2px solid white;border-left: 2px solid white;"><a style=" text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">
   <font style="font-weight:bold;" color="black">vМПМ</font></a></td><td style="width:5%;border-left: 2px solid white; border-bottom: 2px solid white;" rowspan="5"></td></tr>
   
   <tr><td style="border-left: 2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">
   <font color="#A60000">Н</font>омер серии ключей </td><td><form action=""  method="POST"><input name="KEY"  value="<?php echo $_SESSION['ans']['KEY'];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></td></tr>
   <tr><td style="border-left: 2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">
	Ло<font color="#A60000">к</font>альный криптономер </a></td><td><font color="black" style=" font-weight:bold;"><form action=""  method="POST"><input name="LKN"  value="<?php echo $_SESSION['ans']['LKN'];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></font></td></tr>
   <tr><td style="border-left: 2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">
   У<font color="#A60000">д</font>аленный криптономер </a></td><td><font color="black" style=" font-weight:bold;"><form action=""  method="POST"><input name="UKN"  value="<?php echo $_SESSION['ans']['UKN'];?>" style="width:90%; font:bold 12px 'Lucida Console'; background:none; border:none;"></form></font></td></tr>
  

  <tr><td style="border-left: 2px solid white; border-bottom: 2px solid white;"><a style="text-decoration:none;display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Номер ключевой <font color="#A60000">з</font>оны&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></td>
   <td style="border-bottom: 2px solid white;"><font color="black" style=" font-weight:bold;">0</font></td></tr>
   
   <tr>
   <td style="width: 50%; border-right:2px solid white;" colspan="2"><a style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;">Конт<font color="#A60000">р</font>оль <font color="black" style=" font-weight:bold;">Нет</font></a></td> 
   <td colspan="2"><a href="#s" style="text-decoration:none; display:inline; font:13px 'Lucida Console'; color:#1506bd; border:none;"><font color="#A60000">М</font>етка <font color="black" style=" font-weight:bold;">0</font></a></td>
   </tr>
  
   <?php 
   
	$_SESSION['Name1']=$_POST["Name1"]; if(isset($_POST['Name1'])) {mysql_query("UPDATE `router` SET `".$_SESSION['TunName']."`='".$_SESSION['Name1']."' WHERE `SID`='".$_SESSION['SID']."' ");}
		
	$_SESSION['Name2']=$_POST["Name2"]; if(isset($_POST['Name2'])) {mysql_query("UPDATE `router` SET `".$_SESSION['TunName2']."`='".$_SESSION['Name2']."' WHERE `SID`='".$_SESSION['SID']."' ");}
	
	$_SESSION['KEY']=$_POST["KEY"]; if(isset($_POST['KEY'])) {mysql_query("UPDATE `router` SET `KEY`='".$_SESSION['KEY']."' WHERE `SID`='".$_SESSION['SID']."' ");}
	
	$_SESSION['LKN']=$_POST["LKN"]; if(isset($_POST['LKN'])) {mysql_query("UPDATE `router` SET `LKN`='".$_SESSION['LKN']."' WHERE `SID`='".$_SESSION['SID']."' ");}
	
	$_SESSION['UKN']=$_POST["UKN"]; if(isset($_POST['UKN'])) {mysql_query("UPDATE `router` SET `UKN`='".$_SESSION['UKN']."' WHERE `SID`='".$_SESSION['SID']."' ");}

?> 
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
    <td style="border-bottom: 2px solid white;" colspan="5"><text style="font-align:center; font-weight:bold; background:#DCDCDC; color:blue; ">Esc</text>&nbsp<font color="white">-&nbspвыход.</font></td>
   </tr>
   <tr>
	<td><font color="yellow">IID</font></td><td><font color="yellow">Локальный адрес </td><td><font color="yellow"> &rarr;  Удаленный адрес</td><td><font color="yellow">#N#</td><td><font color="yellow">Шифрование</td>
   </tr>
   <tr>
   <td><a href="Tun.php?Tun=T1" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>1</td><td><?php echo $_SESSION['ans']['T1'];?></td><td>&rarr;<?php echo $_SESSION['ans']['T1D'];?></td><td>0</td><td>(0)1002.5&rarr;7</td>
   </tr>
    <tr>
   <td><a href="Tun.php?Tun=T2" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>2</td><td><?php echo $_SESSION['ans']['T2'];?></td><td>&rarr;<?php echo $_SESSION['ans']['T2D'];?></td><td>0</td><td>(0)1002.5&rarr;7</td>
   </tr>
  
   <tr>
    <td style="border-top: 2px solid white;" colspan="5"></td>
   </tr>
	</table>
	</center>
    </div>
	
	
	<div id="tunnel" style="width:65%; position:absolute; align:auto; left:150px; top:100px; height:40%;">
	<center>
	<table cellpadding="5" cellspacing="0" style="position:relative; border: 2px solid white; width:100%; align:static; left:5px; top:5px; height:100%;">
   <tr>
    <td style="border-bottom: 2px solid white;" colspan="5"><text style="font-align:center; font-weight:bold; background:#DCDCDC; color:blue; ">Esc</text>&nbsp<font color="white">-&nbspвыход.</font></td>
   </tr>
   <tr>
	<td><font color="yellow">Режим</td><td><font color="yellow">Адрес отправителя</td><td><font color="yellow">Адрес получателя</td><td><font color="yellow">Протокол</td><td><font color="yellow">Порты</td>
   </tr>
   </tr>
   <tr>
   <td><a href="#" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>
   &nbspзапретить</td>
   <td>&nbsp&nbsp&nbsp&nbsp&nbsp0.0.0.0   /0</td>
   <td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo substr($_SESSION['ans'][$_SESSION['TunName']], 0, strrpos($_SESSION['ans'][$_SESSION['TunName']], ".")); echo ".0/24";?></td>
	<td>&nbsp&nbsp&nbspANY</td>
	<td>0-0</td>
   </tr>
     <tr>
   <td><a href="#" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>
   &nbspразрешить</td>
   <td>&nbsp&nbsp&nbsp&nbsp	<?php echo substr($_SESSION['ans'][$_SESSION['TunName']], 0, strrpos($_SESSION['ans'][$_SESSION['TunName']], ".")); echo ".0/24";?></td>
   <td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo substr($_SESSION['ans'][$_SESSION['TunName2']], 0, strrpos($_SESSION['ans'][$_SESSION['TunName2']], ".")); echo ".0/24";?></td>
	<td>&nbsp&nbsp&nbspANY</td>
	<td>0-0</td>
   </tr>
   <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
   <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
   
   
	<tr>
    <td style="border-top: 2px solid white;" colspan="5"></td>
	</tr>
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