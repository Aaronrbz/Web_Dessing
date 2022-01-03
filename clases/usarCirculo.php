<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Clase Circulo </title>
</head>
<body>
<h2> Clase Circulo </h2>
<hr>
<?PHP
require_once 'circulo.php';
$C = new Circulo(5);
$area=$C->area();
$per=$C->perimetro();
$ra=$C->ObtenRadio();

echo "El Radio del circulo = $ra <br>";
echo "El Area del circulo = $area <br>";
echo "El Perimetro del circulo = $per <br>";
?>
</body>
</HTML>
