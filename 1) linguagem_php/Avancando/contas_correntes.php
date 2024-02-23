<?php

// Declaração de um array associativo para a conta de Lucas, contendo nome do titular e saldo.
$conta1 = [
    'titular' => 'Lucas', // Nome do titular da conta.
    'saldo' => 1000 // Saldo inicial da conta.
];

// Declaração de um array associativo para a conta de Iago, contendo nome do titular e saldo.
$conta2 = [
    'titular' => 'Iago', // Nome do titular da conta.
    'saldo' => 2000 // Saldo inicial da conta.
];

// Declaração de um array associativo para a conta de Gustavo, contendo nome do titular e saldo.
$conta3 = [
    'titular' => 'Gustavo', // Nome do titular da conta.
    'saldo' => 3000 // Saldo inicial da conta.
];

// Agrupamento das contas individuais em um array indexado.
$contas = [$conta1, $conta2, $conta3];

// Laço de repetição 'for' para percorrer o array de contas.
for ($i = 0; $i < count($contas); $i++) {
    // Exibe o nome do titular e o saldo de cada conta.
    echo $contas[$i]['titular'] . " possui " . $contas[$i]['saldo'] . PHP_EOL;
}

/*

Explicações dos comandos utilizados:
for = palavra reservada para iniciar um laço de repetição.
count = função que retorna a quantidade de elementos de um array.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do código:
O código acima é um exemplo que demonstra o uso de arrays associativos e indexados
para armazenar informações de contas correntes. Ele também ilustra o uso de estruturas
de controle, como 'for', para percorrer arrays e exibir informações. Além disso, o código
mostra como utilizar a função 'count' para obter a quantidade de elementos de um array.

*/
?>