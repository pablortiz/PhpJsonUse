<?php
 /* @package 
 *  @author Pablo Ortiz Taboada 12/02/2017
 *  @author https://github.com/pablortiz/ 
 *  
 *  Si se pasa c (index del array de clase ) actualiza registro en arhivo json
 *  si c = null se graba un registro nuevo
 *  
 */
$c  	 				= isset( $_REQUEST["c"] ) 						? $_REQUEST["c"] 						: "" ;
$id 	 				= isset( $_REQUEST["id"] ) 						? $_REQUEST["id"] 					: "" ;
$tipo  				= isset( $_REQUEST["tipo"] ) 					? $_REQUEST["tipo"] 				: "" ;
$descripcion  = isset( $_REQUEST["descripcion"] ) 	? $_REQUEST["descripcion"] 	: "" ;
$stock 				= isset( $_REQUEST["stock"] ) 				? $_REQUEST["stock"] 				: "" ;


include_once "./readJson.php";
include_once "./dispositivo.lib.php";
		
if (is_numeric($c) )
{
	// actualiza	
	$objdispositivo[$c]->anadeDispositivo($id,$tipo,$descripcion,$stock);		
	grabaJson();
		
}elseif( !strlen($c) && ( strlen($id) || strlen($tipo) || strlen($descripcion) || strlen($stock) ) ) 
{	
	// nuevo	
	$i = count($objdispositivo);
	$objdispositivo[$i] = new dispositivos();
	$objdispositivo[$i]->anadeDispositivo($id,$tipo,$descripcion,$stock);		
	grabaJson();
}
?>