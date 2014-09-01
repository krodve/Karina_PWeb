<?php

include_once("includes/database.php");

echo "<h1>Listado de Notas</h1><br></br>";

$query="SELECT * FROM estudiantes_web.notas";
$resultado = mysqli_query($conexion,$query);

//convierto variable resultado en array, guarda cada objeto en una variable row
while ($row = mysqli_fetch_array($resultado)) {
	//print_r($row);
	echo $row["ID_Nota"]." ".$row["Nombre"]." ".$row["Porcentaje"];
	echo "<br></br>";
}

?>