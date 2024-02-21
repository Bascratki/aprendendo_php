<?php

$conta1 = [
    'titular' => 'Lucas',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Iago',
    'saldo' => 2000
];
$conta3 = [
    'titular' => 'Gustavo',
    'saldo' => 3000
];

$contas = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas); $i++) {
    echo $contas[$i]['titular'] . " possui " . $contas[$i]['saldo'] . PHP_EOL;
}