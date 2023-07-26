<?php

Class ControladorBannner{

	/*==============================================================
	   Mostrar banner
	=================================================================*/

static public functionctrMostrarBanner(){

	$tabla = "banner" ;
	$respuesta = ModeloBanner::mdlMostarBanner($tabla);

	return$respuesta;
	

}

}

