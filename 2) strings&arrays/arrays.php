<?php

// Cria um array associativo
$array = [
    1 => 'one', // Chave 1, valor 'one'
    2 => 'two', // Chave 2, valor 'two'
    3 => 'three', // Chave 3, valor 'three'
];

// Itera sobre cada elemento do array
foreach ($array as $id => $numeral) {
    // Imprime a chave (número) e seu valor correspondente (numeral em inglês)
    echo "$id em inglês é $numeral" . PHP_EOL;
}

// Imprime a quantidade total de elementos no array
echo "Total: " . count($array) . PHP_EOL;

/*

Explicações dos comandos utilizados:
foreach = palavra reservada para iniciar um laço de repetição que percorre cada elemento de um array.
echo = função que exibe um ou mais valores.
count = função que retorna a quantidade de elementos em um array.
PHP_EOL = constante que representa a quebra de linha.

Explicações do código:
O código acima é um exemplo que demonstra o uso de um laço de repetição 'foreach' para percorrer um array associativo.
Ele ilustra o uso de um laço de repetição para exibir a chave e o valor de cada elemento do array, bem como a obtenção da
quantidade total de elementos no array.

*/
?>