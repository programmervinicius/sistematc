<!DOCTYPE html>
<html>
<head>
<html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
  <title>Dashboard</title>
</head>
<body>
  <style type="text/css">
  @import "bourbon";

body {
  background: #eee !important;  
}

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
  </style>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <div class="wrapper">
    <form class="form-signin" action="acceso.php" method="post">       
      <h2 class="form-signin-heading" align="center">Bienvenido</h2>
      <label>Usuario:</label>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      <label>Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button><br>
      <center><label>
        <a href="#">Recuperar Contraseña</a>
      </label></center>
    </form>
  </div>
</body>
</html>