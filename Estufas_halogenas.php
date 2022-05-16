<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '6d606be5fdf13d6f20fec906af8abc90315cb9a6';
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() { o._.push(arguments) };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
    })(document);
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estufasparati</title>
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estufas.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4940127678921067" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <a class="ir-arriba" javascript:void(0)>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
            <a class="ir-arriba-two" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                </svg>
            </a>
        </svg>
    </a>
    <span class="w-100 vh-100">
        <div class="div-container-fluid color shadow-sm fixed-top ps-5">
            <?php
                include('home.php')
            ?>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 mt-5">
                    <div>
                        <div class="mb-5">
                            <?php
                                require('database.php');

                                if ($conexion=mysqli_connect($servidor, $usuario, $clave, $bbdd)) {
                                //entramos por aqui...
                                mysqli_query($conexion, "SET NAMES 'UTF8'" );
                                //esta parte es simplemente para asegurarnos que todo lo que entre este codificado
                                // 2.- Seleccionamos la base de datos
                                if (mysqli_select_db($conexion, $bbdd)) {
                                    // 3.- Definimos la consulta

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=4 ORDER BY cod_estufa;";
                                    // 4.- Ejecutar la consulta/query
                                    //guardar los registros en una nueva variable
                                    $resultado=mysqli_query($conexion, $consulta);
                                    //ponemos siempre conexion porque hay que indicar siempre la conexion que usamos, siempre lo pide la funcion 

                                    // 5.- Comprobar errores
                                    // Si hay algun error, lo muestro. En caso contrario, continuo y sigo con el bucle
                                    if (mysqli_errno($conexion)!=0){
                                        // Quiere decir que hay algun error
                                        echo "<p>Nº error: ".mysqli_errno($conexion)."</p>";
                                        echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
                                    } else {
                                        if ($dato = mysqli_fetch_array($resultado)) {
                                             echo "<div data-aos='fade-up'>";
                                                echo "<h1 class='fw-bold mb-5 mt-5'>$dato[tipo]</h1>";
                                                echo "<img class='mx-auto d-block mt-3 fotos-estufas w-75 h-50'  src='fotos/$dato[foto]' alt='Imagen de: $dato[tipo]'>";
                                                echo "<br>";
                                                echo "<p class='texto'>$dato[descripción]</p>";
                                                echo "<br>";
                                                echo "<p class='texto'>Además, para que el calor triunfe en tu hogar y ahorres en la factura de la calefacción, es muy recomendable que esta estufa con un termostato para regular la temperatura. De esta forma controlarás grados y gastos.</p>";
                                            echo "</div>";
                                        }                 
                                    }   
                                }
                                mysqli_close($conexion);    
                                }
                            ?>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas halógenas</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Instalación : </strong>La instalación rápida y sin costo. Puede ser utilizado en cualquier tipo de vivienda.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Inversión: </strong>Se necesita una baja inversión inicial con un sencillo y barato mantenimiento.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Gases: </strong>Este tipo de estufan no consume oxígeno ni emite gases dentro del ambiente.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4 pt-5">Posibles usos</h1>
                        <p class="texto">
                            Los radiadores infrarrojos o halógenos disponen de una amplia gama de posibles usos. Los radiadores o calefactores infrarrojos o halógenos son auténticos comodines, ya que pueden utilizarse a nivel particular o profesional y en interior o exterior del edificio.
                        </p>
                        <p class="texto">
                            Para elegir correctamente, hay que decidir qué uso se le va a dar al radiador infrarrojo. Cuando se haya definido este criterio, no tendrás ningún problema en dar con el modelo que se adapte a tus necesidades.
                        </p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </span>
    <script src="home.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>