<?php


  require ('../database.php');

  if (isset($_POST["Enviar"])) {
      $nombre= $_POST["nombre"];
      $contraseña= $_POST["contraseña"];

  $message = 0;
  if ($conexion=mysqli_connect($servidor, $usuario, $clave, $bbdd)) {
    //entramos por aqui...
    mysqli_query($conexion, "SET NAMES 'UTF8'" );
    //esta parte es simplemente para asegurarnos que todo lo que entre este codificado
    // 2.- Seleccionamos la base de datos
    if (mysqli_select_db($conexion, $bbdd)) {
    // 3.- Definimos la consulta

    $consulta="SELECT * FROM login WHERE nombre = '$nombre' AND contraseña = '$contraseña'";
    // 4.- Ejecutar la consulta/query
    //guardar los registros en una nueva variable
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if ($filas) {
      $message ++;
    } else {
      $message = 0;
    }
    }
    mysqli_close($conexion);    
    }
  }

  
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <link href="../css/login.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Techno Contact Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="icon" href="../logo.png">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4940127678921067" crossorigin="anonymous"></script>
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="wthree-dot">
        <h1>EstufasParaTi</h1>
        <div class="profile">
            <div class="wrap">
                <div class="contact contact-centrado">
                    <div class="contact-w3lsleft">
                        <div class="contact-grid agileits">
                            <?php 
                            if (isset($_POST["Enviar"])) {
                                if($message > 0){
                                    echo"<script>alert('Inicio de sesion correcto'); window.location='../index.php';</script>"; 
                                }else{
                                    echo"<script>alert('Pruebe de nuevo con otro usuario'); window.location='login.php';</script>";
                                }  
                            }
                                                           
                             ?>
                            <h4>Inicia sesión</h4>
                            <form action="login.php" method="POST">
                                <input type="text" name="nombre" placeholder="Nombre *" required="" pattern="[A-Za-z]{1,15}" title="Introduce valores validos">
                                <input type="text" name="contraseña" placeholder="Contraseña *" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Introduce como máximo 20 valores">
                                <!-- debe contener 8 o más caracteres que son de por lo menos un número, y una mayúscula y minúscula: -->
                                <input type="submit" value="Enviar" name="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="wthree_footer_copy">
                    <p>© Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>