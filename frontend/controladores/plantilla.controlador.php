<?php

class ControladorPlantilla {

	/*=============================================
	=            LLAMAMOS A LA PLANTILLA            =
	=============================================*/
	public function plantilla() {
		include "vistas/plantilla.php";
	}

	/*=============================================
	=           TRAEMOS ESTILOS DINÁMICOS DE LA PLANTILLA            =
	=============================================*/
	public function ctrEstiloPlantilla() {
		$tabla     = "plantilla";
		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
		return $respuesta;
	}

}

?>