<?php

class Estoque {
   
    private $produtos = [];

    
    public function adicionarProduto($nome, $quantidade) {
        if ($quantidade > 0) {
         
            $this->produtos[] = [
                'nome' => $nome,
                'quantidade' => $quantidade
            ];
        }
    }

   
    public function listarProdutos() {
        echo "=== PRODUTOS EM ESTOQUE ===\n";
        foreach ($this->produtos as $produto) {
            echo "Produto: " . $produto['nome'] . " | Qtd: " . $produto['quantidade'] . "\n";
        }
        echo "---------------------------\n";
    }

   
    public function totalItens() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto['quantidade'];
        }
        return $total;
    }
}



$estoque = new Estoque();


$estoque->adicionarProduto("Caderno", 15);
$estoque->adicionarProduto("Caneta Azul", 50);
$estoque->adicionarProduto("Borracha", 10);


$estoque->listarProdutos();
echo "Total de itens no estoque: " . $estoque->totalItens() . "\n";

?>



$estoque = new Estoque();


$estoque->adicionarProduto("Caderno", 15);
$estoque->adicionarProduto("Caneta Azul", 50);
$estoque->adicionarProduto("Borracha", 10);


$estoque->listarProdutos();
echo "Total de itens no estoque: " . $estoque->totalItens() . "\n";

?>