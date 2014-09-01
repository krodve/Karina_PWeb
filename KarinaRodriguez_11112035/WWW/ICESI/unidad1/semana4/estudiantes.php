<!DOCTYPE html>
<html>
<head>
	<title>Listado de Estudiantes</title>
	<meta charset = "utf-8">
</head>
<body>

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


<h1>Crear un nuevo estudiante</h1> 
<!-- //carga archivo en la web -->
<form action="includes/crearEstudiante.php" >
	<label>Nombre</label>	<input type="text" name="Nombre"></input>	</br>
	<label>Apellido</label>	<input type="text" name="Apellido"></input>	</br>
	<label>Código</label>	<input type="text" name="Codigo"></input>	</br>
	<label>Correo</label>	<input type="text" name="Correo"></input>	</br>
	<input type="submit" value="Enviar"> 
</form>

</body>
</html>