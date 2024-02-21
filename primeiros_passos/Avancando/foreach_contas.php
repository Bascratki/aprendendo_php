<?php

$contas = [
    '123.456.789-10' => [
        'titular' => 'Lucas',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Iago',
        'saldo' => 2000
    ],
    '123.456.789-12' => [
        'titular' => 'Gustavo',
        'saldo' => 3000
    ]
];

$contas['123.456.789-13'] = [
    'titular' => 'Daniel',
    'saldo' => 4000
];

$contas['123.456.789-14'] = [
    'titular' => 'Fábio',
    'saldo' => 5000
];

foreach ($contas as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}