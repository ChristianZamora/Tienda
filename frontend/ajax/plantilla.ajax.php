<?php
/*plantilla.ajax.php nunca será solicitado por el sistema hasta que javascript lo busque y trabaje en un segundo plano.*/
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		/*Convertir ARRAY a STRING con json_encode() para poder enviarlo a ajax*/
		echo json_encode($respuesta);

	}


}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
  