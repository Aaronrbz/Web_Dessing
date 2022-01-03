<?php

class Circulo
{
  private $radio;

  public function __construct($r)
  {
    $this->radio = $r;
  }

  public function area()
  {
    return 3.1416*$this->radio*$this->radio;
  }

  public function perimetro()
  {
    return 2*3.1416*$this->radio;
  }

  public function ObtenRadio()
  {
   return $this->radio;
  }


}
