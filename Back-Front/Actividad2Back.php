<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Conjuntos{
            private $tamano_conjunto_a;
            private $tamano_conjunto_b;

            private $conjunto_a;
            private $conjunto_b;


            public function __construct($tca, $tcb)
            {
                $this->tamano_conjunto_a = (int)$tca;
                $this->tamano_conjunto_b = (int)$tcb;

                for($i = 0; $i < $this->tamano_conjunto_a; $i++){
                    $this->conjunto_a[$i] = rand(1,20);
                }
                for($i = 0; $i < $this->tamano_conjunto_b; $i++){
                    $this->conjunto_b[$i] = rand(1,20);
                }
            }

            private function imprimir_conjunto($conjunto){
                for($i = 0; $i < count($conjunto); $i++){
                  if($i>count($conjunto)){
                    break;
                  }
                  else{
                    echo($conjunto[$i]);
                  //  echo "$i <br>";
                    echo("| ");}

                }
                echo("<br/>");
            }

            public function imprimir_conjuntos()
            {
                $this->imprimir_conjunto($this->conjunto_a);
                $this->imprimir_conjunto($this->conjunto_b);
            }

            public function union_conjuntos(){
                $conjunto_union = array();
                for($i = 0; $i < $this->tamano_conjunto_a; $i++){
                    if (!in_array($this->conjunto_a[$i], $conjunto_union)) {
                        array_push($conjunto_union, $this->conjunto_a[$i]);
                    }
                }

                for($i = 0; $i < $this->tamano_conjunto_b; $i++){
                    if (!in_array($this->conjunto_b[$i], $conjunto_union)) {
                        array_push($conjunto_union, $this->conjunto_b[$i]);
                    }
                }
                echo "La union es: <br>";
                $this->imprimir_conjunto($conjunto_union);
            }

            public function intersection_conjunto(){
              $conjunto_interseccion= array();
              for ($i=0; $i<$this->tamano_conjunto_a;$i++){
                $aux=$this->conjunto_a[$i];
                foreach($this->conjunto_b as &$val){
                  if($aux==$val)
                  //$conjunto_interseccion[$i]=$aux;
                  array_push($conjunto_interseccion,$aux);
                }
              }
              echo "La insterseccion es: <br>";
              $this->imprimir_conjunto($conjunto_interseccion);
            }

            function interseccion1_conjunto(){
              $conjunto_interseccion1= array();
              $conjunto_interseccion1=array_intersect($this->conjunto_a,$this->conjunto_b);
              echo "La insterseccion es: <br>";
              $this->imprimir_conjunto($conjunto_interseccion1);
            }

            function diferencia_conjunto(){
              $conjunto_diferencia=array();
              $conjunto_diferencia=array_diff($this->conjunto_a,$this->conjunto_b);


              echo "La dirferencia es <br>";
              $this->imprimir_conjunto($conjunto_diferencia);
            }

        }
        $tca = $_REQUEST['conjuntoA'];
        $tcb = $_REQUEST['conjuntoB'];

        $conjuntos = new Conjuntos($tca,$tcb);
        $conjuntos->imprimir_conjuntos();
      //  $conjuntos->union_conjuntos();
      $conjuntos-> intersection_conjunto();//la que yo hice
        $conjuntos->interseccion1_conjunto();//la que hice con funcion del sistema
        $conjuntos->diferencia_conjunto();
    ?>
</body>
</html>
