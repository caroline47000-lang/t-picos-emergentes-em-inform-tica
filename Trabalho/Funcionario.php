<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $dataAdmissao;

    public function calcularSalarioAnual() {
        $anual = $this->salario * 12;
        echo "O salário anual de $this->nome é: R$ $anual <br>";
    }
}

$func1 = new Funcionario();
$func1->nome = "Carlos Silva";
$func1->cargo = "Desenvolvedor";
$func1->salario = 5000;

$func1->calcularSalarioAnual();
?>