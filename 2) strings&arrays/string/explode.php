<?php

// Definindo uma string contendo números de 1 a 10 separados por espaço
$array = '1 2 3 4 5 6 7 8 9 10';

// Usando explode para dividir a string em um array, com limite de 2 elementos
var_dump(explode(' ', $array, 2));

/*

Explicações dos comandos utilizados:
explode = Divide uma string em strings menores, utilizando um delimitador.
var_dump = Imprime informações sobre uma variável de forma legível.

Explicação do código:
Neste código, estamos utilizando a função explode para dividir uma string
contendo números de 1 a 10 separados por espaço em um array. O segundo
parâmetro da função explode é o delimitador que será utilizado para dividir
a string. O terceiro parâmetro é o limite de elementos que o array resultante
pode ter. Neste caso, estamos limitando o array resultante a 2 elementos.

*/
?>