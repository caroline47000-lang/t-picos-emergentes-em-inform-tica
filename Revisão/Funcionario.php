<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0) {
          
            $this->salario += $this->salario * ($percentual / 100);
        }
    }

    public function exibir() {
        echo "Nome: " . $this->getNome() . "\n";
        echo "Cargo: " . $this->getCargo() . "\n";
        echo "Salário: R$ " . number_format($this->getSalario(), 2, ',', '.') . "\n";
        echo "----------------------------------------\n";
    }
}


$funcionario = new Funcionario("Ana Costa", "Desenvolvedora PHP", 4500.00);

echo "=== Informações Antes do Aumento ===\n";
$funcionario->exibir();


$funcionario->aumentarSalario(15);

echo "=== Informações Após 15% de Aumento ===\n";
$funcionario->exibir();
?>