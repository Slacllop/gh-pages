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

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=2 ORDER BY cod_estufa;";
                                    // 4.- Ejecutar la consulta/query
                                    //guardar los registros en una nueva variable
                                    $resultado=mysqli_query($conexion, $consulta);
                                    //ponemos siempre conexion porque hay que indicar siempre la conexion que usamos, siempre lo pide la funcion 

                                    // 5.- Comprobar errores
                                    // Si hay algun error, lo muestro. En caso contrario, continuo y sigo con el bucle
                                    if (mysqli_errno($conexion)!=0){
                                        // Quiere decir que hay algun error
                                        echo "<p>N?? error: ".mysqli_errno($conexion)."</p>";
                                        echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
                                    } else {
                                        if ($dato = mysqli_fetch_array($resultado)) {
                                             echo "<div data-aos='fade-up'>";
                                                echo "<h1 class='fw-bold mb-5 mt-5'>$dato[tipo]</h1>";
                                                echo "<img class='mx-auto d-block mt-3 fotos-estufas w-75 h-50'  src='fotos/$dato[foto]' alt='Imagen de: $dato[tipo]'>";
                                                echo "<br>";
                                                echo "<p class='texto'>$dato[descripci??n]</p>";
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
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas de le??a</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Son Ecol??gicas: </strong>Quemar restos de poda y troncos secos no es lo mismo que extraer y quemar gas natural. Adem??s, se considera que las emisiones que produce la le??a (biomasa) son neutras porque ???no contribuyen al efecto invernadero???.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Eficiencia t??rmica: </strong>Siempre y cuando dispongas de combusti??n con c??mara cerrada, las estufas de le??a son muy eficientes gracias a su alto rendimiento, cercano al 80%. Adem??s, algunas de ellas se conectan al circuito de agua sanitaria para calentar el agua de la ducha y dem??s grifos.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Instalaci??n: </strong>Aunque para mantener todas las garant??as se recomienda contratar un especialista, las estufas de le??a suelen ser muy f??ciles de instalar y utilizar.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Econ??micas: </strong>
                                    El combustible utilizado, la le??a, es m??s barato. Esto genera un importante ahorro energ??tico si lo comparamos con otros sistemas como el gas natural o la electricidad.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>M??ltiples usos: </strong>
                                    Aunque sea de manera sencilla, las estufas de le??a permiten calentar y tostar algunos alimentos. ??Y qu?? hay mejor que la cocina al fuego? Algunos modelos incluso incluyen un compartimento espec??fico que act??a como horno.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">??C??mo instalar una estufa de le??a?</h1>
                        <p class="texto">
                            Para instalar de forma correcta una estufa de le??a, has de tener en cuenta algunos aspectos importantes. Si no realizas adecuadamente esta tarea, puede que en el futuro surjan problemas, como la aparici??n de humo excesivo en la estancia, el sobrecalentamiento del mobiliario que se encuentre pr??ximo, e incluso que pueda arder alg??n objeto o sustancia inflamable, si no se tiene cuidado.
                        </p>
                        <p class="texto">
                            Por este motivo, es fundamental que sepas c??mo instalar una estufa de le??a. A continuaci??n, te mostramos todo lo que tienes que tener en cuenta:
                        </p>
                    </div>
                    <div class="pt-3">
                        <h2 class="fw-bold pb-4">Distancia de seguridad</h2>
                        <p class="texto">
                            Lo primero que debes hacer es comprobar d??nde quieres situar tu estufa de le??a. Para saber c??mo instalar una estufa de le??a es esencial elegir la localizaci??n adecuada, por motivo de seguridad. Es necesario que se mantenga cierta distancia con el resto del mobiliario, sobre todo con respecto a aquellos materiales que sean inflamables.
                        </p>
                    </div>
                    <div class="pt-3">
                        <h2 class="fw-bold pb-4">Medidas de protecci??n</h2>
                        <p class="texto">
                            En el caso de que quieras saber c??mo instalar una estufa de le??a sobre un suelo de madera o moqueta, debes tener mucho cuidado. En este caso, es necesario colocar una plancha de protecci??n entre la superficie del suelo y la estufa para evitar que este se queme.
                        </p>
                        <p class="texto">
                            El tama??o de esta plancha de protecci??n depender?? de las dimensiones de la estufa de le??a, aunque esta deber??a de cubrir, al menos, 30 cm por delante de la estufa y 15 cm a cada uno de los lados.
                        </p>
                    </div>
                    <div class="pt-3">
                        <h2 class="fw-bold pb-4">Garantizar la ventilaci??n en la estancia</h2>
                        <p class="texto">
                            Si quieres obtener una buena combusti??n, debe haber una entrada de ox??geno. Esto es indispensable en los espacios m??s reducidos, de esta manera garantizaremos el mejor rendimiento de nuestra estufa de le??a.
                        </p>
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
                                    <img class="img-carousel" src="fotos/estufa_turbo.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col-7 mb-5 pb-5">
                                                <h2>ESTUFA TURBO</h2>
                                                <p class="texto">La estufa Turbo es econ??micay alcanza r??pidamente temperatura porque cuenta con un segundo sistema de aire ajustable (los gases se queman a media altura). Las estufas Turbo tienen buen rendimiento y su calidad est?? certificada. La combusti??n permite disminuir los dep??sitos de holl??n.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_radiacion.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-7 mb-5 pb-5 pe-5 ">
                                                <h2 class="mt-5 pt-5">Estufa de le??a de radiaci??n</h2>
                                                <p class="texto">La estufa de le??a de radiaci??n es voluminosa, y tiene gran autonom??a (hasta 20h despu??s de la carga), pero al ser m??s grande, consume m??s. Est?? dise??ada con materiales refractarios para una mejor conservaci??n y propagaci??n del calor.</p>
                                            </div>
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_doble_combustion.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                            <div class="col-7 mb-5 pb-5">
                                                <h2>Estufas de doble combusti??n</h2>
                                                <p class="texto">La estufa de doble combusti??n es la m??s econ??mica por una buena raz??n, ??quema los gases de la primera combusti??n en una segunda c??mara! Es ecol??gica y eficiente por definici??n y cuenta con un rendimiento del 80%. Cuantos m??s gases quema, menor es la contaminaci??n.</p>
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