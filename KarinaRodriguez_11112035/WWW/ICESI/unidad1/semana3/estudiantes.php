<?php

include_once("includes/database.php");

echo "<h1>Listado de Estudiantes</h1><br></br>";

$query="SELECT * FROM estudiantes_web.estudiantes";
$resultado = mysqli_query($conexion,$query);

//convierto variable resultado en array, guarda cada objeto en una variable row
while ($row = mysqli_fetch_array($resultado)) {
	//print_r($row);
	echo $row["Codigo"]." ".$row["Nombre"]." ".$row["Apellido"]." ".$row["Correo"];
	echo "<br></br>";
}

?>