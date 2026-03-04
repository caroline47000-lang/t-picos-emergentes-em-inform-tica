<?php

$numeros = [10, 20, 30, 40, 50];

unset($numeros[2]);


echo "Números restantes:<br>";

foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>