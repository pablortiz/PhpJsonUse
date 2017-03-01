<?php 

/*  @package 
 *  @author Pablo Ortiz Taboada 12/02/2017
 *  @author https://github.com/pablortiz/ 
 *  
 *  
 *  Crea el array de clase con todos los registros del archivo json
 *  
 */
 
include_once "./dispositivo.lib.php";
$ctx = stream_context_create(array( 'http' => array( 'timeout' => 1 ) ) ); 
$strfile  =  file_get_contents("./perifericos.json", 0, $ctx); 
$arrdisp = json_decode($strfile);
for ($i=0;$i<count($arrdisp);$i+=1)
{
	$disp = $arrdisp[$i];	
	$objdispositivo[$i] = new dispositivos();
	$objdispositivo[$i]->anadeDispositivo($disp->id,$disp->tipo,$disp->descripcion,$disp->stock);	
}


/**
* Vuelca los datos de las instancias del array a un archivo json
*
*/
function grabaJson()
{

	global $objdispositivo;
	foreach ($objdispositivo as $objdisp)
	{
		$arr[] = array('id'=>$objdisp->dameId(),'tipo'=>$objdisp->dameTipo() ,'descripcion'=>$objdisp->dameDescripcion(),'stock'=>$objdisp->dameStock());		
	}
	$fp = fopen('./perifericos.json', 'w');	
	fwrite($fp, json_encode($arr));
	fclose($fp);
}



?>