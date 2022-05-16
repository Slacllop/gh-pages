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

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=1 ORDER BY cod_estufa;";
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
                                                echo "<img class='mx-auto d-block mt-3 fotos-estufas  w-75 h-50' src='fotos/$dato[foto]' alt='Imagen de: $dato[tipo]'>";
                                                echo "<br>";
                                                echo "<p  class='texto mt-3'>Hoy en dia, las <strong>estufas eléctricas</strong> son de las mas usadas en el mercado por su facil aunque eficaz uso. Pero, realmente como funcionan?</p>";
                                                echo "<p class='texto'>$dato[descripción]</p>";
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
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas Eléctricas</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>La Eficiencia: </strong>Entre los primeros beneficios se encuentra la eficiencia para lograr la temperatura deseada en muy pocos minutos.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Transportar: </strong>Son muy fáciles de transportar, puesto que tienen un tamaño y formato ideal para trasladarla de un ambiente a otro.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Instalación: </strong>La instalación es muy simple, solo necesitas contar con un enchufe de 220v libre para conectarla y listo.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Seguras: </strong>
                                    Los equipos modernos de calefacción eléctrica poseen sistemas de seguridad que lo apagan ante golpes. Además, no emiten vapores y no genera ningún residuo de combustión. Por lo tanto, se las puede utilizar de manera segura en ambientes pequeños que no tengan mucha ventilación.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Silenciosas: </strong>
                                    La mayoría de los dispositivos modernos de calefacción son silenciosos.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">Como ahorrar energía usando estufas eléctricas</h1>
                        <p class="texto">
                            El consumo de energía eléctrica dependerá de cada artefacto y la cantidad de horas utilizadas. Entonces, si se trata de ahorrar debemos usarlo de manera inteligente y disminuir la cantidad de tiempo de uso.
                        </p>
                        <p class="texto">
                            Una forma de hacerlo es apagarla cuando no haya personas en la casa. Este tipo de estufas calientan en muy poco tiempo. También puedes apagar o colocar en la posición mínima cuando todos ya estén acostados.
                        </p>
                        <p class="texto">
                            Durante los días soleados aprovecha la temperatura del sol para calentar la casa. Corre todas las cortinas de las ventanas con los vidrios cerrados, creando una especie de efecto invernadero. De esta manera la casa se calentará naturalmente, ahorrando un poco de energía eléctrica.
                        </p>
                    </div>
                    <div class="pt-3">
                        <img class="w-100 mx-auto d-block" src="fotos/chimenea_electrica.jpg" alt="">
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">Cómo limpiar mi estufa eléctrica</h1>
                        <p class="texto">
                            Las estufas eléctricas no requieren un mayor mantenimiento que la limpieza, como generalmente se almacenan durante el verano suelen juntar polvo. Esto puede producir un menor rendimiento, por lo tanto, se recomienda limpiarlas antes de usarla por primera vez luego de una temporada sin uso.
                        </p>
                        <p class="texto">
                            Una vez que se encuentre en uso frecuente, se recomienda limpiarla al menos una vez al mes. Como no dejan residuos de combustión, la limpieza solo se debe realizar a la superficie externa del mismo.
                        </p>
                        <p class="texto">
                            El primer paso es verificar que el dispositivo esté desenchufado y frío. Después elimina todo el polvo con un plumero, si notas polvo en su interior puedes utilizar una aspiradora manual.
                        </p>
                        <p class="texto">
                            Después repasa toda la superficie externa con un paño húmedo y con uno seco para que la estufa eléctrica quede impecable para su próximo uso.
                        </p>
                    </div>
                    <div class="pt-3 pb-5">
                        <h1 class="fw-bold pb-4 pt-5">Tipos</h1>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-8">
                                            <img class="img-carousel" src="fotos/estufa_cuarzo.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="row mb-5">
                                                    <div class="col-7 mb-5 pb-5">
                                                        <h2>ESTUFA DE CUARZO</h2>
                                                        <p class="texto">Este tipo de calefacción también se la conoce como estufa eléctrica halógena y trasmite calor infrarrojo. Por lo tanto, no son utilizadas para calentar un ambiente amplio, calienta lo que se encuentre cerca y delante de los infrarrojos..</p>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/convector_electrico.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-7 mb-5 pb-5 pe-5">
                                                <h2>CONVECTOR ELECTRICO</h2>
                                                <p class="texto">Este tipo de calefacción también se la conoce como estufa eléctrica halógena y trasmite calor infrarrojo. Por lo tanto, no son utilizadas para calentar un ambiente amplio, calienta lo que se encuentre cerca y delante de los infrarrojos..</p>
                                            </div>
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-carousel" src="fotos/estufa_electrica_de_aceite.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row mb-5">
                                            <div class="col-7 mb-5 pb-5">
                                                <h2>ESTUFAS ELÉCTRICAS DE ACEITE</h2>
                                                <p class="texto">También llamado <strong>radiador eléctrico</strong>, utiliza la energía eléctrica para calentar el aceite en su interior. Este elemento es el que finalmente irradia calor a la habitación. Por lo tanto, el consumo de energía es bajo y una vez apagado seguirá irradiando calor por un tiempo más.</p>
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