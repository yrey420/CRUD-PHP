<?php 

require_once "Controladores/plantillaControlador.php";
require_once "Controladores/formulariosControlador.php";

require_once "Modelo/formularios.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();
