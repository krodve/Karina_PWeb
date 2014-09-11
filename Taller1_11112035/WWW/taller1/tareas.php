<?php


include_once("includes/database.php");

$query="SELECT * FROM getiondetareas.tareas";
$resultado=mysqli_query($cxn,$query);


		echo"<table border='1' style='width:500px'>";
		echo"<th>Nombre Tarea</th>";
		echo"<th>Descripcion</th>";
		echo"<th>Fecha de Creacion</th>";
		echo"<th>Finalizacion</th>";
		echo"<th>prioridad</th>";

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo "<td>".$row['Nombre Tarea']." ". "</td>";
    echo "<td>".$row['Descripcion']." ". "</td>";
    echo "<td>".$row['Fecha de Creacion']." ". "</td>";
    echo "<td>".$row['Finalizacion']." ". "</td>";
    echo "<td>".$row['Prioridad']." ". "</td>";
 echo"</tr>";
}

?>
</body></html>