<?php
class Circulo {
    public $raio;

    public function calcularArea() {
        // Fórmula: π * r²
        $area = M_PI * pow($this->raio, 2);
        echo "Área do Círculo: " . number_format($area, 2) . " cm² <br>";
    }

    public function calcularPerimetro() {
        // Fórmula: 2 * π * r
        $perimetro = 2 * M_PI * $this->raio;
        echo "Perímetro do Círculo: " . number_format($perimetro, 2) . " cm <br><br>";
    }
}

$meuCirculo = new Circulo();
$meuCirculo->raio = 5;
$meuCirculo->calcularArea();
$meuCirculo->calcularPerimetro();
?>