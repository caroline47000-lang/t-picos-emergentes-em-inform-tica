<?php
class Carro {
    public $marca;
    public $modelo;
    public $cor;
    public $velocidadeMaxima;
    public $velocidadeAtual = 0;

    public function acelerar() {
        $this->velocidadeAtual += 10;
        echo "Acelerando... Velocidade atual: $this->velocidadeAtual km/h <br>";
    }

    public function frear() {
        $this->velocidadeAtual = 0;
        echo "O carro parou. <br>";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";

echo "Carro: $meuCarro->marca $meuCarro->modelo <br>";
$meuCarro->acelerar();
$meuCarro->frear();
?>