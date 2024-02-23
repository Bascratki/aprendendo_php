<?php

// Define um array com idades de 0 a 7.
$idades = [0, 1, 2, 3, 4, 5, 6, 7];

// Loop que percorre o array $idades. Deve ir de 0 até count($idades) - 1 para evitar índice indefinido.
for ($i = 0; $i < count($idades); $i++) {
    // Imprime cada idade seguida de uma quebra de linha.
    echo $idades[$i] . PHP_EOL;
}

// Imprime a quantidade total de números no array $idades.
echo "Essa lista possui " . count($idades) . " números";

/* 

Explicações dos comandos utilizados:
for = palavra reservada para iniciar um laço de repetição.
count = função que retorna a quantidade de elementos de um array.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do código:
O código acima é um exemplo que demonstra o uso de um laço de repetição
para percorrer um array e exibir seus elementos. Ele também ilustra o uso
da função count para obter a quantidade de elementos de um array.

*/
?>