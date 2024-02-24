<?php

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patrícia',
    6 => 'Niko',
    7 => 'Kilderson',
    8 => 'Daiane',
];

$alunos2022 = [...$alunos2021, 'Lucas', ...$novosAlunos];
$alunos2022 [] =  'Gustavo';

array_push ($alunos2022, 'Lucas', 'Iago');
array_unshift ($alunos2022, 'Daniel');

echo (array_push ($alunos2022)) . PHP_EOL;
echo (array_shift ($alunos2022)) . PHP_EOL;
echo (array_pop( $alunos2022)) . PHP_EOL;

print_r ($alunos2022);