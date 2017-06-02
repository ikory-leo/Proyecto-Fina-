<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color:#3db9a9;">
<style>
.centrado{
    position: relative;
    top: 200px;
    left: 520px;
}
#boton{
border: 5px solid #3d76b9;
font-size: 10px;
position: relative;
left: 110px;
font-family:algerian;
}
#cuadro{
border: 4px solid red;
font-size: 20px;
}
    
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
       #enunciado{
font-size: 18px;
font-family:arial;
}   
</style>
<svg width=200 height=200>
<svg>
        <form  action="procesarSignIn.php" enctype="multipart/form-data" action="uploader.php" method="POST">
<label id="titulo">ModIn </label><br><br>     
<div class="centrado">
<label id="enunciado">Nick Name </label> 
<input type="text" name="nombrep" id="cuadro"><br><br>
<label id="enunciado">Password: </label> 
<input type="text" name="clave" id="cuadro"><br><br>
<input type="submit" value="SIGN IN" id="boton" action="Continuar.php" >
  
</div>
        </form>
    </body>
</html>
