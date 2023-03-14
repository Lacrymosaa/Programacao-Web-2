<?php

class Calculadora {
    private $res; // variável que armazena o resultado das operações
    private $mem;

    public function __construct() {
        session_start();
        if (isset($_SESSION['res'])) {
            $this->res = $_SESSION['res'];
        } else {
            $this->res = 0;
        }
    }

    public function zerar() {
        $this->res = 0;
        $_SESSION['res'] = $this->res;
    }

    public function desfaz() {
        if (isset($_SESSION['mem'])) {
            $this->res = $_SESSION['mem'];
            $_SESSION['res'] = $this->res;
            $_SESSION['mem'] = 0;
        }
        return $this->getRes();
    }

    public function getRes() {
        return $this->res;
    }

    public function soma($valor1, $valor2) {
        $_SESSION['mem'] = $this->res;
        $this->res = $valor1 + $valor2;
        $_SESSION['res'] = $this->res;
    }

    public function subtrai($valor1, $valor2) {
        $_SESSION['mem'] = $this->res;
        $this->res = $valor1 - $valor2;
        $_SESSION['res'] = $this->res;
    }

    public function multiplica($valor1, $valor2) {
        $_SESSION['mem'] = $this->res;
        $this->res = $valor1 * $valor2;
        $_SESSION['res'] = $this->res;
    }

    public function divide($valor1, $valor2) {
        $_SESSION['mem'] = $this->res;
        if ($valor2 != 0) {
            $this->res = $valor1 / $valor2;
        } else {
            $this->res = "Erro: divisão por zero";
        }
        $_SESSION['res'] = $this->res;
    }

    public function potencia($valor1, $valor2) {
        $_SESSION['mem'] = $this->res;
        $this->res = pow($valor1, $valor2);
        $_SESSION['res'] = $this->res;
    }

    public function porcentagem($valor1) {
        $_SESSION['mem'] = $this->res;
        $this->res = $valor1 / 100;
        $_SESSION['res'] = $this->res;
    }

    public function raiz($valor1) {
        $_SESSION['mem'] = $this->res;
        $this->res = sqrt($valor1);
        $_SESSION['res'] = $this->res;
    }
}
