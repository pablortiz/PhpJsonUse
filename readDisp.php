<?php
 /* @package 
 *  @author Pablo Ortiz Taboada 12/02/2017
 *  @author https://github.com/pablortiz/ 
 *  
 *  Si se pasa c (index del array de clase ) 
 *  imprime todos los campos de un registro  del archivo json
 *  
 */

if(!isset($_REQUEST["c"]) )      exit;
if(!is_numeric($_REQUEST["c"]) ) exit;

include_once "./dispositivo.lib.php";
include_once "./readJson.php";
$c = $_REQUEST["c"];
echo $objdispositivo[$c]->dameId();
echo ";;;";
echo $objdispositivo[$c]->dameTipo();
echo ";;;";
echo $objdispositivo[$c]->dameDescripcion();
echo ";;;";
echo $objdispositivo[$c]->dameStock();
?>