<?php

echo "<h2>1. Relatório de Notas</h2>";

$alunosNotas = [
    "Paula" => 8.5,
    "Bruno" => 7.0,
    "Carina" => 9.5
];


$media = array_sum($alunosNotas) / count($alunosNotas);


$maiorNota = max($alunosNotas);
$melhorAluno = array_search($maiorNota, $alunosNotas);

echo "A média da turma é: <b>" . number_format($media, 2) . "</b><br>";
echo "O(A) aluno(a) com a maior nota é <b>$melhorAluno</b> com a nota <b>$maiorNota</b>.<br>";

echo "<hr>"; 

echo "<h2>2. Cadastro de Usuários (Vetor Multidimensional)</h2>";

$cadastro = [
    ["nome" => "Lucas", "email" => "lucas@email.com", "curso" => "Turismo"],
    ["nome" => "Carla", "email" => "carla@email.com", "curso" => "Gastronomia"],
    ["nome" => "Mariana", "email" => "mari@email.com", "curso" => "Computaçaõ"]
];

echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
echo "<tr><th>Nome</th><th>Email</th><th>Curso</th></tr>";

foreach ($cadastro as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario['nome'] . "</td>";
    echo "<td>" . $usuario['email'] . "</td>";
    echo "<td>" . $usuario['curso'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>