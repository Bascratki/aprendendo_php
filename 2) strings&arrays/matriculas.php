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

$alunos2022_1 = array_merge($alunos2021, $novosAlunos);
$alunos2022_2 = $alunos2021 + $novosAlunos;
$alunos2022_3 = [...$alunos2021, 'LUCAS', ...$novosAlunos];

print_r($alunos2022_1);
print_r($alunos2022_2);
print_r($alunos2022_3);