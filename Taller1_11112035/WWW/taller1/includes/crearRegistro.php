<?php

include_once("database.php");

$nombre = $_POST ["Nombre"];
$apellido = $_POST ["Apellido"];
$codigo = $_POST ["Contraseña"];
$codigo = $_POST ["Codigo"];
$correo = $_POST ["Correo"];
$universidad = $_POST ["Universidad"];
$carrera = $_POST ["Carrera"];

echo "<h1>Bienvenido</h1>".$nombre;

$query = "INSERT INTO gestiondetareas.registrados (`Nombre`, `Apellido`, `Contraseña`, `Correo`, `Codigo`, `Carrera`, `Universidad`) VALUES ('$nombre','$apellido','$contraseña','$correo','$codigo','$carrera','$universidad')";
$resultado=mysqli_query($cxn,$query);

echo"<a href = 'registrados.php'><button type='button'>Regresar</button></a>";

?>