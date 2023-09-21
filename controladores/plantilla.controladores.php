<?php
Class ControladorPlantilla{
    /**
     * Llamada a la plantilla
     */
    public function ctrTraerPlantill(){
        #include() Se utiliza para invocar el archivo que contiene
        #codigo html o php
        include "vistas/plantilla.php";
    }
}

?>