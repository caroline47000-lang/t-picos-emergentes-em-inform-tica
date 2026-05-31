<?php

class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->setLargura($largura);
        $this->setAltura($altura);
    }

    public function getLargura() {
        return $this->largura;
    }

    public function setLargura($largura) {
        if ($largura > 0) {
            $this->largura = $largura;
        } else {
            echo "Erro: A largura deve ser um valor positivo. Definindo como 1.\n";
            $this->largura = 1;
        }
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        if ($altura > 0) {
            $this->altura = $altura;
        } else {
            echo "Erro: A altura deve ser um valor positivo. Definindo como 1.\n";
            $this->altura = 1;
        }
    }

    public function calcularArea() {
        return $this->getLargura() * $this->getAltura();
    }

    public function calcularPerimetro() {
        return 2 * ($this->getLargura() + $this->getAltura());
    }
}


$retangulo1 = new Retangulo(5.0, 10.0);
$retangulo2 = new Retangulo(7.0, 8.0);

echo "Área do Retângulo 1: " . $retangulo1->calcularArea() . "\n";
echo "Área do Retângulo 2: " . $retangulo2->calcularArea() . "\n";

if ($retangulo1->calcularArea() > $retangulo2->calcularArea()) {
    echo "O Retângulo 1 tem a maior área.\n";
} elseif ($retangulo2->calcularArea() > $retangulo1->calcularArea()) {
    echo "O Retângulo 2 tem a maior área.\n";
} else {
    echo "Ambos os retângulos têm áreas iguais.\n";
}
?>