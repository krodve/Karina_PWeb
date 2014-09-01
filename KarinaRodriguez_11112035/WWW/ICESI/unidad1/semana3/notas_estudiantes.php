<?php

include_once("includes/database.php");

echo "<h1>Notas de Estudiantes</h1><br></br>";

$query = "SELECT estudiantes_web.estudiantes.Nombre AS Nombre, estudiantes_web.notas.nombre AS NombreDeLaNota, estudiantes_web.notas_estudiante.valor_nota AS ValorDeLaNota FROM estudiantes_web.notas_estudiante JOIN estudiantes_web.estudiantes ON estudiantes_web.notas_estudiante.codigo_estudiante =estudiantes_web.estudiantes.Codigo JOIN estudiantes_web.notas ON estudiantes_web.notas_estudiante.ID_Nota = estudiantes_web.notas.ID_Nota";

$resultado = mysqli_query($conexion,$query);

//convierto variable resultado en array, guarda cada objeto en una variable row
while ($row = mysqli_fetch_array($resultado)) {
	//print_r($row);
	echo $row["Nombre"]." ".$row["NombreDeLaNota"]." ".$row["ValorDeLaNota"];
	echo "<br></br>";
}
//colocar ebn el formato 
?>