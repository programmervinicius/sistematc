<!DOCTYPE html>
<html>
<head>
<html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>sistematc_category</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/imagen.css"> -->
</head>
<body>
<head>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: #006699;">
   <div class="container" >
   <div class="navbar-header" >
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
   <span class="sr-only">desplegar/ocultar menu</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a href="../index.php"><img src="../img/original.PNG" id="logo" class="img-rounded" width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="##" style="color: white;">Inicio</a></li>
        <li><a href="categoria.php" style="color: white;">Productos</a></li>
        <!--productos lista-->
        <li>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color: white;">
        	Categorias<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Categoria</a></li>
        <li><a href="#">Categoria2</a></li>
        <li><a href="#">Categoria3</a></li>
        </ul>
        </li>
        <!--productos lista-->
        <li><a href="##" style="color: white;">Clientes</a></li>
        <li><a href="##" style="color: white;">Acerca de</a></li>
        </ul>
   </div>

   </div>
</nav>
</head>

<section>
<?php

$valor=$_GET['id'];
//echo $valor."<br>";
//$ruta="../img/TC0001/";
include("conexion.php");
$con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");

//$re=mysql_query("select nombre,descripcion,costo from producto WHERE code='$a'")or die(mysql_error());
//select nombre_img, (select categoria from producto where producto.code=imagenes.clave) as relacion from imagenes

//consultas
$a=mysql_query("SELECT nombre,descripcion,costo FROM producto WHERE code='$valor'")or die(mysql_error());
$r=mysql_query("SELECT clave,nombre_img FROM imagenes WHERE clave='$valor'")or die(mysql_error());


while ($pdc=mysql_fetch_array($a)) {
?>
<h1 align="center"><?php echo $pdc['nombre']; ?></h1>
<h4 align="center"><?php echo $pdc['descripcion']; ?></h4>
<h5 align="center"><?php echo "PRECIO: $".$pdc['costo']; ?></h5>
<?php
}
//-----------------------------------------------------------------------------------------------
//impresión de la imagen
//$resp=mysql_query("SELECT nombre_img FROM imagenes WHERE clave='$a'") or die(mysql_error());
    while ($y=mysql_fetch_array($r)) {
      ?>
      <div class="pdc">
      <center>
      <?php
      ?>
        <img src="../img/<?php echo $y['clave'];?>/<?php echo $y['nombre_img'];?>" class="img-rounded"><hr>
        <center><a href="categoria.php" class="btn btn-primary">Regresar</a></center>
     <!-- <span><?php echo $y['nombre'];?></span><br>
      -->
        <?php 
  ?>
  </center>
  </div>

   <?php
    }
  ?>
</section>
</body>
</html>