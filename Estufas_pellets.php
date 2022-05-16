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

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=5 ORDER BY cod_estufa;";
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
                                                echo "<p class='texto'>Además, el tiempo de amortización esperado sería de unos 4 años.</p>";
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
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas de pellets</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Calor de calidad: </strong>Proporcionando una agradable sensación térmica en toda la estancia. Los pellets tienen un alto poder calorífico, con lo que pequeñas cantidades son capaces de proporcionar una gran cantidad de energía.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Salida de humo: </strong>Comparadas con una estufa de leña tradicional, la salida de humo es mucho más discreta. También ensucian mucho menos, comparativamente, y los pellets ocupan mucho menos espacio que la leña.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Fáciles de utilizar: </strong>Ya que los modelos modernos están completamente automatizados. Tan solo con pulsar un par de botones, ya tendrás la estufa funcionando
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Fuente de energía segura: </strong>A diferencia de las estufas de gas propano o butano, no conlleva riesgo de explosión
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Funcionalidades: </strong>Las estufas de pellets modernas tienen incorporadas una gran cantidad de funcionalidades, incluyendo termostatos digitales, función de programación y las hay que te permiten regularlas incluso desde tu móvil.
                            </li>
                            <li>
                                <p class="texto"><strong>Zona: </strong>Son ideales para calentar pisos pequeños o zonas localizadas en casas de mayor tamaño.
                            </li>
                            <li>
                                <p class="texto"><strong>Olores: </strong>La combustión de los pellets no produce olores, como ocurre con la combustión de algunos gases o de la parafina.
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">Cómo limpiar mi estufa eléctricaInstalación, funcionamiento y mantenimiento de una estufa de pellets:</h1>
                        <p class="texto">
                            Para la instalación debemos contar con cuatro elementos fundamentales: la propia estufa de pellets, la conexión de salida de gases, la chimenea y el sombrerete. También se debe contar con un espacio para el almacenaje de pellets y es imprescindible que la estancia en la que instalaremos la estufa tenga una buena ventilación, ya que ésta debe coger aire, sino es así tendríamos que hacer una toma de aire exterior.
                        </p>
                        <p class="texto">
                            El funcionamiento de una estufa de pellets es totalmente automático, lo que la hace muy segura, sin riesgo de quemaduras. Durante el encendido de la estufa de pellets, una resistencia eléctrica cercana al cenicero con pellets se pone incandescente y al quemarse los primeros pellets se arranca la ventilación, pasando un canal de aire por el cenicero para avivar la llama. Tras el encendido, la estufa entra en el modo normal de funcionamiento cargando al cenicero con pellets a través del tornillo sinfín y ventilando la cámara hasta que se detecte la temperatura deseada. La estufa calienta principalmente a través de su ventilación regulable, aunque este tipo de estufas también calientan la estancia a través de la ventana de la cámara de combustión y del chasis.
                        </p>
                        <p class="texto">
                            El mantenimiento y limpieza de las estufas de pellets es también muy sencillo y mínimo, pero aunque la usemos de un modo ocasional es recomendable que la limpiemos, mínimo, una vez a la semana. Únicamente debemos retirar el cenicero donde caen las cenizas, sacudirlo con un cepillo o limpiar más a fondo con ayuda de un aspirador. También será importante mantener limpio el cristal de la puerta para favorecer un mayor rendimiento. Además, una vez al año, es aconsejable hacer una revisión de los conductos y una limpieza en profundidad, de esta forma nos aseguramos una vida más larga de nuestra estufa de pellets.
                        </p>
                    </div>
                    <div class="pt-3">
                        <img class="w-100 mx-auto d-block" src="fotos/estufa_pellets.jpg" alt="">
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
                                    <img class="img-carousel" src="fotos/estufa_aire_forzado.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-7 mb-5 pb-5 pe-5s">
                                                <h2>Estufas de aire forzado</h2>
                                                <p class="texto">Básicamente son un sistema de encendido y apagado electrónico y programable, donde un ventilador expulsa al exterior al aire caliente que las paredes del cuerpo intercambian con la llama.</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_pellets_canalizables.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                            <div class="col-7 mb-5 pb-5 pe-5">
                                                <h2>Estufas de pellets canalizables</h2>
                                                <p class="texto">Diseñadas principalmente para repartir el aire caliente que emite la estufa de pellets a distintas estancias a través de diferentes conductos. Funcionan igual que las anteriores, con el plus de que pueden expulsar todo el aire caliente por el frontal o derivarlo a cualquiera de las tomas que se pueden conectar a diferentes habitaciones.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/termoestufa.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-7 mb-5 pb-5">
                                                <h2>Termoestufas</h2>
                                                <p class="texto">Son pequeñas calderas capaces de calentar toda la vivienda conectándose al circuito de radiadores ya existente y calentando, además, la estancia donde está instalada</p>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
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