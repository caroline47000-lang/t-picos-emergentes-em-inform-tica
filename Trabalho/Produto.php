<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidadeEstoque;

    public function adicionarEstoque($quantidade) {
        $this->quantidadeEstoque += $quantidade;
        echo "Adicionado $quantidade unidades de $this->nome. <br>";
    }

    public function removerEstoque($quantidade) {
        if ($quantidade <= $this->quantidadeEstoque) {
            $this->quantidadeEstoque -= $quantidade;
            echo "Removido $quantidade unidades de $this->nome. <br>";
        } else {
            echo "Erro: Estoque insuficiente de $this->nome para remover $quantidade unidades! <br>";
        }
    }

    public function exibirInformacoes() {
        echo "--- Info Produto --- <br>";
        echo "Produto: $this->nome <br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . " <br>";
        echo "Estoque Atual: $this->quantidadeEstoque unidades <br><br>";
    }
}

$prod1 = new Produto();
$prod1->nome = "Teclado Mecânico";
$prod1->preco = 250.00;
$prod1->quantidadeEstoque = 15;

$prod1->exibirInformacoes();
$prod1->adicionarEstoque(5);
$prod1->removerEstoque(2);
$prod1->exibirInformacoes();
?>