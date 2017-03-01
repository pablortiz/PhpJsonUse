<?php
/*
 * @package 
 * @author Pablo Ortiz Taboada 12/02/2017
 * @author https://github.com/pablortiz/
 *
 * añade borrar modifica registros a un archivo json 
 * almacenna en un array de clase todo el contenido del archivo
 * usa el nº de registro como índice del array
 * los datos del registro son ; id, tipo, descticion, stock
 * id no es se usa de clave.
 *
 */
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="./scripts.js"></script>

<link rel="stylesheet" type="text/css" href="./style.css">

<div class="divform">

	<table class="form">
	<tr align="center">
	<td><b>ID</b></td>
	<td><b>TIPO</b></td>
	<td style="width:200px"><b>DESCRIPCION</b></td>
	<td><b>STOCK</b></td>
	</tr>
	<tr>	
		<td><input type="text" value= "" id="id"					class="form" style="width:100px"></td>
		<td><input type="text" value= "" id="tipo"				class="form"></td>
		<td><input type="text" value= "" id="descripcion"	class="form" style="width:350px"></td>
		<td><input type="text" value= "" id="stock"				class="form"></td>	
	</tr>
	</table>	

	<input type="hidden" value= "" id="c">


	<div class="form">	
		<input type="button" value ="Graba"   id="graba"  class="form">
		<input type="button" value ="Borra"   id="borra"  class="form">
		<input type="button" value ="Limpia"  id="limpia" class="form">	
		<input type="button" value ="Procesa" id="procesa" class="form">	
	</div>


</div>


<div class="divtable">

<?php


include_once "./readJson.php";
include_once "./dispositivo.lib.php";


echo "<table class='selec'>";
echo "<tr>";
echo "<td><b>ID</b></td>";		
echo "<td><b>TIPO</b></td>";		
echo "<td><b>DESCRIPCION</b></td>";		
echo "<td><b>STOCK</b></td>";		
echo "</tr>";
$c=0;
foreach ($objdispositivo as $objdisp)
{
	echo "<tr class='selec' onclick ='ver(".$c.")' >";
	echo "<td>".$objdisp->dameId()."</td>";
	echo "<td>".$objdisp->dameTipo()."</td>";		
	echo "<td>".$objdisp->dameDescripcion()."</td>";		
  echo "<td>".$objdisp->dameStock()."</td>";		
	echo "</tr>";	
	$c++;
}
echo "</table>";

?>

<script>
		
</script>