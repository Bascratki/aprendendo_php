<?php

// Definindo a string de exemplo, que é um valor CSV com vírgulas no início e no fim
$csv = ',Vinicius Dias,24,';

// Usando trim para remover as vírgulas do início e do final da string
echo trim($csv, ',') . PHP_EOL;

// Usando ltrim para remover as vírgulas apenas do início da string
echo ltrim($csv, ',') . PHP_EOL;

// Usando rtrim para remover as vírgulas apenas do final da string
echo rtrim($csv, ',') . PHP_EOL;

/*

Explicações dos comandos utilizados:
trim = Remove espaços em branco (ou outros caracteres) do início e do final da string.
ltrim = Remove espaços em branco (ou outros caracteres) do início da string.
rtrim = Remove espaços em branco (ou outros caracteres) do final da string.

Explicação do código:
Neste código, estamos utilizando as funções trim, ltrim e rtrim para remover
caracteres de uma string. Primeiramente, utilizamos trim para remover as vírgulas
do início e do final da string. Em seguida, utilizamos ltrim para remover as vírgulas
apenas do início da string e rtrim para remover as vírgulas apenas do final da string.

*/
?>