<?php
#Index
    #En el mostraremos la salida de las vistas al usuario y tambien a traves de el de 
    # enviaremos ñas distintas acciones que el usuario envie al controlador
    # require() establece que el codigo del archivo invocado es requerido 
    # es decir, obligatorio para el funcionamiento del programa, por ello 

    require_once("controladores/plantilla.controladores.php");

    $plantilla= new ControladorPlantilla();
    $plantilla->ctrTraerPlantill();

?>