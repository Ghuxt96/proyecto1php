<!DOCTYPE html>
<html lang= "es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hipotenusa de un triangulo rectangulo</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximun-sacle=1.0, minimun-scale=1.0"></head>
<link rel="stylesheet" href="css/style.css">

<body>
<div class="contenedor">
<form  id="form1" name="form1" method="post" action="hipotenusa.php" class="form">
<div class="form-header">
<h1 class="form-tittle"><span>INGRESE LOS DATOS<span></h1>

    <label form="Cateto A" class="form-label" width="143" >CATETO ADYACENTE</label> 
    <input type="text"  class="form-input" name="a" id="a" placeholder="ingrese los datos"></td>

    <label form="Cateto B" class="form-label" width="143" >CATETO OPUESTO</label> 
    <input type="text" class="form-input" name="b" id="textfield2"placeholder="ingrese los datos" >

    <input type="submit" class="btn-submit" name="button" id="button" value="Calcular" />

</form>
</body>
</html>

<p>&nbsp;</p>
<?php
error_reporting(0);
$a = $_POST['a'];
$b = $_POST['b'];
$mensaje = "La hipotenusa es de: ";
$raiz;
$cuadrado;
$cuadrado = pow($a, 2) + pow($b, 2);
$raiz = sqrt($cuadrado);
echo "$mensaje $raiz";

?>
