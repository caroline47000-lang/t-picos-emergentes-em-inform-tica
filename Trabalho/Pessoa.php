<?php
class Pessoa {
    public $nome;
    public $idade;
    public $genero;

    public function exibirInformacoes() {
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade anos <br>";
        echo "Gênero: $this->genero <br>";
    }

    public function calcularIdadeDetalhada() {
        $meses = $this->idade * 12;
        $dias = $this->idade * 365;
        
        echo "Idade em meses: ~ $meses meses <br>";
        echo "Idade em dias: ~ $dias dias <br><br>";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Julia Souza";
$pessoa1->idade = 25;
$pessoa1->genero = "Feminino";

$pessoa1->exibirInformacoes();
$pessoa1->calcularIdadeDetalhada();
?>