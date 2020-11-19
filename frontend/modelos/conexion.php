<?php

class Conexion {
	public static function conectar() {

		# Conexión a MySQL
		$link = new PDO("mysql:host=localhost;dbname=tienda",
			"root",
			"",

			array(PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
		// Ayuda a que los caracteres latinos no sean alterados y evitar que se tenga que hacer una codificación utf8 a cada llamado de la base de datos

		return $link;

	}
}
