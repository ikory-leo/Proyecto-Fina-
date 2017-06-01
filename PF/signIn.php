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
<style>
.centrado{
    position: relative;
    top: 200px;
    left: 520px;
}
#botonr{
border: 5px solid mediumorchid;
font-size: 30px;
position: relative;
left: 165px;
font-family:freestyle script;
}
#cuadro{
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
        <form  action="procesarSignIn.php" enctype="multipart/form-data" action="uploader.php" method="POST">
<label id="titulo">HOTEL CANINO- K9 SUITE! </label><br><br>     
<div class="centrado">
<label id="letras">Nombre mascota: </label> 
<input type="text" name="nombrem" id="cuadro"><br><br>
<label id="letras">Nombre propietario: </label> 
<input type="text" name="nombrep" id="cuadro"><br><br>
<label id="letras">Clave: </label> 
<input type="text" name="clave" id="cuadro"><br><br>
<input type="submit" value="SIGN IN" id="botonr">
</div>
        </form>
    </body>
</html>
