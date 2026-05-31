<?php

class ContaBancaria {
    
    private $titular;
    private $saldo;

    
    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0; 
    }

   
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado com sucesso!\n";
        } else {
            echo "Erro: O valor do depósito deve ser positivo.\n";
        }
    }

    
    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente\n";
            return; 
        }

        if ($valor > 0) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso!\n";
        }
    }

  
    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}




$minhaConta = new ContaBancaria("Carlos Silva");
echo "Conta criada para: " . $minhaConta->getTitular() . "\n";
echo "Saldo Inicial: R$ " . $minhaConta->getSaldo() . "\n";
echo "----------------------------------------\n";


$minhaConta->depositar(500);


$minhaConta->sacar(200);


echo "----------------------------------------\n";
echo "Saldo Final de " . $minhaConta->getTitular() . ": R$ " . $minhaConta->getSaldo() . "\n";

?>