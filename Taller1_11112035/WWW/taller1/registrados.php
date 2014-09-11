<!DOCTYPE html>
<html>
<head>
	<title>Gestor de Tareas</title>
	<meta charset="utf-8">
</head>
<body>
<H1>GESTOR DE TAREAS</H1>


<?php

include_once("includes/database.php");

$query="SELECT * FROM gestiondetareas.registrados";
$resultado=mysqli_query($cxn,$query);

/*

	echo"<table border='1' style='width:300px'>";
		echo"<th>Codigo</th>";
		echo"<th>Nombre</th>";
		echo"<th>Apellido</th>";
		echo"<th>Correo</th>";
		echo"<th>Carrera</th>";
		echo"<th>Universidad</th>";

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo "<td>".$row['Codigo']." "."</td>";
    echo "<td>".$row['Nombre']." "."</td>";
    echo "<td>".$row['Apellido']." "."</td>";
    echo "<td>".$row['Correo']." "."</td>";
    echo "<td>".$row['Carrera']." "."</td>";
    echo "<td>".$row['Universidad']." "."</td>";
 echo"</tr>";
}
	echo"</table>"
*/


?>
<H2>Iniciar Sesion</H2>
<br/>
	<section>
	<form action="includes/crearRegistro.php" method="POST">
	<label>Nombre</label><input type="text" name="Nombre" id="nombre">
	<br/>
	<label>Contraseña</label><input type="password" name="Contraseña" id="contraseña">
	<br/>
	<input type="submit" value="Entrar">
	</form>
	</section>
<H2>¿Eres Nuevo? Registrate</H2>
<br/>
	<section>
	<form action="includes/crearRegistro.php" method="POST">
	<label>Nombre</label><input type="text" name="Nombre" id="nombre">
	<br/>
	<label>Apellido</label><input type="text" name="Apellido" id="apellido">
	<br/>
	<label>Contraseña</label><input type="password" name="Contraseña" id="contraseña">
	<br/>
	<label>Codigo</label><input type="text" name="Codigo" id="codigo">
	<br/>
	<label>Correo</label><input type="text" name="Correo" id="correo">
	<br/>
	<label>Carrera</label><input type="text" name="Carrera" id="carrera">
	<br/>
	<label>Universidad</label><input type="text" name="Universidad" id="universidad">
	<br/>
	<input type="submit" value="Registrar">
	</form>
	</section>


</body>
</html>