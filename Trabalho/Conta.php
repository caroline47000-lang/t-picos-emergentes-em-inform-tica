<?php
class Conta {
    public $numeroConta;
    public $titular;
    public $saldo = 0;
    public $taxaJuros;

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de R$ $valor realizado. <br>";
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado. <br>";
        } else {
            echo "Saldo insuficiente para o saque de R$ $valor! <br>";
        }
    }

    public function exibirSaldo() {
        echo "Titular: $this->titular | Saldo Atual: **R$ $this->saldo** <br><br>";
    }
}

$minhaConta = new Conta();
$minhaConta->titular = "Mariana Costa";
$minhaConta->depositar(500);
$minhaConta->sacar(150);
$minhaConta->exibirSaldo();
?>