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

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=3 ORDER BY cod_estufa;";
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
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas de butano</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Rentables : </strong>Inicialmente el coste de una estufa de gas butano puede ser elevado, pero si analizamos su uso posterior, este es de los más rentables.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Gran aporte calórico: </strong>Además si no quieres pasar frío este invierno en casa, su aporte calórico te lo pondrá muy fácil. Pero para que este sistema de calefacción de aporte todo lo que tú y tu hogar necesitas, debes tener en cuenta varios aspectos:
                                </p>
                                <ol>
                                    <li>
                                        <p class="texto"><strong>Superficie: </strong>Debes tener claro la superficie a calentar, no es lo mismo calentar una estancia pequeña que una grande, en función de ello tendrás que optar por una potencia u otra.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="texto"><strong>Ahorro : </strong>Para que el calor triunfe en tu hogar y ahorres en la factura de la calefacción, es muy recomendable que esta estufa con un termostato para regular la temperatura. De esta forma controlarás grados y gastos.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="texto"><strong>Moderno : </strong>Cuanto más actual sea el modelo, mucho mejor, sobre todo en temas de seguridad, si esta cuenta con un sistema de apagado automático o detector de CO2, los riesgos estarán controlados.
                                        </p>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">¿Cómo funciona una estufa de butano?</h1>
                        <p class="texto">
                            Las estufas de butano funcionan a través de la quema del combustible gaseoso, cuentan con un quemador de gas conectado a una bombona de butano. El calor que la estufa de butano genera es el resultado de la combustión de dicho gas en el quemador.
                        </p>
                        <p class="texto">
                            Si analizamos su funcionamiento y su coste económico, las estufas de butano producen más calor que las eléctricas, de ahí que sea una de las opciones más habituales en la mayoría de las viviendas.
                        </p>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">¿Qué debes tener en cuenta antes de comprar una estufa de butano?</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Superficie a calentar : </strong>En función del tamaño de la estancia, deberás elegir una potencia u otra.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Regular temperatura: </strong>Es recomendable que esta cuente con un termostato de temperatura.
                                </p>
                                <ol>
                                    <li>
                                        <p class="texto"><strong>Sistemas de seguridad: </strong>Que cuente con sistema apagado automático o detector de CO2, fundamental
                                        </p>
                                    </li>
                                    <li>
                                        <p class="texto"><strong>Sistema de encendido</strong></p>
                                    </li>
                                    <li>
                                        <p class="texto"><strong>Fácil movilidad</strong> </p>
                                    </li>
                                    <li>
                                        <p class="texto"><strong>Precio y garantía</strong> </p>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4 pt-5">Tipos</h1>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-carousel" src="fotos/estufa_infrarrojos.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5 me-5 pe-5">
                                            <div class="col-7 mb-5 pb-5 me-5">
                                                <h2>Infrarrojos</h2>
                                                <p class="texto">Se componen de un panel cerámico con una rejilla por la cual sale el gas. Adquiere un tono anaranjado durante su utilización.Permite potencias muy elevadas. Son muy duraderas. Emiten calor por radiación por lo que pueden quemar.</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_catalitica.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5 pe-5">
                                            <div class="col-7 mb-5 pb-5 pe-5">
                                                <h2>Catalítica</h2>
                                                <p class="texto">Incorpora una esponja por la cual sale el gas.La combustión del calor se produce a menor temperatura y repartida por todo el panel.El riesgo de sufrir quemaduras es menor.La emisión del calor se produce más por convección que por radiación..</p>
                                            </div>
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_llama_azul.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block mb-5 pb-5">
                                        <div class="row mb-5 pb-5">
                                            <div class="col-2"></div>
                                            <div class="col-2"></div>
                                            <div class="col-6 mb-5 pb-5">
                                                <h2>Llama azul</h2>
                                                <p class="texto mb-5 pb-5">Consta de un quemador que permite ver la llama. Es muy similar a la estufa de infrarrojos.Tienen una mayor radiación.Requieren de un menor mantenimiento.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
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