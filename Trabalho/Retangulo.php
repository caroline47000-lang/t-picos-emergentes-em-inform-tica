<?php
class Retangulo {
    public $comprimento;
    public $largura;

    public function calcularArea() {
        $area = $this->comprimento * $this->largura;
        echo "Área do Retângulo: $area m² <br>";
    }

    public function calcularPerimetro() {
        $perimetro = 2 * ($this->comprimento + $this->largura);
        echo "Perímetro do Retângulo: $perimetro m <br><br>";
    }
}

$ret = new Retangulo();
$ret->comprimento = 10;
$ret->largura = 5;
$ret->calcularArea();
$ret->calcularPerimetro();
?>