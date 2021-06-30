<!DOCTYPE html>
<html lang= "es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#form1 p {
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="raiz.php">

<p>Programa que calcule la hipotenusa de un triangulo rectangulo</p>
<table width="412" border="0" align="center">
  <tr>
    <td colspan="2"><center>
      <p>CALCULO</p>
    </center></td>
  </tr>
  <tr>
    <td width="143">CATETO A:</td>
    <td width="253"><label for="a"></label>
    <input type="text" name="a" id="a" /></td>
  </tr>
  <tr>
    <td>CATETO B:</td>
    <td><label for="textfield2"></label>
    <input type="text" name="b" id="textfield2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="button" id="button" value="Calcular" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
</body>
</html>

<?php
error_reporting(0);
$a = $_POST['a'];
$b = $_POST['b'];
$mensaje = "La hipotenusa es : ";
$raiz;
$cuadrado;
$cuadrado = pow($a, 2) + pow($b, 2);
$raiz = sqrt($cuadrado);
echo "$mensaje $raiz";

?>
