

<!--Обработчик нажатий-->

  document.onkeydown = function(e){
  e = e || window.event;
  if(e.keyCode === 75) {toggle(document.getElementById('sub-menu'));}
  if(e.keyCode === 84) {toggle(document.getElementById('sub-menu11'));}
  if(e.keyCode === 73) {document.location.href = "#interfeisy";}
  if(e.keyCode === 80) {document.location.href = "#zashita";}
  if(e.keyCode === 78) {document.location.href = "#nastroika";}
  if(e.keyCode === 75) {document.location.href = "#crypto";}
  if(e.keyCode === 83) {document.location.href = "#service";}
  if(e.keyCode === 27) {document.location.href = "int.php#";}
  if(e.keyCode === 71) {document.location.href = "#okno";}
  if(e.keyCode === 00) {document.location.href = "#okno";}
  if(e.keyCode === 72) {addtext();}
  if(e.keyCode === 114){document.location.href = "settingsvn.php";}
  if(e.keyCode === 115){document.location.href = "settingsnar.php";}

  
  }
