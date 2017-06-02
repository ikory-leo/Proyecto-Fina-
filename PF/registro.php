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
   <body style="background-color:#3db9a9;">
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
    #titulo{
    background-color:red;
    color: white;  
    border: 1px solid black;
    padding: 20px;
    margin: 30px;
    position: relative;
    top: 70px;
    left: 550px;
    font-size: 50px;
    font-family:new times roman;
       }
.centrado{
    position: relative;
    top: 100px;
    left: 480px;
}
#boton{
    border: 5px solid #3d76b9;
font-size: 30px;
position: relative;
left: 250px;
font-family:algerian;
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

</style>
<form onsubmit="return mensaje()" action="procesarregistro.php" enctype="multipart/form-data" action="uploader.php" method="POST">
<label id="titulo">ModIn </label><br><br>     
<div class="centrado">
<label id="letras">Nombre: </label> 
<input type="text" name="nombre" id="cuadro"><br><br>
<label id="letras">Telefono: </label> 
<input type="text" name="telefono" id="cuadro"><br><br>
<label id="letras">Email: </label> 
<input type="text" name="email" id="cuadro"><br><br>
<label id="letras">Clave: </label> 
<input type="password" name="clave" id="cuadro2"><br><br>
<label id="letras"> Confirmar clave: </label> 
<input type="password" name="clave" id="cuadro"><br><br>
<input type="submit" value="Registrar" id="boton" action="Continuar.php" >
</div>
</form>  
    </body>
</html>
