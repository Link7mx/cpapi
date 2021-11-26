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
    
<form name="Form1" method="post" action="<?php echo $target ?>" id="Form1">
	<div><?php echo $key ?></div>
	<select name="cboEdo"  id="cboEdo" tabindex="1" class="cbo" style="width:220px;"><?php echo $estadosoption ?></select>
	<input id="rblTipo_0" type="radio" name="rblTipo" value="xls" checked="checked" /><label for="rblTipo_0">EXCEL</label>
	<input id="rblTipo_1" type="radio" name="rblTipo" value="txt" /><label for="rblTipo_1">TXT</label>
	<input id="rblTipo_2" type="radio" name="rblTipo" value="xml" /><label for="rblTipo_2">XML</label>
	<input type="image" src="Boton-descargar-azul.png" name="btnDescarga" id="btnDescarga" title=""  style="border-width:0px;" />											
</form>


</body>
</html>