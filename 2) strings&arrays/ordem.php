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
O código acima é um exemplo que demonstra o uso de funções para manipular arrays multidimensionais.
Ele define um array multidimensional de alunos e suas notas, e uma função para comparar as notas.
Em seguida, ele ordena o array de notas em ordem decrescente usando a função de comparação e exibe o array após a ordenação.

*/
?>