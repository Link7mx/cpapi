<?php
include("api.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Api (mascara)</title>
	<script src="js.js"></script>
</head>
<body>
    <div style="border:black; display: flex;justify-content: center; align-items: center;">
<form name="Form1" method="post" action="<?php echo $target ?>" id="Form1">
	<br><br>
	<h2>Mascara de Acceso API Codigos Postales</h2>
	<h6>Cordero Cruz Ricardo P.</h6>
	<p>
Con el objetivo de facilitar la actualización de la base de datos de Códigos <br>
Postales de nuestros clientes, ponemos a su disposición, la Descarga de Códigos <br>
Postales en línea, en la que podrá realizar la descarga por Estado o Entidad <br>
Federativa, así como de todo el País.
	</p>
	<br>
	<div><?php echo $key ?></div>
	<label>Seleccione el estado: </label>
	<select name="cboEdo"  id="cboEdo" tabindex="1" class="cbo" style="width:220px;"><?php echo $estadosoption ?></select>
	<br><br>
	<label>Seleccione el formato:</label>
	<input id="rblTipo_0" type="radio" name="rblTipo" value="xls" checked="checked" /><label for="rblTipo_0">EXCEL</label>
	<input id="rblTipo_1" type="radio" name="rblTipo" value="txt" /><label for="rblTipo_1">TXT</label>
	<input id="rblTipo_2" type="radio" name="rblTipo" value="xml" /><label for="rblTipo_2">XML</label>
	<br><br>
	<input type="image" src="Boton-descargar-azul.png" name="btnDescarga" id="btnDescarga" title=""  style="border-width:0px;" height="10%" width="10%" />											
</form> 
</div>

</body>
</html>