<!-- #Index
    #En el mostraremos la salida de las vistas al usuario y tambien a traves de el de 
    # enviaremos ñas distintas acciones que el usuario envie al controlador  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi AppWEB-HDHG</title>
    <!-- PLUGGINS CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- PLUGGINS JS -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/89d770df89.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- LOGOTIPO -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!-- MENU OPCIONES -->
    <div class="container-fluid bg-light">
        <div class="container">


            <ul class="nav nav-justified py-2 nav-pills">
                <!-- Get: $GET_["VARIABLE"] Variables que se pasan como parametros via URL
                Tambien conocidos como cadena o consulta a traves de la UL
                Cuando es la primera variable se separa con ?
                Las que le siguen a continuacion se separan con &

            
            -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- CONTENIDO -->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            #ISSET:isset() Determina si una variable esta definida y no es NULL
            if (isset($_GET["pagina"])) {
                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir"
                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";

                }
            } else {
                include "vistas/paginas/registro.php";
            }


            ?>
        </div>
    </div>


</body>

</html>