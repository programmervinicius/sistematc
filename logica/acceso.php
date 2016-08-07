<?php
include("conexion.php");

	if(isset($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['username']) &&  !empty($_POST['password']) && !$_POST['username']==0 && !$_POST['password']==0)
{
	
	mysql_select_db($baseDe,$con) or die ("no hay conexio a la bd");
	$u1=$_POST['username'];
	$p1=$_POST['password'];
	
	//$p5=md5($p1);
	
	$consulta= mysql_query("select * from administrador where user = '$u1'");  //validar si el usuario es correcto
	if($row = mysql_fetch_array($consulta))
	{
       //validar password
       if($row['password']== $p1)
       {
       	//variable de sission
       	session_start();
       	$_SESSION['usuario']=$row['id'];
		
		header("Location: principal.php?id=".$row['id']);
       }
       else
       {
       	header("Location:dashboard.php?n=2");
       }

	}
	else
	{
      ?>
      <script languaje="javascript">
      alert("el usuario o password son incorrectos!");
      location.href="dashboard.php";
	</script>
	
	<?php
	
    }	

}
else
{
header("Location: dashboard.php?n=1");	
}
?>