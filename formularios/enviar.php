<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Formularios </title>
</head>
<body>
<h1> Arreglos en PHP </h1>
<hr>
<form action="ejemplo2.php" method="POST">
Da el tamaño del arreglo: <br>
<input type="text" name="tamaño" required>
<br><br>
Selecciona tu carrera: <br>
<INPUT TYPE="radio" NAME="carrera" VALUE="Ing.Cs" CHECKED>Ingeniería Computacional
<INPUT TYPE="radio" NAME="carrera" VALUE="Lic.Cs">Ciencias Computacionales
<INPUT TYPE="radio" NAME="carrera" VALUE="ITI">Tecnologías de la Inf.
<INPUT TYPE="radio" NAME="carrera" VALUE="Mecatrónica">Mecatrónica

<br><br>
Cuales son tus pasatiempos:<br>
<INPUT TYPE="checkbox" NAME="pasa[]" VALUE="Futbol" >Futbol
<INPUT TYPE="checkbox" NAME="pasa[]" VALUE="Leer" >Leer
<INPUT TYPE="checkbox" NAME="pasa[]" VALUE="Videojuegos" CHECKED>Videojuegos
<INPUT TYPE="checkbox" NAME="pasa[]" VALUE="Cine">Ir al cine


<br><br>
<input type="submit" name="enviar" value=" Enviar ">
</form>
</body>
</HTML>