<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="formulariocirculo.php" method="POST">


<input type="text" name="tamaño" required>
<input type="submit" name="enviar" value=" Enviar ">
</form>
<?PHP
require_once 'circulo.php';
$n=$_REQUEST['tamaño'];
//echo "El tamaño del arreglo es: $n <br>";
$C = new Circulo($n);
$area=$C->area();
$per=$C->perimetro();
$ra=$C->ObtenRadio();

echo "El Radio del circulo = $ra <br>";
echo "El Area del circulo = $area <br>";
echo "El Perimetro del circulo = $per <br>";
?>


</body>
</html>
