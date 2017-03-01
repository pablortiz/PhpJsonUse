<?php 

/* @package 
* @author Pablo Ortiz Taboada 12/02/2017
* @author https://github.com/pablortiz/
*
* clase de dospitivo.  
*
*
* @package Emilious_Sender
*/


class dispositivos{

  private $id;
	private $tipo;
	private $descripcion;
	private $stock;
	

	function __construct() 
	{
		$stock = 0;
		$descripcion ="";
 		$tipo = ""; 
	}
	   
	 /* @param int $id
	  * @param string $tipo
	  * @param string $descripcion
	  * @param string $stock
	  */
	public function anadeDispositivo($id,$tipo,$descripcion,$stock)
	{
	  $this->id	= $id;
	  $this->tipo	= $tipo;
		$this->descripcion = $descripcion;
 		$this->stock =  $stock ;
	
	}

	function dameId(){ 			return $this->id; }
	function dameTipo(){ 		return $this->tipo; }
	function dameDescripcion(){	return $this->descripcion; }	
	function dameStock(){ 		return $this->stock; }
	
	/**	
	* 
	* 
	*/

	function procesaDatos()
	{		
		include_once "./procesaDatos.php";
		ProcesaD::buscaDispositivo( $this->tipo);
	}



}





?>