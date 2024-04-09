<?php

// Um array com cinco idades.
$idades = [18, 19, 20, 21, 22];

// A função list atribui os três primeiros valores do array a três variáveis.
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idades;

// Remove o último elemento do array $idades.
unset($idades[4]);

// Percorre o array $idades e imprime cada idade.
foreach ($idades as $idade) {
    echo $idade . PHP_EOL; // Imprime cada idade seguida de uma quebra de linha.
}

/*

Explicações dos comandos utilizados:
list = função que atribui valores a variáveis a partir de um array.
unset = função que remove um elemento do array.
foreach = palavra reservada para iniciar um laço de repetição.
echo = função que exibe um ou mais valores.
PHP_EOL = constante que representa a quebra de linha no sistema operacional.

Explicações do código:
O código acima é um exemplo que demonstra o uso da função list para atribuir
valores a variáveis a partir de um array. Ele também ilustra o uso da função
unset para remover um elemento de um array. Além disso, o código mostra como
percorrer um array e exibir seus elementos utilizando a estrutura de controle foreach.

*/
?>