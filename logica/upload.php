<?php
$con=mysqli_connect("localhost","root","529440","sistematc");
// Check connection
if (mysqli_connect_errno()) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 $_var=$_GET['id'];
foreach($_FILES['file']['tmp_name'] as $key => $tmp_name ){
$file_name =$_FILES['file']['name'][$key];
$file_type=$_FILES['file']['type'][$key];   
if (
($file_type !== "image/gif")
|| ($file_type !== "image/jpeg")
|| ($file_type !== "image/jpg")
|| ($file_type !== "image/pjpeg")
|| ($file_type !== "image/x-png")
|| ($file_type !== "image/png"))
 {        
                if (file_exists($file_name)) 
                    {
                        echo $file_name . " already exists. "; exit;
                    } 
                else 
                    {
                        $imagepath = $file_name;
                        //mover a la carpeta correspondiente
                        $ruta_folder='../img/".$_var';
                      if (file_exists($ruta_folder)) { // validar si existe el folder
                            move_uploaded_file($_FILES["file"]["tmp_name"][$key],"../img/$_var/".$imagepath);
                            $sql="INSERT INTO imagenes(clave,nombre_img) VALUES ('".$_var."','".$imagepath."')";
                               if (!mysqli_query($con,$sql)) {
                                  die('Error: ' . mysqli_error($con));
                                }
                        }else{
                              mkdir("../img/".$_var, 755);
                              move_uploaded_file($_FILES["file"]["tmp_name"][$key],"../img/$_var/".$imagepath);
                              $sql="INSERT INTO imagenes(clave,nombre_img) VALUES ('".$_var."','".$imagepath."')";
                                if (!mysqli_query($con,$sql)) {
                                       die('Error: ' . mysqli_error($con));
                                    }
                        }
                      
                    }           
    } 
else    
    {
        echo "Invalid file"; exit;
    }
}


header("Location:http://127.0.0.1/sistematc/logica/principal.php");


?>