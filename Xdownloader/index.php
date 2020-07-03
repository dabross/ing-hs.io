<html>
<head>
<!---->
<meta name="viewport" content="width=500, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
<style>
body{
  max-width: 150%;
  height: auto;
  background-image:url('http://sfwallpaper.com/images/ayanami-rei-wallpaper-27.jpg');


/* Ubicación de la imagen *

background-image: url(images/background-photo.jpg);

/* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */

background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;

/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size: cover;

/* Se muestra un color de fondo mientras se está cargando la imagen

de fondo o si hay problemas para cargarla */

background-color: #66999;

}





</style>
		</head>

<body>
  <!-- adxxx-verification-code:0bd37bf4fc99b32ebc41b114387a9543 -->
        <nav class="navbar navbar-light bg-light">
                <!--<img src="objetos/beautiful.jpg"   height="50" width="50" class="img-circle">--><a class="navbar-brand">X Downloader 
                    
                </a>
                <form class="form-inline" action="" method="POST">
                  <input class="form-control mr-sm-2" type="search" placeholder="link of xvideos" aria-label="Search" name="Xv" autocomplete="off">
                  <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
				  <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
              </nav>



</form>
<center>

<?php
error_reporting(0);
if($Xv=$_POST['Xv']){
$lineas= file_get_contents($Xv);
$palaba="html5player.setVideoUrlHigh";
//$s_palabra="html5player.setVideoHLS";
$ls=strstr($lineas,$palaba);
//$lsl=strstr($lineas,$s_palabra); 
$caracter =array("html5player.setVideoHLS","html5player.setVideoUrlHigh","(",")","'",";","html5player.setThumbUrl","[","<script>","</script>","<body>","</body>","<html>","</html>");
$xas = array("<!--"); 
$ram=str_replace($caracter, $xas, $ls);
//$rem=str_replace("html5player.setVideoHLS", "<!--",$lsl);
//echo "<button onclick='document.location.href=>".$ram.">Download</button>";

echo "<br/><video controls=''  src=$ram  > <br/>";
//echo "-->";
}
elseif($Xv=$_POST['Xv'] == Null){
echo "<br /><h3Introduce un link de xvideos.com para descargar</h3> ";
}

else{
echo "<br /><h3>Introduce un link de xvideos.com para descargar</br>";

}
?>
<?php echo "</center>";?>
</br>

</html>
