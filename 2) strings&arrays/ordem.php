<?php

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

function ordenaNotas (array $nota1,array  $nota2): int
{
    return $nota2 ['nota'] <=> $nota1 ['nota'];
}

usort($notas, 'ordenaNotas');
var_dump ($notas);