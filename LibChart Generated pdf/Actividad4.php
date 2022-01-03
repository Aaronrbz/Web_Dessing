<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?PHP
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "votacion");
    $result = mysqli_query($link, "SELECT Nombre, idVotantes FROM votantes");
    ?>

    <form action="Actividad4B.php" method="post">

        <p>
        Introduce tu nombre:


        <select name="idVotantes">
        <?php while ($row = mysqli_fetch_array($result)) { ?>


            <option name="nombre" value=<?php echo $row["idVotantes"] ?>> <?php echo $row['Nombre'] ?> </option>

        <?php } ?>
        </select>


        <?php
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
        </p>


        <p><input type="radio" name="partido" value="PRI" />PRI
            <input type="radio" name="partido" value="PAN" />PAN
            <input type="radio" name="partido" value="PRD" />PRD
            <input type="radio" name="partido" value="MORENA" />MORENA
            <input type="radio" name="partido" value="Nulo" />Anular voto
        </p>
          <img src="pri.png" width="55"height="34">
          <img src="pan.png" width="55"height="34">
          <img src="prd.png" width="55"height="34">
          <img src="morena.png" width="70"height="34">
          <img src="nulo.jpg" width="70"height="34">
        <p><input type="submit" /></p>


    </form>
    <img src="generated/graficaPartidos.png">

</body>

</html>
