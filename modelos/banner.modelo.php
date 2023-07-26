<?php

require_once "conexion.php";

class ModeloBanner{
	/*============================================
			Section comment block
	==============================================*/

	static public function mdlMostrarBanner($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt-> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;


	}


}