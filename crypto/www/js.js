
<!--Открыть/закрыть меню-->
function toggle(el)
{
	el.style.display = (el.style.display == 'none') ? 'block' : 'none';
}

<!--Прочитать файл на сервере-->
		 
		 		 function file_get_contents() {
	var url ="http://localhost/crypto/cookies.txt";
	var req = null;
	try { req = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
		try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {
			try { req = new XMLHttpRequest(); } catch(e) {}
		}
	}
	if (req == null) throw new Error('XMLHttpRequest not supported');

	req.open("GET", url, false);
	req.send(null);
	
	
	return Number(req.responseText);
}


<!--Обработчик нажатий-->

  document.onkeydown = function(e){
  e = e || window.event;
  <!--main menu-->
  if(e.keyCode === 75) {toggle(document.getElementById('sub-menu'));}
    <!--sub menu-->
	if(e.keyCode === 84) {toggle(document.getElementById('sub-menu11'));}

  if(e.keyCode === 68) {toggle(document.getElementById('sub-menu2'));}
  if(e.keyCode === 80) {document.location.href = "#ports";}
  if(e.keyCode === 78) {document.location.href = "#nastroika";}
  if(e.keyCode === 75) {document.location.href = "#crypto";}
  if(e.keyCode === 83) {document.location.href = "#service";}

  if(e.keyCode === 27) {document.location.href = "#";}
  if(e.keyCode === 71) {document.location.href = "#okno";}
  if(e.keyCode === 00) {document.location.href = "#okno";}
  if(e.keyCode === 72) {addtext();}
  if(e.keyCode === 114){segment=true; changeseg();}
  if(e.keyCode === 115){segment=false; changeseg();}

  
  }

 <!--Вставка текста в командную строку-->

 

function addtext(){
	  var flag = true;
	  var ip = '123';
	   var amount = document.getElementById('console');
	  amount.value="Обмен пакетами с "+ip+" с 32 байтами данных: \n\n";
	  var i=0;
	  if (!flag)
	(function iterate(i) {
     amount.innerHTML += "Превышен интервал времени ожидания."+'\n\n';
	  if (i < 5) {
            setTimeout(function() { iterate(i + 1); }, 100);
        }
	 })(0);
	   
	  else 
	(function iterate(i) {
     amount.innerHTML += "Превышен интервал времени ожидания."+'\n\n';
	  if (i < 5) {
            setTimeout(function() { iterate(i + 1); }, 100);
        }
	 })(0);
	  
 }
 
  
  document.getElementById('adres').submit();

   <!--Смена внутреннего и внешнего-->

  var segment = false;
     function changeseg() {
		 if(segment){
			document.getElementById('seg').style.background="red";
		 	document.getElementById('seg').innerHTML="Внутренний";
			
		 }
		else {
			document.getElementById('seg').style.background="green";
		 	document.getElementById('seg').innerHTML="Наружный";

		 }
}