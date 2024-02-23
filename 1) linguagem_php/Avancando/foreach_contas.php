<?php

// Declaração de um array associativo para armazenar informações das contas correntes.
$contas = [
    '123.456.789-10' => [
        'titular' => 'Lucas', // Nome do titular da conta 'Lucas'.
        'saldo' => 1000 // Saldo inicial da conta de Lucas.
    ],
    '123.456.789-11' => [
        'titular' => 'Iago', // Nome do titular da conta 'Iago'.
        'saldo' => 2000 // Saldo inicial da conta de Iago.
    ],
    '123.456.789-12' => [
        'titular' => 'Gustavo', // Nome do titular da conta 'Gustavo'.
        'saldo' => 3000 // Saldo inicial da conta de Gustavo.
    ]
];

// Adiciona uma nova conta para 'Daniel' no array de contas correntes.
$contas['123.456.789-13'] = [
    'titular' => 'Daniel', // Nome do titular da nova conta adicionada.
    'saldo' => 4000 // Saldo inicial da conta de Daniel.
];

// Adiciona outra nova conta para 'Fábio' no array de contas correntes.
$contas['123.456.789-14'] = [
    'titular' => 'Fábio', // Nome do titular da outra nova conta adicionada.
    'saldo' => 5000 // Saldo inicial da conta de Fábio.
];

// Laço de repetição 'foreach' para percorrer o array associativo de contas correntes.
foreach ($contas as $cpf => $conta) {
    // Exibe o CPF e o nome do titular de cada conta corrente.
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/*

Explicações dos comandos utilizados:
foreach = palavra reservada para iniciar um laço de repetição.
as = palavra reservada para associar um valor a uma variável.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do código:
O código acima é um exemplo que demonstra o uso de arrays associativos para
armazenar informações de contas correntes. Ele também ilustra o uso da estrutura
de controle 'foreach' para percorrer arrays e exibir informações. Além disso,
o código mostra como adicionar novos elementos a um array associativo.

*/
?>