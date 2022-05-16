<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Smartsupp Live Chat script -->
    <!-- Smartsupp Live Chat script -->
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
    <title>Lacunza</title>
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
                        <div>
                            <?php

                                require('database.php');

                                if ($conexion=mysqli_connect($servidor, $usuario, $clave, $bbdd)) {
                                //entramos por aqui...
                                mysqli_query($conexion, "SET NAMES 'UTF8'" );
                                //esta parte es simplemente para asegurarnos que todo lo que entre este codificado
                                // 2.- Seleccionamos la base de datos
                                if (mysqli_select_db($conexion, $bbdd)) {
                                    // 3.- Definimos la consulta

                                    $consulta="SELECT * FROM fabricantes WHERE cod_fabricante=2 ORDER BY cod_fabricante;";
                                    $consulta2="SELECT * FROM modelos WHERE cod_fabricante=2";
                                    // 4.- Ejecutar la consulta/query
                                    //guardar los registros en una nueva variable
                                    $resultado=mysqli_query($conexion, $consulta);
                                    $resultado2=mysqli_query($conexion, $consulta2);
                                    //ponemos siempre conexion porque hay que indicar siempre la conexion que usamos, siempre lo pide la funcion 

                                    // 5.- Comprobar errores
                                    // Si hay algun error, lo muestro. En caso contrario, continuo y sigo con el bucle
                                    if (mysqli_errno($conexion)!=0){
                                        // Quiere decir que hay algun error
                                        echo "<p>Nº error: ".mysqli_errno($conexion)."</p>";
                                        echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
                                    } else {
                                        if ($dato = mysqli_fetch_array($resultado)) {
                                             echo "<div class='row'>";
                                                echo "<div class='col'>";
                                                    echo "<h1 class='fw-bold mb-5 mt-5'>$dato[nombre]</h1>";
                                                    echo "<p class='texto'>$dato[descripcion]</p>";
                                                echo "</div>";
                                                echo "<div class='col mt-5'>";
                                                    echo "<img class='mx-auto d-block mt-5 fotos-estufas  w-75 h-50' src='fotos/$dato[foto]' alt='Imagen de: $dato[nombre]'>";
                                                echo "</div>";
                                            echo "</div>";
                                            }
                                        echo "<h1 class='fw-bold pb-4 pt-5'>Catálogo</h1>";
                                        echo "<br>";
                                        while ($dato = mysqli_fetch_array($resultado2)) {
                                                echo "<div class='cartas p-0 w-25 border-light' data-aos='zoom-in'>";
                                                    echo "<a href='$dato[enlace]' target='_blank'>";
                                                        echo "<img class='w-100' src='fotos/$dato[foto]' alt='Imagen de: $dato[nombre]'>";
                                                        echo "<ul class='list-group list-group-flush ms-1'>";
                                                            echo "<li class='list-group-item ms-2 mt-2'>";
                                                                    echo "<a class='text-decoration-none' href='$dato[enlace]' target='_blank'> ";
                                                                        echo "<p class='fw-bold'>$dato[nombre]</p>";
                                                                    echo "</a>";   
                                                                    echo "<p class='fw-bold text-end'>$dato[precio] EUR</p>";
                                                                    echo "<a class='text-decoration-none' href='$dato[enlace]' target='_blank'> ";
                                                                        echo "<button type='button' class='btn btn-warning w-100'><p class=' mb-0'>Comprar en Amazon</p></button>";
                                                                    echo "</a>";
                                                                echo "</li>";
                                                        echo "</ul>";
                                                    echo "</a>";
                                                echo "</div>";
                                            }
                                        echo "<h1 class='fw-bold pt-5'>Lacunza: Gran experiencia en el mundo de las estufas</h1>";
                                        echo "<br>";  
                                    }

                                }   
                                mysqli_close($conexion);    
                                }
                            ?>
                        </div>
                    </div>
                    <div>
                        <p class="texto">
                           Lacunza es una empresa arraigada en el valle de Sakana (Navarra). Más de 45 años de trabajo y trayectoria positiva ininterrumpida avalan su proyecto empresarial.
                        </p>
                        <p class="texto">
                            Durante casi medio siglo han conseguido forjar su propia personalidad empresarial basada en la sostenibilidad y el medio ambiente, la innovación, tecnología y diseño y la orientación al cliente.
                        </p>
                        <p class="texto pb-5">
                            A partir de la originaria fundición de hierro y posterior fábrica de cocinas y chimeneas, LACUNZA ha experimentado una notable evolución y desarrollo, tanto en el abanico de productos y gama de modelos, materiales y fuentes de energía, como en la incorporación de la calidad, innovación y diseño de sus propios productos.
                        </p>
                    </div>
                    <div class="pt-3">
                        <img class="w-100 mx-auto d-block" src="fotos/lacunza_foto.jpg" alt="">
                    </div>
                </div>
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