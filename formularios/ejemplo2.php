<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Ejemplo 2 PHP </title>
</head>
<body>
<h1> Arreglos en PHP </h1>
<hr>
<?PHP
$n=$_REQUEST['tamaño'];
echo "El tamaño del arreglo es: $n <br>";

$car=$_REQUEST['carrera'];
echo "Eres de: $car <br><br>";

echo "Tus pasatiempos son:<br>";
$pasa= $_REQUEST['pasa'];
$tam=count($pasa);
for ($i=0; $i<$tam; $i++)
   print("$pasa[$i]<BR>");

echo "<br><br>";
for($i=1; $i<=$n; $i++)
{
  $A[$i]=rand(1,50);
}

for($i=1; $i<=$n; $i++)
{
  echo "$i = $A[$i] <br>";
}

?>
</body>
</HTML>