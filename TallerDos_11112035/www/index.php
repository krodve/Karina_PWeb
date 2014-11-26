<!-- conectando PHP -->

<?php 
require_once('includes/database.php');
session_start();

//variables de session
//para saber si esta conectado, 1 o 0
if(!isset($_SESSION['conconet'])){
    $_SESSION['conconet']=0;
}

//pasa el nombre del cliente

if(!isset($_SESSION['nombreUsuario'])){
$_SESSION['nombreUsuario']="";
}

//pasa el id del cliente
if(!isset($_SESSION['ide'])){
$_SESSION['ide']=0;
}

//pasa el id del articulo seleccionado

if(!isset($_SESSION['articulo'])){
$_SESSION['articulo']="";
}
?>
<!-- Fin PHP -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
	<title>Niponan!</title>

	<link rel="stylesheet" href="css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Inicio PHP -->
<?php

//toma el id de la variable de sesion
$id=$_SESSION['ide'];

//si esta conectado entonces dice cuantos items hay en el carrito
if($_SESSION['conconet']>0){
$query= "SELECT COUNT(ide) FROM `agregaralcarrito` WHERE compraonline.agregaralcarrito.ideUsuario = $ide ";
$result= mysqli_query($con,$query);
$count = mysqli_fetch_array($result);
	//echo"<a class='carritoH' href='carrito.php'>CARRITO:$count[0] items</a> ";
}

//toma el nombre de la variable de session
$nombre= $_SESSION['nombreCliente'];

//si esta conectado un usuario entonces muestra el boton de logout y el nombre, sino muestra login
if ($_SESSION['contador']>0) {
echo"<a href='logout.php' class='logout'>LOGOUT</a>"; 
echo"<a href='perfil.php' class='nombreCliente'>$nombre</a>";
}else{
   echo" <a href='login.php?paginaDestino=index.php' class='login'>LOGIN</a> ";
}
?>
<!-- Inicio PHP -->

<header class="headerUno">
    <div class="logo">
        <a href="index.html"><figure class="headerLogo"><img src="images/logo.png"></figure></a>
    </div>
    <div class="inicioSesion">
        <a href="login.php">Iniciar Sesión</a>
	</div>
</header>

<div class="enlacesHeader">
	<nav>
        <a href="index.php">Inicio</a> /
        <a href="perfil.php">Mi Perfil</a> /
        <a href="catalogo.html">Catalogo</a> /
        <a href="carrito.php">Carrito</a> 

        <?php
        //si esta conectado entonces al darle en perfil se redigire al login    
        if($_SESSION['conconet']>0){
        //echo"<a href='perfil.php'>Perfil</a>"; 
    	}else{
        //echo"<a href='login.php?paginaDestino=perfil.php'>Perfil</a>";
        }        
        ?>

    </nav>
</div>
<section>
	<article>
	<div class ="inicio">
		<p>Inicio</p>
	</div>
	<div class ="portada">
		<figure>
			<img src="images/portada.png"></img>
		</figure>
	</div>
	</article>
</section>

<section class= "articulos">
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/01.png"></figure>
			<h5>Rilakkuma</h5>
			<h5>Peluche de Mesa</h5>
			<h5>$15000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/02.png"></figure>
			<h5>Shiro Sagisu</h5>
			<h5>Camiseta Estampada</h5>
			<h5>$35000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/03.png"></figure>
			<h5>Neko-Nyan</h5>
			<h5>Protector Nintendo 3DS</h5>
			<h5>$40000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/04.png"></figure>
			<h5>Berserk Skull</h5>
			<h5>Accesorio</h5>
			<h5>$50000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/05.png"></figure>
			<h5>Dolce Ed Una Ragazza</h5>
			<h5>Art Book</h5>
			<h5>$35000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/06.png"></figure>
			<h5>Lonely Girl</h5>
			<h5>Bolso de Mano</h5>
			<h5>$35000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/07.png"></figure>
			<h5>Sailor Moon</h5>
			<h5>Cosplay</h5>
			<h5>$40000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
<!-- Articulo separado en un cadro -->
	<article>
		<div class="item">
			<figure><img src="images/08.png"></figure>
			<h5>Final Fantasy</h5>
			<h5>Figura de Accion</h5>
			<h5>$80000</h5>
			<div> <a href="">Agregar al carrito</a> </div>
		</div>
	</article>
<!-- Fin del Articulo -->
</section>
</body>
</html>