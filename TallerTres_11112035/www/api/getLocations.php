<?php
	include "../includes/database.php";
	$tipo = $_POST['tipo'];

	$query = "SELECT nombre, latitud, longitud, id, tipo FROM sitios WHERE tipo=".$tipo;
	$result = mysqli_query($con, $query);

	$list = array();

    while($row=mysqli_fetch_array($result)){
        $list[] = $row;
    }

    print json_encode($list);
?>