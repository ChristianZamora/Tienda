
<?php

require_once "controladores/plantilla.controlador.php";
require_once "modelos/plantilla.modelo.php";

require_once "controladores/productos.controlador.php";
require_once "modelos/productos.modelo.php";

require_once "modelos/rutas.php";

//instanciamos clase
$plantilla = new ControladorPlantilla();

//ejecutar método
$plantilla->plantilla();


?>


