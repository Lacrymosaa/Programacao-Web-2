<?php

require_once 'data.php';

class Voo {
  private $numeroVoo;
  private $dataVoo;
  private $assentosOcupados;

  public function __construct($numeroVoo, Data $dataVoo) {
    $this->numeroVoo = $numeroVoo;
    $this->dataVoo = $dataVoo;
    $this->assentosOcupados = array();
  }

  public function getProximoAssento() {
    for ($i = 1; $i <= 100; $i++) {
      if (!in_array($i, $this->assentosOcupados)) {
        return $i;
      }
    }
    return false;
  }

  public function verificaAssento($assento) {
    return in_array($assento, $this->assentosOcupados);
  }

  public function ocupa($assento) {
    if (!$this->verificaAssento($assento)) {
      $this->assentosOcupados[] = $assento;
      return true;
    }
    return false;
  }

  public function getVagas() {
    return 100 - count($this->assentosOcupados);
  }

  public function getVoo() {
    return $this->numeroVoo;
  }

  public function getDataVoo() {
    return $this->dataVoo;
  }
}

?>