<?php


$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];


foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "<br>";


$frutas[] = "Abacaxi";


echo "Vetor após adicionar nova fruta:<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

?>