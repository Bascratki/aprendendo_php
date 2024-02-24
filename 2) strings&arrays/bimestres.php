<?php

// Notas dos alunos no primeiro bimestre
$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

// Notas dos alunos no segundo bimestre
$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

// Identificando alunos presentes no primeiro bimestre, mas ausentes no segundo
$alunosFaltantes = array_diff_key ($notasBimestre1, $notasBimestre2);

// Obtendo os nomes dos alunos faltantes
$nomesAlunos = array_keys ($alunosFaltantes);

// Obtendo as notas dos alunos faltantes
$notasAlunos = array_values ($alunosFaltantes);

// Combinando as notas com os nomes dos alunos (inverte a associação usual de nome => nota)
print_r (array_combine ($notasAlunos, $nomesAlunos));

// Invertendo o array de alunos faltantes para ter as notas como chaves e os nomes como valores
print_r (array_flip ($alunosFaltantes));

/*

Explicações dos comandos utilizados:
array_diff_key = função que retorna um array contendo todas as chaves do primeiro array que não estão presentes em nenhum dos outros arrays.
array_keys = função que retorna todas as chaves ou uma parte das chaves de um array.
array_values = função que retorna todos os valores de um array.
array_combine = função que cria um novo array usando um array para as chaves e outro para os valores.
array_flip = função que troca todas as chaves de um array com seus valores correspondentes.

Explicações do código:
O código acima é um exemplo que demonstra o uso de funções para manipulação de arrays em PHP.
Ele ilustra o uso das funções array_diff_key, array_keys, array_values, array_combine e array_flip para identificar e manipular os alunos faltantes no segundo bimestre, bem como suas respectivas notas.

*/
?>