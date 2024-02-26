<?php

// Definindo uma string de exemplo
$texto = 'Texto com qualquer coisa poxa e caramba';

// Substituindo palavras 'poxa' e 'caramba' por versões censuradas usando str_replace
echo str_replace(
    ['poxa', 'caramba'], // Palavras a serem substituídas
    ['p***', 'c*****'],  // Substituições
    $texto               // String original onde as substituições serão feitas
) . PHP_EOL;

// Tentativa de substituição de caracteres usando strtr
// Esta linha não funciona como esperado para a palavra 'poxa', pois 'poxa' e '***' não têm o mesmo comprimento
echo strtr($texto, 'poxa', '***') . PHP_EOL;

// Substituindo palavras 'poxa' e 'caramba' por uma única letra cada, usando strtr com um array associativo
echo strtr($texto, ['poxa' => 'p***', 'caramba' => 'c*****']) . PHP_EOL;

/*

Explicações dos comandos utilizados:
str_replace = Substitui todas as ocorrências de uma substring por outra substring.
strtr = Traduz determinados caracteres de uma string.

Explicação do código:
Neste código, estamos utilizando as funções str_replace e strtr para substituir
palavras em uma string. Primeiramente, utilizamos str_replace para substituir
as palavras 'poxa' e 'caramba' por versões censuradas. Em seguida, tentamos
substituir a palavra 'poxa' por '***' usando strtr, mas isso não funciona como
esperado, pois 'poxa' e '***' não têm o mesmo comprimento. Por fim, utilizamos
strtr com um array associativo para substituir as palavras 'poxa' e 'caramba'
por uma única letra cada.

*/
?>