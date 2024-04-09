<?php

// Definindo um array associativo para as substituições com strtr
$trans = ["h" => "-", "hello" => "hi", "hi" => "hello"];
// Usando strtr para substituir na string conforme as regras definidas em $trans
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

// Usando str_replace para substituir 'hello' por 'hi' e 'hi' por 'hello' na string
echo str_replace(['hello', 'hi'], ['hi', 'hello'], 'hi all, I said hello') . PHP_EOL;

/*

Explicações dos comandos utilizados:
strtr = Traduz determinados caracteres de uma string.
str_replace = Substitui todas as ocorrências de uma substring por outra substring.

Explicação do código:
Neste código, estamos utilizando as funções strtr e str_replace para substituir
palavras em uma string. Primeiramente, utilizamos strtr para substituir palavras
na string conforme as regras definidas em um array associativo. Em seguida,
utilizamos str_replace para substituir 'hello' por 'hi' e 'hi' por 'hello' na string.

*/
?>