<?php

$produto = [
    "nome" => "Notebook",
    "preco" => 3500.00,
    "estoque" => 15
];


echo "Dados do Produto:<br><br>";

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>