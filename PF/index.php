<!DOCTYPE html>
<!--
http//jqueryui.com/download/
https://jquery.com/download/
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

    <head>

        <meta charset="UTF-8">
        <title>ModiIn</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        
    </head>
    <body style="background-color:#3db9a9;">
        <style>
            #Cubo {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}
#Cubo:before {
  content: "";
  position: absolute;
  top: -40px;
  left: 25px;
  width: 100px;
  height: 40px;
  background: green;
  -webkit-transform: skew(130deg,0deg);
     -moz-transform: skew(130deg,0deg);
       -o-transform: skew(130deg,0deg);
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}
#Cubo:after {
  content: "";
  position: absolute;
  top: -20px;
  left: 100px;
  width: 50px;
  height: 100px;
  background: orange;
  -webkit-transform: skew(0deg,-40deg);
     -moz-transform: skew(0deg,-40deg);
       -o-transform: skew(0deg,-40deg);
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}

        </style>

                 <script>

            // Tamaño de la imagen
$imImage = @imagecreate( 600, 100 );
// Color de fondo en RGB
$imFondo  = imagecolorallocate( $imImage, 255, 255, 255 );
// Color de relleno en RGB
$imRelleno = imagecolorallocate( $imImage, 141, 203, 61 );
// $imImage : identificador de la imagen creado
// 25: Coordenada horizontal del centro del ciruclo
// 25: Coordenada vertical del centro del circulo
// 50: Ancho del circulo
// 50: Alto del circulo
// $imRelleno: Color del relleno
imagefilledellipse( $imImage, 25, 25, 50, 50, $imRelleno );
// Cabecera php para mostrar imagenes
header("Content-type: image/png");
// Imprimimos la imagen en PNG
imagepng( $imImage );
// Liberamos la memoria usada para crear la imagen
imagedestroy( $imImage );
echo $imImage;
        </script>

    <div>
<label id="titulo">ModIn  </label><br><br>
<label id="tittle"><a href="registro.php" target="_blank"> Registro</a> </label> 
<label id="tittle"><a href="PreConi.php" target="_blank">Continuar sin registrarse</a> </label> 
<label id="tittle"><a href="Preguntas.php" target="_blank">Preguntas Frecuentes</a> </label> <br>
<form onsubmit="return mensaje()" action="signIn.php" >
    <div class='Boton'>
<input type="submit" value="SIGN IN" class='btn btn-info'/>
    </div>
<label id="tittle"><a href="informacion.php" target="_blank">Acerca de </a></label><br>
</div>

<div id="Cubo">            
    </div>   

</form> 

    </body>
</html>