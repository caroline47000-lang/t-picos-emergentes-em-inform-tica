<?php
class Aluno {
    public $nome;
    public $matricula;
    public $notas = []; // Usamos um array para as notas

    public function calcularSituacao() {
        $soma = array_sum($this->notas);
        $media = $soma / count($this->notas);
        
        echo "Aluno: $this->nome (Matrícula: $this->matricula) <br>";
        echo "Média: $media <br>";
        
        if ($media >= 7) {
            echo "Situação: **APROVADO** <br><br>";
        } else {
            echo "Situação: **REPROVADO** <br><br>";
        }
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Lucas Oliveira";
$aluno1->matricula = "2024001";
$aluno1->notas = [8, 7, 9]; // Notas do aluno
$aluno1->calcularSituacao();
?>