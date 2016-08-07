<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>sistemaTC</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
        <!--productos lista-->
        <!--productos lista-->
        </ul>
   </div>

   </div>
</nav>
</head>

<!-- <section class="jumbotron">
	<div class="container"></div>
</section> -->
<!-- botones inferior-->
<section class="main container">
	<div class="container" >
		<section class="post cold-md-9">

    <div class="table-responsive">

    <div class="panel-heading">
      <h2>Productos!!</h2>
    </div>
     <div class="panel-body">
     <h6>Listado para subir imagenes del productos registrados.</h6>
     </div>

    <table class="table table-bordered" >
    <thead >
<tr>
 <td align="center">Código</td>
 <td align="center">Nombre</td>
 <td align="center" >Descripción</td>
 <td align="center">Costo</td>
 <td align="center">Total Fotos</td>
 <td align="center">Opción</td>
 </tr>
 <?php
include("conexion.php");
  $con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
  mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");
   //$reso = mysql_query("SELECT * FROM producto", $con);
  $reso = mysql_query("SELECT code,nombre,descripcion,costo,(SELECT COUNT(clave) FROM imagenes WHERE imagenes.clave=producto.code) AS relax FROM producto", $con);
  while($r = mysql_fetch_array($reso)) {
    echo "<tr>";
    echo'<td>'.$r['code']."</td>";
    echo '<td>'.$r['nombre']."</td>";
    echo '<td>'.$r['descripcion']."</td>"; 
    //echo '<td>$'.$r['precio']."</td>";
    echo '<td>$'.$r['costo']."</td>";
    // echo '<td>'.$r['categoria']."</td>"; 
    // echo '<td>'.$r['porcentaje']."</td>";
    echo '<td bgcolor="#FFCC33" align="center">'.$r['relax']."</td>";
    // echo '<td>'.$r['barras']."</td>";
   // $a=mysql_query("SELECT count(nombre_img) FROM imagenes WHERE clave='$r['code']'");

     echo '<td align="center" bgcolor="#FFFFFF">'.'<a href="subir.php?id='.$r["code"].'">'.'Ver'.'</a>'.'</td>';
    }
//    mysql_free_result($result);
    //mysql_close($con);
    echo "<hr>"
?>
  </table>
  </div>
		</section>
	</div>
</section>
<!-- botones inferior-->

<section class="main container"></section>

</body>

</html>