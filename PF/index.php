<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ProyectoFinal</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body style="background-color:cornsilk;">
         <script>
             mensaje();
	function mensaje()
	{
	       alert ("BIENVENIDO AL SEGUNDO HOGAR DE SU MASCOTA ¡¡K9 SUITE!!");    
        }
        function nueva(url){
            window.location.href = url;
        }
</script>
<form onsubmit="return mensaje()" action="signIn.php" >
    <div class='miBoton'>
<input type="submit" value="SIGN IN" class='btn btn-info'/>  
    </div>
    <div>
<label id="titulo">HOTEL CANINO- K9 SUITE! </label><br><br> 
<img src="http://img.ifreepic.com/930/32930_icon.jpg" alt="Dog anime" style="width:304px;height:228px;" id="imagen">
<img src="https://image.freepik.com/iconos-gratis/huella-de-perro-en-un-corazon_318-38076.jpg" alt="Dog anime" style="width:50px;height:40px;" id="indicacion"><label id="indicacion">De click en la huella de lo que quiera ingresar </label>
<br><br><input type=image src="https://image.freepik.com/iconos-gratis/huella-de-perro-en-un-corazon_318-38076.jpg" width="50" height="40" id="letras" onclick="nueva(http://localhost/ProyectoFinal/informacion.php)"><label id="letras"><a href="informacion.php" target="_blank">Informacion de Servicios </a></label><br><br>
<input type=image src="https://image.freepik.com/iconos-gratis/huella-de-perro-en-un-corazon_318-38076.jpg" width="50" height="40" id="letras"><label id="letras"><a href="registro.php" target="_blank"> Registro</a> </label> <br><br>
<input type=image src="https://image.freepik.com/iconos-gratis/huella-de-perro-en-un-corazon_318-38076.jpg" width="50" height="40" id="letras"><label id="letras"><a href="servicios.php" target="_blank">Usuario Ocasional</a> </label> <br><br>
<input type=image src="https://image.freepik.com/iconos-gratis/huella-de-perro-en-un-corazon_318-38076.jpg" width="50" height="40" id="letras"><label id="letras"><a href="galeria.php" target="_blank">Galeria </a> </label> <br><br>
</div>

    .

</form>  
     
    </body>
</html>
