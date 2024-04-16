<?php

// Define uma variável com a URL para verificação
$url = 'https://alura.com.br';

// Verifica se a URL começa com 'https://'
if (str_starts_with($url, 'https://')) {
    // Imprime uma mensagem indicando que a URL é segura
    echo "É uma URL segura";
} else {
    // Imprime uma mensagem indicando que a URL não é segura
    echo "Não é uma URL segura";
}

// Adiciona uma quebra de linha para separar as mensagens
echo PHP_EOL;

// Verifica se a URL termina com '.br'
if (str_ends_with($url, '.br')) {
    // Imprime uma mensagem indicando que a URL é de um domínio brasileiro
    echo "É um domínio brasileiro";
} else {
    // Imprime uma mensagem indicando que a URL não é de um domínio brasileiro
    echo "Não é um domínio brasileiro";
}

/*

Explicações dos comandos utilizados:
str_starts_with = Verifica se uma string começa com um determinado prefixo.
str_ends_with = Verifica se uma string termina com um determinado sufixo.

Explicação do código:
Neste código, estamos utilizando as funções str_starts_with e str_ends_with
para verificar se uma URL começa com 'https://' e se termina com '.br',
respectivamente. Caso a URL comece com 'https://', imprimimos uma mensagem
indicando que é uma URL segura. Caso contrário, imprimimos uma mensagem
indicando que não é uma URL segura. Em seguida, verificamos se a URL termina
com '.br' e imprimimos uma mensagem indicando se é um domínio brasileiro ou não.

*/
?>