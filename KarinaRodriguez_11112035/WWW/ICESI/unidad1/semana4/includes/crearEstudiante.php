<?php

include_once("database.php");

$nombre = @$_POST["Nombre"];
$apellido = @$_POST["Apellido"];
$codigo = @$_POST["Codigo"];
$correo = @$_POST["Correo"];
// Coloco el arroba porque investigue que es una manera de comprobar si las variables estan idefinidas o no
//para que no salga error

//echo "Mi nombre es".$Nombre;


$query = "INSERT INTO estudiantes_web.estudiantes ('Codigo', 'Nombre', 'Apellido', 'Correo') VALUES ('$codigo', '$nombre', '$apellido', '$correo')";
//echo $query;
$resultado = mysqli_query($conexion,$query);

?>