<?php
class Triangulo {
    public $ladoA;
    public $ladoB;
    public $ladoC;

    public function verificarTipo() {
        if ($this->ladoA == $this->ladoB && $this->ladoB == $this->ladoC) {
            echo "Tipo: Equilátero (todos os lados iguais) <br><br>";
        } elseif ($this->ladoA == $this->ladoB || $this->ladoA == $this->ladoC || $this->ladoB == $this->ladoC) {
            echo "Tipo: Isósceles (dois lados iguais) <br><br>";
        } else {
            echo "Tipo: Escaleno (todos os lados diferentes) <br><br>";
        }
    }
}

$tri = new Triangulo();
$tri->ladoA = 10;
$tri->ladoB = 10;
$tri->ladoC = 10;
$tri->verificarTipo();
?>