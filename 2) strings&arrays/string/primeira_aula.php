<?php

// Definindo uma variável com o nome
$nome = 'Vinicius Dias';

// Verificando se o nome contém 'Dias'
$minhaFamilia = str_contains($nome, 'Dias');

// Imprimindo uma mensagem dependendo se o nome contém 'Dias' ou não
if ($minhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
};

/*

Explicações dos comandos utilizados:
str_contains = Verifica se uma string contém outra string.

Explicação do código:
Neste código, estamos utilizando a função str_contains para verificar se o nome
contém 'Dias'. Caso o nome contenha 'Dias', imprimimos uma mensagem indicando
que é da nossa família. Caso contrário, imprimimos uma mensagem indicando que
não é da nossa família.

*/
?>