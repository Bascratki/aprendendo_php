<?php

// Inicializa o contador
$i = 1;
// Define a quantidade total de alunos
$qtdealunos = 15;

// Enquanto o contador for menor ou igual à quantidade total de alunos
while ($i <= $qtdealunos) {
    // Imprime o número atual do contador
    echo "#$i:" . PHP_EOL;
    // Incrementa o contador
    $i = $i + 1;
}

/*
Explicações dos comandos utilizados:
echo = função que exibe um ou mais valores.
while = palavra reservada para iniciar um laço de repetição.
PHP_EOL = constante que representa a quebra de linha.

Explicações do operador utilizado:
<= = operador de comparação "menor ou igual a".
+ = operador de adição.

Explicações do código:
O código acima é um exemplo que demonstra o uso de um laço de repetição para exibir uma lista numerada de alunos.
Ele ilustra o uso de um laço de repetição para percorrer os números de 1 a 15 e exibir o número do aluno.

*/
?>