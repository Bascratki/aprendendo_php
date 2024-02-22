<?php

$notas = [
    'Ana' => 10,
    'Maria' => 6,
    'João' => 7,
    'José' => 8,
    'Paula' => 9,
];

krsort ($notas);
var_dump ($notas);

if (is_array($notas)) {
    echo "Sim, é um array" . PHPE_EOL;
}

var_dump (Array_is_list($notas));

foreach ($notas as $aluno => $nota)
{
    if ($aluno == 'José') {
        return true;
    }
}