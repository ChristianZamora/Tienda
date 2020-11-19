<?php

require_once "conexion.php";

class ModeloPlantilla {
	// Se utiliza una función estática cuando recibe parámetros
	static public function mdlEstiloPlantilla($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		// Obtenemos array
		return $stmt->fetch();
		$stmt->close();

	}
}