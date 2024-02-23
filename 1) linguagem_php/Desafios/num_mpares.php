<?php

// Inicia um loop que vai de 1 a 100.
for ($num = 1; $num <= 100; $num++) {
    // Verifica se o número atual é ímpar.
    if ($num % 2 != 0) {
        // Se o número é ímpar, imprime o número seguido de uma quebra de linha.
        echo $num . PHP_EOL;
    }
}

/*

Explicações dos comandos utilizados:
for = palavra reservada para iniciar um laço de repetição.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do operador utilizado:
!= = operador de comparação "diferente de".
++ = operador de incremento.
-- = operador de decremento.
== = operador de comparação.
= = operador de atribuição.
. = operador de concatenação.
* = operador de multiplicação.
/ = operador de divisão.
** = operador de exponenciação.
% = operador de módulo.

Explicações do código:
O código acima é um exemplo que demonstra o uso de um laço de repetição para percorrer
os números de 1 a 100 e exibir apenas os números ímpares. Ele também ilustra o uso do
operador de módulo para verificar se um número é ímpar.

*/
?>