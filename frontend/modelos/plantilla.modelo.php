<?php

require_once "conexion.php";

class ModeloPlantilla {
	// Se utiliza una función estática cuando recibe parámetros
	static public function mdlEstiloPlantilla($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		// Por tratarse de una sóla línea de una sola fila, aplicamos el fetch
		return $stmt->fetch();
		$stmt->close();

	}
}