<?php
class Carro {
    private $consumo;
    private $combustivel;

    public function __construct($consumo) {
        $this->consumo = $consumo;
        $this->combustivel = 0;
    }

    public function andar($distancia) {
        $combustivelGasto = $distancia / $this->consumo;
        if ($combustivelGasto <= $this->combustivel) {
            $this->combustivel -= $combustivelGasto;
            return true;
        } else {
            return false;
        }
    }

    public function getCombustivel() {
        return $this->combustivel;
    }

    public function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }
}
    $meuCarro = new Carro(10);
    echo "Nível de combustível: " . $meuCarro->getCombustivel() . " litros<br>";

    $meuCarro->setCombustivel(50);
    echo "Nível de combustível: " . $meuCarro->getCombustivel() . " litros<br>";

    $andou = $meuCarro->andar(100);
    if ($andou) {
        echo "Andou 100 km, combustível restante: " . $meuCarro->getCombustivel() . " litros<br>";
    } else {
        echo "Não foi possível andar 100 km, falta de combustível<br>";
    }

    $andou = $meuCarro->andar(500);
    if ($andou) {
        echo "Andou 500 km, combustível restante: " . $meuCarro->getCombustivel() . " litros<br>";
    } else {
        echo "Não foi possível andar 500 km, falta de combustível<br>";
    }

    $meuCarro->setCombustivel(30);
    echo "Nível de combustível: " . $meuCarro->getCombustivel() . " litros<br>";

    $andou = $meuCarro->andar(200);
    if ($andou) {
        echo "Andou 200 km, combustível restante: " . $meuCarro->getCombustivel() . " litros<br>";
    } else {
        echo "Não foi possível andar 200 km, falta de combustível<br>";
    }

?>