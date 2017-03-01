<?php
/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017 
 *
 * imprime mensage de procesar 
 */ 
 
$c = isset( $_REQUEST["c"] )	? $_REQUEST["c"]	: "" ;
include_once "./readJson.php";
include_once "./dispositivo.lib.php";
if (is_numeric($c) )
{
	echo 	$objdispositivo[$c]->procesaDatos();
}	

?>