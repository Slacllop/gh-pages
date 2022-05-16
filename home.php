<!DOCTYPE html>
<html lang="es">

<head>
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
    <span class="w-100 vh-100 ">
        <div class="div-container-fluid color shadow-sm fixed-top">
            <nav id="menu" class="w3-center w3-animate-top">
                <div class="row pt-1 pb-1">
                    <div class="col-3 justify-content-start">
                        <div class="me-1">
                          <a class="text-decoration-none text-light fw-bold me-5" href="index.php">
                            <img src="titulo3.png" class="w-50 pt-3 img-fluid me-5" alt="">
                        </a>  
                        </div>
                        
                    </div>
                    <div class="col-7 d-flex justify-content-end pe-5">
                        <div class="pt-2 me-4 pe-1 mt-1">
                            <a class="text-decoration-none text-light fs-5 ps-3 texto" href="index.php">
                                Inicio
                            </a>
                        </div>
                        <div class="dropdown me-3 mt-1">
                            <button class="btn btn text-light fs-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Estufas
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-content text-center" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="Estufas_electricas.php">Estufas eléctricas</a></li>
                                <li><a class="dropdown-item" href="Estufas_leña.php">Estufas de leña</a></li>
                                <li><a class="dropdown-item" href="Estufas_butano.php">Estufas de butano</a></li>
                                <li><a class="dropdown-item" href="Estufas_halogenas.php">Estufas halógenas</a></li>
                                <li><a class="dropdown-item" href="Estufas_pellets.php">Estufas de pellets</a></li>
                                <li><a class="dropdown-item" href="Estufas_biomasa.php">Estufas de Biomasa</a></li>
                            </ul>
                        </div>
                        <div class="dropdown me-3 mt-1">
                            <button class="btn btn text-light fs-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Fabricantes
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-content text-center" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="orbegozo.php">ORBEGOZO</a></li>
                                <li><a class="dropdown-item" href="lacunza.php">LACUNZA</a></li>
                                <li><a class="dropdown-item" href="hergom.php">HERGOM</a></li>
                                <li><a class="dropdown-item" href="ferroli.php">FERROLI</a></li>
                                <li><a class="dropdown-item" href="cecotec.php">CECOTEC</a></li>
                                <li><a class="dropdown-item" href="homcom.php">HOMCOM</a></li>
                            </ul>
                        </div>
                        <div class="pt-2 mt-1">
                            <a class="text-decoration-none text-light fs-5 ps-1 mt-2 texto" href="contactos/contacto.php">Contacto</a>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <div>
                            <a class="btn btn pb-1 mt-2" href="login/registrarse.php">
                                <h5 class="text-light texto">Registrate</h5>
                            </a>
                        </div>
                        <div class="me-3 ">
                            <a class="btn btn pb-1 log-in m-2 shadowcard" href="login/login.php">
                                <h5 class="text-light texto">Accede</h5>
                            </a>
                        </div>
                    </div>
                    <span class="indicador" id="indicador"></span>
                </div>
            </nav>
        </div>
    </span>
    <script src="navbar.js"></script>
</body>

</html>