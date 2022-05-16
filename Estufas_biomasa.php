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

                                    $consulta="SELECT * FROM estufas WHERE cod_estufa=6 ORDER BY cod_estufa;";
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
                                                echo "<p class='texto'>Una estufa de biomasa es una de las opciones más ecológicas del mercado para calentar tu hogar en este invierno y evitar el frío.</p>";
                                                echo "<br>";
                                                echo "<p class='texto'>$dato[descripción]</p>";
                                                echo "<br>";
                                                echo "<p class='texto'>Las hidroestufas o termo estufas de biomasa producen agua caliente para conseguir calor a través de radiadores o suelo radiante.</p>";
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
                        <h1 class="fw-bold pb-4">Ventajas de las Estufas de biomasa</h1>
                        <ul>
                            <li>
                                <p class="texto"><strong>Recibir subvenciones: </strong>Puedes recibir subvenciones de las instituciones públicas para su compra e instalación, pues resulta un incentivo para la adquisición de formas de calefacción respetuosas con el medio ambiente y eficientes en la generación de residuos.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Emisiones nulas: </strong>Sus emisiones de CO2 son consideradas nulas. Esto es fundamental, pues la contaminación de este tipo de estufas también es nula
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Combustible: </strong>Utiliza un combustible renovable e inagotable, especialmente en el caso de las estufas de pellets.
                                </p>
                            </li>
                            <li>
                                <p class="texto"><strong>Cocinar: </strong>Algunos modelos tienen un diseño que permite aprovecharlas para cocinar, en la superficie o incluso con horno incorporado.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-3">
                        <h1 class="fw-bold pb-4">¿CÓMO FUNCIONAN LAS ESTUFAS DE BIOMASA?</h1>
                        <p class="texto">
                            El encendido se producirá automáticamente cargando el cenicero con pellets desde el depósito por medio de un sinfín y canal, mientras enciende una resistencia eléctrica (de unos 300w) que se encuentra justo en la base del cenicero. Al quemarse los primeros pellets se arranca la ventilación de la cámara de fuego, pasando un chorro de aire por el cenicero con el fin de avivar la llama. Las estufas tienen varios sensores de calor: cuando el sensor de la cámara de fuego llega a detectar fuego en el cenicero, la estufa “sabe” que está encendida e iniciará la ventilación del intercambiador con el fin de sacar el calor de la estufa hacia fuera.
                        </p>
                        <p class="texto">
                            Tras el encendido, la estufa entra en modo de funcionamiento normal cargando al cenicero con pellets y ventilando la cámara. Hasta que otro sensor de calor detecte que se ha alcanzado la temperatura deseada, que se habrá indicado previamente a través del panel de control, el mando a distancia o el móvil. La estufa no parará la combustión sino que modulará el flujo de pellets para obtener el nivel de combustión necesario para mantener la temperatura elegida.
                        </p>
                        <p class="texto">
                            La estufa calienta principalmente, a través de su ventilación regulable, hace pasar aire frio que entra en la máquina a través de una boca en la parte trasera de la estufa, pasa por el intercambiador y es expulsada por la parte frontal o de forma canalizada. En ningún momento este aire está en contacto con el fuego, o gases de combustión de la estufa. La estufa también calienta a través de la ventana de la cámara de combustión y del chasis.
                        </p>
                        <p class="texto">
                            Cuando la estufa se apaga el sinfín deja de echar pellets al cenicero y la máquina se apaga. Es importante apagar las estufas de pellet siempre a través de su panel de control o mediante su mando a distancia y nunca quitar la corriente antes de que esté parada.
                        </p>
                        <p class="texto">
                            La salida de gases de la estufa o chimenea, no suele aportar mucho calor, porque la estufa pasa sus gases por el intercambiador antes de expulsarla por la chimenea. Para hacerse una idea, se puede tocar una estufa de biomasa y su tubería de gases, pero el cristal de la ventana puedes quemar.
                        </p>
                    </div>
                    <div class="pt-3">
                        <img class="w-100 mx-auto d-block" src="fotos/estufa_biomasa.png" alt="">
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