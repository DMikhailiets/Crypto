<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=1251">
    <title>КМ оператор нар</title>

 <link rel="stylesheet" href="css.css" type="text/css">
<script language="javascript" src="jsind.js" type="text/javascript"></script>
 </head>
 
  <body style="height: 100%;" bgcolor="#C5C5C5">
<div style="text-align:center; width: 70px; height: 20px; position:absolute; top: 40px; left:30px; border: none; background:#C5C5C5; z-index:1;"><font color="#A60000" style="font:14px 'Lucida Console'">Система</font></div>  

<a id="seg" href="indexvn.php" onclick="changeseg()" href="#" style="text-align:center; width: 90px; height: 20px; position:absolute; top: 40px; right:30px; border: none; background:green; z-index:1; text-decoration:none; color: white;">Наружный</a>
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
	<li><a class="design" href="#okno2"><font color="#A60000">А</font>дминистратор</a></li>
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
			<li><a class="design" href="#okno"><font color="#A60000">О</font>сновные&nbspконстанты</a></li>
				<a class="design" onclick="toggle(document.getElementById('sub-menu11'))" href="#3"><font color="#A60000">П</font>араметры TCP/IP</a>
	<ul id="sub-menu11" style="display:none">	
		<div style=" width:400px; position:absolute; top:5px; left: 255px; border: none; background:none;  box-shadow: 5px 5px 0px -1px #000000;">
			<li><a class="design" style="font:11px 'Lucida Console';">
				<form method="POST" action=""><p style="text-align: right; display:inline">Собственный IP наружн.:</p><input  value="<?php echo $_SESSION['ans']['IPNAR'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPNAR"></input></form>
				<form method="POST" action="">внутр.:<input value="<?php echo $_SESSION['ans']['IPVN'];?>" style="font:13px 'Lucida Console'; background:none; border:none;" name="IPVN"></input></form></p></a></li>
			
			<li><a class="design" href="#TTL" style="font:13px 'Lucida Console';">Время жизни IP-датаграмм&nbsp(<font color="#A60000">T</font>TL) :<font color="black"> 32</font></a></li>
			<li><a class="design" href="#MSS" style="font:13px 'Lucida Console';">Макс. размер TCP-пакета&nbsp(<font color="#A60000">M</font>SS) :<font color="black"> 512</font></a></li>
			<li><a class="design" href="#Win" style="font:13px 'Lucida Console';">Размер TCP-окна&nbsp(<font color="#A60000">W</font>indow) :<font color="black"> 8192</font></a></li>

		</div>	
	</ul>
			<li><a class="design" href="#okno">T<font color="#A60000">р</font>ассировка</a></li>
			<li><a class="design" href="#okno">Передача на <font color="#A60000">S</font>LAVE</a></li>

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
<a class="design"><font color="gray">Настройка</font></a>
</div>

<!--Пункт Криптография-->

 <div style="width: 200px; height:200px; position:absolute; left:660px; top:8px; border: none; background:none;">
<a class="design"><font color="gray">Криптография</font></a>

</div>

<!--Пункт Сервис-->

 <div style="width: 150px; height:200px; position:absolute; left:860px; top:8px; border: none; background:none;">
<a class="design" href="#service" ><font color=#A60000>С</font>ервис</a>


</div>


</div>
	
	<div id="okno">
	<form method="POST" action="">
	<table  border="1" cellpadding="2" cellspacing="0" style="style="font:14px 'Lucida Console';"border: 1px solid white;">
	<td style="font:14px 'Lucida Console';">Ping</td>
	<td><input style="font:14px 'Lucida Console'; background:none; border:none;" name="PING"></input></td>
	</table>
	</form>
    </div>
	
	<div id="okno1">
      <a href="#" class="close">Закрыть окно</a>
    </div>
	
	<div style="align:auto; top:200px; left:300px" id="okno2">
	<center> <form id="pass" method="POST">
	<table  border="1" cellpadding="2" cellspacing="0" style="style="font:14px 'Lucida Console';"border: 1px solid white;">
	<td style="font:14px 'Lucida Console';">Пароль</td>
	<td><input autofocus type="password" style="font:14px 'Lucida Console'; background:none; border:none;" name="pass"></input></td>
	</tr>
	</table>
	 </form></center>
	 	<?php $_SESSION['flagadm']=false; $_SESSION['pass']="none"; $_SESSION['pass'] = $_POST["pass"]; 
		if ($_SESSION['pass']=="adm"&&$_SESSION['flagadm']==false)
		{echo '<script>location.replace("indexadmnar.php")</script>'; $_SESSION['flagadm']=true;}
		else echo '<script>location.replace("#")</script>';?>
    </div>


<p>
<div id="text" style="border: 1px solid black; height: 400px;" align="center" cellpadding="50%>
<pre style="font:14px 'Lucida Console'">

<textarea type="text" id="console" name="console" readonly style="font:14px 'Lucida Console'; width: 100%; height:100%; position:absolute; top:15%; left:60px; border: none; background:none; z-index:-1;"></textarea>

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