<!DOCTYPE html>
<html>
<head>
<html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>sistematc_category</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/imagen.css">
</head>
<body>
<head>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: #006699;">
   <div class="container" >
   <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
   <span class="sr-only">desplegar/ocultar menu</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a href="../index.php"><img src="../img/original.PNG" id="logo"  width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="##" style="color: white;">Inicio</a></li>
        <li><a href="##" style="color: white;">Productos</a></li>
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
$a="TC0001";
$v_cat="electronica";
//$ruta="../img/TC0001/";z
include("conexion.php");
$con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");

$r=mysql_query("select a.code,a.nombre,a.descripcion,a.costo,a.categoria, b.nombre_img
                from  producto a, imagenes b
                where a.code=b.clave limit 1")or die(mysql_error());

//impresión de la imagen
      while ($y=mysql_fetch_array($r)) {
        ?>
        <div class="pdc">
        <center>
        <?php
        ?>
        <img src="../img/<?php echo $y['code'];?>/<?php echo $y['nombre_img'];?>" id="ai"><br>
       <span><?php echo $y['nombre'];?></span><br>
       <a href="detalles.php?id=<?php  echo $y['code'];?>">ver</a><br><br>
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