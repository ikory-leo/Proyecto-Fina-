<?php

$enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'formulario', 3306);
$cadena="INSERT INTO `formulario`.`registro`
(`nombreMascota`,
`edadMascota`,
`nombrePropietario`,
`telefonoFijo`,
`telefonoCelular`,
`direccion`,
`email`,
`numero de identificacion`,
`estrato`,
`clave`,
`confirmacion`)
VALUES
('".$_REQUEST['nombrem']."','".$_REQUEST['edadm']."','".$_REQUEST['nombrep']."','".$_REQUEST['telefonof']."','".$_REQUEST['telefonoc']."','".$_REQUEST['direccion']."','".$_REQUEST['email']."','".$_REQUEST['numiden']."','".$_REQUEST['estrato']."','".$_REQUEST['clave']."','".$_REQUEST['clave']."')";

echo $cadena;
mysqli_query($enlace, $cadena);