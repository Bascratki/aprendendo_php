<?php

// Define a quantidade total de alunos
$qtdealunos = 15;

// Inicia o loop 'for', com o contador iniciando em 1 e indo até a quantidade total de alunos
for ($i = 1; $i <= $qtdealunos; $i++) {
    // Verifica se o contador atingiu o número 13
    if ($i == 13) {
        // Interrompe o loop imediatamente se o contador é igual a 13
        break;
    }
    // Imprime o número atual do contador seguido por uma quebra de linha
    echo "#$i:" . PHP_EOL;
}

/*

Explicações dos comandos utilizados:
for = palavra reservada para iniciar um laço de repetição.
echo = função que exibe um ou mais valores.
if = palavra reservada para iniciar uma estrutura condicional.
break = palavra reservada para interromper um laço de repetição.

Explicações do operador utilizado:
++ = operador de incremento.
-- = operador de decremento.
== = operador de comparação "igual a".
<= = operador de comparação "menor ou igual a".

Explicações do código:
O código acima é um exemplo que demonstra o uso de um laço de repetição 'for' para exibir uma lista numerada de alunos.
Ele ilustra o uso de um laço de repetição para percorrer os números de 1 a 15 e exibir o número do aluno, interrompendo o
loop imediatamente quando o contador atinge o número 13.

*/
?>