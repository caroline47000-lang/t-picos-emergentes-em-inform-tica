<?php

class Aluno {
  
    private $nome;
    private $nota1;
    private $nota2;

   
    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        
        $this->setNota1($nota1);
        $this->setNota2($nota2);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function setNota1($nota1) {
        if ($nota1 >= 0 && $nota1 <= 10) {
            $this->nota1 = $nota1;
        } else {
            echo "Erro: A nota 1 deve ser entre 0 e 10. Definindo como 0.\n";
            $this->nota1 = 0;
        }
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function setNota2($nota2) {
        if ($nota2 >= 0 && $nota2 <= 10) {
            $this->nota2 = $nota2;
        } else {
            echo "Erro: A nota 2 deve ser entre 0 e 10. Definindo como 0.\n";
            $this->nota2 = 0;
        }
    }

    
    public function calcularMedia() {
        return ($this->getNota1() + $this->getNota2()) / 2;
    }

   
    public function situacao() {
        $media = $this->calcularMedia();
        echo "Aluno(a): " . $this->getNome() . "\n";
        echo "Média: " . $media . "\n";
        
        if ($media >= 5) {
            echo "Situação: Aprovado\n";
        } else {
            echo "Situação: Reprovado\n";
        }
        echo "---------------------------\n";
    }
}




$aluno1 = new Aluno("Mariana Silva", 7.5, 6.0);
$aluno1->situacao();


$aluno2 = new Aluno("João Souza", 4.0, 4.5);
$aluno2->situacao();


$aluno3 = new Aluno("Carlos Lima", 12.0, 5.0);
$aluno3->situacao();

?>