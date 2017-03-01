<?php
/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017
 * @author https://github.com/pablortiz/
 *
 * borra elemento del array de clase.
 */ 

$c= isset($_REQUEST["c"]) ? $_REQUEST["c"] : "" ;
if ( !strlen($c) ) exit;
include_once "./readJson.php";
include_once "./dispositivo.lib.php";
unset($objdispositivo[$c]);
grabaJson();
?>