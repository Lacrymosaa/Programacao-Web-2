<?php

class Data {
  private $dia;
  private $mes;
  private $ano;

  public function __construct($d = 0, $m = 0, $a = 0) {
    $this->dia = $d;
    $this->mes = $m;
    $this->ano = $a;
  }

  public function setDia($d) {
    $this->dia = $d;
  }

  public function getDia() {
    return $this->dia;
  }

  public function setMes($m) {
    $this->mes = $m;
  }

  public function getMes() {
    return $this->mes;
  }

  public function setAno($a) {
    $this->ano = $a;
  }

  public function getAno() {
    return $this->ano;
  }

  public function incrementaDia() {
    $this->dia++;
    if ($this->dia > $this->diasNoMes()) {
      $this->dia = 1;
      $this->mes++;
      if ($this->mes > 12) {
        $this->mes = 1;
        $this->ano++;
      }
    }
  }

  public function decrementaDia() {
    $this->dia--;
    if ($this->dia == 0) {
      $this->mes--;
      if ($this->mes == 0) {
        $this->mes = 12;
        $this->ano--;
      }
      $this->dia = $this->diasNoMes();
    }
  }

  private function diasNoMes() {
    $diasMes = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    if ($this->mes == 2 && $this->anoBissexto()) {
      return 29;
    }
    return $diasMes[$this->mes];
  }

  public function dataComoString() {
    return sprintf('%02d/%02d/%04d', $this->dia, $this->mes, $this->ano);
  }

  public function anoBissexto() {
    return ($this->ano % 4 == 0 && $this->ano % 100 != 0) || $this->ano % 400 == 0;
  }

  public function diferencaEmDias(Data $outraData) {
    $data1 = strtotime($this->dataComoString());
    $data2 = strtotime($outraData->dataComoString());
    $diferenca = $data1 - $data2;
    return floor($diferenca / (60 * 60 * 24));
  }

  public function compara(Data $outraData) {
    if ($this->ano > $outraData->getAno()) {
      return 1;
    } else if ($this->ano < $outraData->getAno()) {
      return -1;
    } else {
      if ($this->mes > $outraData->getMes()) {
        return 1;
      } else if ($this->mes < $outraData->getMes()) {
        return -1;
      } else {
        if ($this->dia > $outraData->getDia()) {
          return 1;
        } else if ($this->dia < $outraData->getDia()) {
          return -1;
        } else {
          return 0;
        }
      }
    }
}
}
?>