<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>sistemaTC_subirIMG</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/subir.css">

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
   <a href="principal.php"><img src="../img/original.PNG" class="img-rounded"  width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="principal.php" style="color: white;">Dashboard</a></li>
        <li><a href="../index.php" style="color: white;">Frontend</a></li>
        <li><a href="dashboard.php" style="color: white;">Salir</a></li>
        </ul>
   </div>

   </div>
</nav>
</head>

<section class="jumbotron">
	<div class="container"></div>
</section>
<!-- botones inferior-->
<section class="main container">
	<div class="container" >
		<section class="post cold-md-9">
     <?php 
      $optener=$_GET['id'];
     ?>
     <br><br>
    <form method="post">
    </form>

    <hr>
    <!-- **********************************************************-->
    <form action="upload.php?id=<?php echo $optener; ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label class="col-md-3 control-label">Upload Image:</label>
      <div class="col-md-8">
      <input type="file" name="file[]"  multiple  />
      </div>
      </div>
      <div class="form-group">
      <label class="col-md-3 control-label"></label>
      <div class="submit">
      <input class="btn btn-success" value="Subir" type="submit" name="submit">
      </div> 
      </div>
</form>
    <hr>
     <label>Imagenes del producto</label>
     <br>
     
     <!--crear directorio -->
     <div class="table-responsive">
     <table class="table">
  <tr>
    <td>Clave</td>
    <td>Nombre_Foto</td>
    <td>Imagen</td>
  </tr>
  <?php
  include("conexion.php");
  $con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
  mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");
    $re=mysql_query("select * from imagenes WHERE clave='$optener'")or die(mysql_error());
    while ($f=mysql_fetch_array($re)) {
  ?>
  <tr>
    <td><?php echo $f['clave'];?></td>
    <td><?php echo $f['nombre_img'];?></td>
    <td><?php echo "<img class=\"imagen\" src=\""."../img/$optener/".$f['nombre_img']."\"/>";?></td>
     <td><?php echo "<a class=\"btn btn-danger\"/ href=\"hola.php\"/>Eliminar</a>";?></td>
  </tr>
  <?php
  }
  ?>
  </table>
  </div>

</div>
		</section>
	</div>
</section>
<!-- botones inferior-->

<section class="main container"></section>

</body>
</html>