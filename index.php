<?php
  session_start();

    require('database.php');

  if (isset($_SESSION['nombre'])) {
    $records = $conn->prepare('SELECT cod_usuario, nombre, contraseña, confirmar_contraseña FROM login WHERE cod_usuario = :cod_usuario');
    $records->bindParam(':nombre', $_SESSION['nombre']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>estufasparati</title>
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estufas.css">
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
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div>
                        <h1 class="mt-5 fw-bold mb-3">Para los amantes de las estufas</h1>
                        <p class="texto">
                            Las estufas hoy en dia son de las mejores opciones para calentarnos por su bajo mantenimiento y su facilidad de uso.
                            Además, <strong>las estufas son perfectas para estar en familia, ver peliculas y series juntos estando lo mas agusto posible</strong>
                        </p>
                        <p class="texto">Si quieres disfrutar de todo esto, esta es tu página</p>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">¿Que estufa necesitas?</h1>
                        <div class="container-fluid p-0 m-0">
                            <div class="row p-0 m-0 w3-container w3-center w3-animate-opacity">
                                <div class="col-md-4 col-sm-12 pe-3 ps-0">
                                    <a class="text-decoration-none text-dark " href="Estufas_electricas.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/electrica.jpg" class="card-img-top img-card shadowcard" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas Eléctricas</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 pe-2 ps-3">
                                    <a class="text-decoration-none text-dark" href="Estufas_leña.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/leña.jpg" class="card-img-top img-card" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas de Leña</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 pe-0 ps-4">
                                    <a class="text-decoration-none text-dark" href="Estufas_butano.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/butano.jpg" class="card-img-top img-card" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas de Butano</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-5 pe-3 ps-0">
                                    <a class="text-decoration-none text-dark" href="Estufas_halogenas.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/halógenas.jpeg" class="card-img-top img-card" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas Halógenas</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-5 pe-2 ps-3">
                                    <a class="text-decoration-none text-dark" href="Estufas_pellets.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/pellets.jpg" class="card-img-top img-card" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas de Pellets</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-5 pe-0 ps-4">
                                    <a class="text-decoration-none text-dark" href="Estufas_biomasa.php">
                                        <div class="card border-0 shadowcard w-100 h-100">
                                            <img src="fotos/biomasa.jpg" class="card-img-top img-card" alt="electrica">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Estufas de Biomasa</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4 pt-5">Como puedes usar tu estufa</h1>
                        <p class="texto">
                            La idea de estufa puede aludir a dos objetos diferentes. En algunos países, se llama estufa al aparato que se emplea para <strong>calefaccionar un ambiente</strong> mediante la combustión o con energía eléctrica. En otras naciones, en cambio, una estufa es un dispositivo que sirve para <strong>cocinar</strong>.
                        </p>
                        <div class="d-flex">
                            <p class="texto pt-3">
                                Una estufa, por lo tanto, <strong>puede ser un calefactor</strong>. En este caso, se trata de un dispositivo que produce y emite calor. Las estufas son muy importantes cuando las temperaturas son bajas, ya que ayudan a calentar sitios cerrados. Existen distintas clases de estufa. Entre las más populares se encuentran las estufas de gas, que producen el calor a través de la combustión de butano u otro gas. Las estufas eléctricas, por su parte, suelen contar con un radiador que recurre a la energía eléctrica para generar calor, que luego es transmitido por convección o radiación.
                            </p>
                            <img class="w-25" src="fotos/Estufa_calentar.png" alt="">
                        </div>
                        <div class="d-flex mt-3">
                            <img class="w-25" src="fotos/Estufas_cocinar.png" alt="">
                            <p class="texto mt-5">
                                Por otro lado, como <strong>elemento de cocina</strong>, la estufa también apela a la combustión o a la electricidad para producir el calor que se necesita para la cocción de los alimentos. Estas estufas suelen tener un horno, un asador y varias hornallas, hornillas, hornillos o quemadores. Y podemos usarlas para cocer, freír, fundir, asar o hervir. Por lo general, vamos a necesitar utensilios tales como sartenes, ollas y otros objetos para poder cocinar.
                            </p>
                        </div>
                        <p class="texto mt-3">
                            La estufa, en cualquiera de sus dos acepciones, es un objeto que hoy en día puede parecer imprescindible para casi todos los seres humanos, pero que no deja de ser un «lujo» propio de la época en la que vivimos.
                        </p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="container-fluid  ps-4 pe-4 ">
            <div class="ms-5 pt-3 mb-5">
                <h1 class=" pt-5 ms-5 me-5 pe-5 text-center fw-bold">Empresas</h1>
            </div>
        </div>
        <div class="marquee mb-5 pb-5">
            <ul class="marquee-content d-flex align-items-center justify-content-center">
                <li>
                    <a href="https://www.amazon.es/s?k=amazon+calefaccion&adgrpid=66531689446&gclid=CjwKCAjwxOCRBhA8EiwA0X8hi11AT90IeakP9PjhZTx2kAlumvb-6hY62q2C7SvQC50I8kTfyqaW8BoCBqQQAvD_BwE&hvadid=337126337995&hvdev=c&hvlocphy=1005495&hvnetw=g&hvqmt=b&hvrand=1682012708967140126&hvtargid=kwd-355463613721&hydadcr=28033_1808366&tag=hydes-21&ref=pd_sl_5hyckrcs5y_b" target="_blank" title="Página de amazon">
                        <img src="fotos/amazon.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.samsung.com/latin/cooking-appliances/ranges/" target="_blank" title="Página de samsung">
                        <img src="fotos/samsung.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.lg.com/cac/estufa" target="_blank" target="_blank" title="Página de lg">
                        <img src="fotos/lg.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.amazon.es/s?k=amazon+calefaccion&adgrpid=66531689446&gclid=CjwKCAjwxOCRBhA8EiwA0X8hi11AT90IeakP9PjhZTx2kAlumvb-6hY62q2C7SvQC50I8kTfyqaW8BoCBqQQAvD_BwE&hvadid=337126337995&hvdev=c&hvlocphy=1005495&hvnetw=g&hvqmt=b&hvrand=1682012708967140126&hvtargid=kwd-355463613721&hydadcr=28033_1808366&tag=hydes-21&ref=pd_sl_5hyckrcs5y_b" target="_blank" target="_blank" title="Página de amazon">
                        <img src="fotos/acros.png" class="fab mb-3" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.amazon.es/s?k=amazon+calefaccion&adgrpid=66531689446&gclid=CjwKCAjwxOCRBhA8EiwA0X8hi11AT90IeakP9PjhZTx2kAlumvb-6hY62q2C7SvQC50I8kTfyqaW8BoCBqQQAvD_BwE&hvadid=337126337995&hvdev=c&hvlocphy=1005495&hvnetw=g&hvqmt=b&hvrand=1682012708967140126&hvtargid=kwd-355463613721&hydadcr=28033_1808366&tag=hydes-21&ref=pd_sl_5hyckrcs5y_b" target="_blank" target="_blank" title="Página de amazon">
                        <img src="fotos/mabe.png" class="fab mb-5" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.amazon.es/s?k=amazon+calefaccion&adgrpid=66531689446&gclid=CjwKCAjwxOCRBhA8EiwA0X8hi11AT90IeakP9PjhZTx2kAlumvb-6hY62q2C7SvQC50I8kTfyqaW8BoCBqQQAvD_BwE&hvadid=337126337995&hvdev=c&hvlocphy=1005495&hvnetw=g&hvqmt=b&hvrand=1682012708967140126&hvtargid=kwd-355463613721&hydadcr=28033_1808366&tag=hydes-21&ref=pd_sl_5hyckrcs5y_b" target="_blank" target="_blank" title="Página de amazon">
                        <img src="fotos/whirpool.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.mediamarkt.es/es/category/estufas-7761.html?utm_source=google&utm_medium=cpc&utm_campaign=MM_ES_SEARCH_GOOGLE_CATEGORIES_TEXT_GEN_GAE_ALL_ALL&ds_rl=1286118&ds_rl=1286118&gclid=CjwKCAjwxOCRBhA8EiwA0X8hiyDPLD7wpN_hCUwVWZdA-KqwetJIw5imbximmCdvT_EkyBdzI4B8uBoC9KAQAvD_BwE&gclsrc=aw.ds" target="_blank" title="Página de mediamark">
                        <img src="fotos/mediamark.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.samsung.com/latin/cooking-appliances/ranges/" target="_blank" title="Página de carrefour">
                        <img src="fotos/carrefour.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.lg.com/cac/estufa" target="_blank" title="Página de lg">
                        <img src="fotos/tien21.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://ahorraclima.es/estufas-64" target="_blank" title="Página de ahoraclima">
                        <img src="fotos/ahoraclima.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.climahorro.es/estufas/estufas/" target="_blank" title="Página de climahorro">
                        <img src="fotos/climahorro.png" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.planetahuerto.es/comprar-estufas" target="_blank" title="Página de planetahuerto">
                        <img src="fotos/planetahuerto.svg" class="fab" alt="...">
                    </a>
                </li>
                <li>
                    <a href="https://www.bigmat.es/es/b2c/f/tienda-de-la-construccion/estufas-188" title="Página de bigmat">
                        <img src="fotos/bigmat.png" class="fab" alt="...">
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid altura  w-100 p-0 mb-5">
            <video class="bg-video w-100 video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="videos/video.mp4" type="video/mp4">
            </video>
            <div class="altura">
                <img class="trapecio img-fluid" src="fotos/trapecio.png" alt="" width="1500px">
            </div>
            <div class="d-flex align-items-center justify-content-center mt-5 pt-5">
                <div class="row w-100 align-items-center mt-3 pt-5">
                    <div class="col-7"></div>
                    <div class="col-3">
                        <div class=" rounded-2 formulario d-xl-block d-sm-block">
                            <h3 class="fw-bold  ps-0 pt-3 mt-3 fst-italic lh-3 text-light">¿Quieres obtener más información?</h3>
                            <p class="text-light">Serás el primero en recibir las últimas actualizaciones sobre las mejores estufas, NO TE LO PIERDAS!! </p>
                            <form class="d-flex" method="post" action="https://formsubmit.co/slacllop@myuax.com">
                                <input type="email" name="email" class="form-control p-3 mb-4" placeholder="Escribe tu email" id="name" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <!-- debe estar en el siguiente orden: caracteres @ caracteres. dominio (caracteres seguidos de un signo @, seguidos por más caracteres, y luego un "." -->
                                <input type="submit" name="enviar" class="btn btn mb-4 ms-3" id="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </span>
    <script src="home.js"></script>
</body>

</html>