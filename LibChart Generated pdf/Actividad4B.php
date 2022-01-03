
<?php
  //Graficar inicializacion
  include "libchart/libchart/classes/libchart.php";
  $chart = new HorizontalBarChart(600,270);
  $dataset = new XYDataSet();

  //Conectando con la base de datos
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "votacion");


  //POST
  $partido = mysqli_real_escape_string($link, $_POST ['Partido']);
  $id_votante = mysqli_real_escape_string($link, $_POST ['idVotantes']);
  $nowFormat = date('Y-m-d H:i:s');


  mysqli_query($link, "INSERT INTO votos (Partido, idVotantes, Fecha)
  VALUES('$partido', '$id_votante', '$nowFormat' )");

  $result = mysqli_query($link, "SELECT Partido FROM votos");

  $pri = 0;
  $pan = 0;
  $prd = 0;
  $morena = 0;
  $nulo = 0;

  while ($row = mysqli_fetch_array($result)) {

    if($row["Partido"] == "PRI"){
        $pri++;
    }elseif($row["Partido"] == "PAN"){
        $pan++;
    }elseif($row["Partido"] == "PRD"){
        $prd++;
    }elseif($row["Partido"] == "MORENA"){
        $morena++;
    }else{
        $nulo++;
    }
  }
    $dataset->addPoint(new Point("PRI", $pri));
    $dataset->addPoint(new Point("PAN", $pan));
    $dataset->addPoint(new Point("PRD", $prd));
    $dataset->addPoint(new Point("MORENA", $morena));
    $dataset->addPoint(new Point("NULO", $nulo));


    $chart->setDataSet($dataset);
    $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 240));
    $chart->setTitle("Votos por partido");
    $chart->render("generated/graficaPartidos.png");



?>

<h1> Gracias por su voto </h1>

<a href="Actividad4.php">Volver a votaciones</a>
