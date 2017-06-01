<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color:cornsilk;">
<script>
	function mensaje()
	{
	var a= document.getElementById('cuadro2');
	longitud=(a.value.length)
        if(longitud>8){
            return 1;
           
        }
        alert ("la clave tiene que tener minimo 8 caracteres");    
        return 0;
	}
</script>
<style>
.centrado{
    position: relative;
    top: 100px;
    left: 480px;
}
#boton{
border: 3px solid mediumorchid;
font-family:freestyle script;
font-size: 20px;
}
#botonr{
border: 5px solid mediumorchid;
font-size: 30px;
position: relative;
left: 250px;
font-family:freestyle script;
}
#cuadro{
border: 4px solid powderblue;
font-size: 20px;
}
#cuadro2{
border: 4px solid powderblue;
font-size: 20px;
}
#letras{
font-size: 18px;
font-family:arial;
}
#titulo{
    background-color:mediumorchid;
    color: powderblue;
    border: 1px solid black;
    padding: 20px;
    margin: 30px;
    position: relative;
    top: 40px;
    left: 480px;
    font-size: 50px;
    font-family:freestyle script;
       }  
</style>
<form onsubmit="return mensaje()" action="procesarregistro.php" enctype="multipart/form-data" action="uploader.php" method="POST">
<label id="titulo">HOTEL CANINO- K9 SUITE! </label><br><br>     
<div class="centrado">
<label id="letras">Nombre mascota: </label> 
<input type="text" name="nombrem" id="cuadro"><br><br>
<label id="letras">Edad mascota: </label> 
<input type="text" name="edadm" id="cuadro"><br><br>
<label id="letras">Nombre propietario: </label> 
<input type="text" name="nombrep" id="cuadro"><br><br>
<label id="letras">Telefono fijo/ celular: </label> 
<input type="text" name="telefonof" id="cuadro"><input type="text" name="telefonoc" id="cuadro"><br><br>
<label id="letras">Direccion de residencia </label> 
<input type="text" name="direccion" id="cuadro"><input type="submit" value="confirmar" id="boton"><br><br>
<label id="letras">Email: </label> 
<input type="text" name="email" id="cuadro"><br><br>
<label id="letras">Tipo de identificacion: </label> 
<INPUT type="radio" name="mibotondeopcion" checked value="1"> C.C
<INPUT type="radio" name="mibotondeopcion" value="2"> T.I
<label id="letras">     Numero de identificacion: </label> 
<input type="text" name="numiden" id="cuadro"><br><br>
<label id="letras">Estrato: </label> 
<input type="text" name="estrato" id="cuadro"><br><br>
<label id="letras">Clave: </label> 
<input type="password" name="clave" id="cuadro2"><br><br>
<label id="letras"> Confirmar clave: </label> 
<input type="password" name="clave" id="cuadro"><br><br>
<label id="letras">Foto de su mascota </label> 
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" /><br><br><br><br>
<input type="submit" value="Registrarme" id="botonr">
</div>
</form>  
    </body>
</html>
