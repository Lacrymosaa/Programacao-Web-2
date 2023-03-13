<?php
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura = 1, $altura = 1) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getArea() {
        return $this->largura * $this->altura;
    }

    public function getPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }

    public function ehQuadrado() {
        return $this->largura == $this->altura;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    $retangulo = new Retangulo($largura, $altura);

    echo 'Área: ' . $retangulo->getArea() . '<br>';
    echo 'Perímetro: ' . $retangulo->getPerimetro() . '<br>';
    echo 'É um quadrado? ' . ($retangulo->ehQuadrado() ? 'Sim' : 'Não') . '<br>';
}
?>
