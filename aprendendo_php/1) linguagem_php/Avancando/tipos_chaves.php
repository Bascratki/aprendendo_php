<?php

// Define um array com chaves de diferentes tipos, todas convertidas para 1.
$array = [
    1 => 'a', // Chave inteira 1.
    '1' => 'b', // Chave string '1', PHP converte a chave string '1' para inteiro 1.
    1.5 => 'c', // Chave float 1.5, PHP converte a chave float para inteiro, resultando em 1.
    true => 'd' // Chave boolean true, PHP converte true para inteiro 1.
];

// Itera sobre o array e imprime cada valor. Devido às conversões de chave, o array contém apenas um elemento.
foreach ($array as $item) {
    echo $item . PHP_EOL; // Imprime 'd', o último valor atribuído à chave convertida para 1.
}

/*

Explicações dos comandos utilizados:
foreach = palavra reservada para iniciar um laço de repetição.
as = palavra reservada para associar um valor a uma variável.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do código:
O código acima é um exemplo que demonstra como o PHP trata chaves de diferentes tipos
em um array. Ele ilustra que, ao utilizar chaves de diferentes tipos, o PHP converte
todas as chaves para o tipo inteiro 1, resultando em um array com apenas um elemento.

*/
?>