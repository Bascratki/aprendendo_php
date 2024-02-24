<?php

// Definindo um array multidimensional de alunos e suas notas
$notas = [
    [
        'aluno' => 'João',
        'nota' => 7,
    ],
    [
        'aluno' => 'Maria',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
    [
        'aluno' => 'José',
        'nota' => 8,
    ],
    [
        'aluno' => 'Pedro',
        'nota' => 5,
    ],
    [
        'aluno' => 'Paula',
        'nota' => 10,
    ]
];

// Definindo uma função para comparar as notas
function ordenaNotas (array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

// Ordenando o array $notas usando a função de comparação
usort ($notas, 'ordenaNotas');

// Exibindo o array após a ordenação
var_dump ($notas);

/*

Explicações dos comandos utilizados:
usort = função que ordena um array usando uma função de comparação definida pelo usuário.
var_dump = função que exibe informações sobre uma variável.

Explicações do código:
O código acima é um exemplo que demonstra o uso de uma função de comparação para ordenar um array multidimensional.
Ele ilustra a definição de uma função de comparação para ordenar um array multidimensional de acordo com um critério
específico, bem como a ordenação do array usando a função de comparação definida.

*/
?>