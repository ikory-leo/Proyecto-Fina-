<?php

$enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'formulario', 3306);
$cadena="INSERT INTO `formulario`.`registro`
(`nombre`,
`telefono`,
`email`,
`clave`,
`confirmacion`)
VALUES
('".$_REQUEST['nombre']."','".$_REQUEST['telefono']."','".$_REQUEST['email']."','".$_REQUEST['clave']."','".$_REQUEST['clave']."')";

echo $cadena;
mysqli_query($enlace, $cadena);