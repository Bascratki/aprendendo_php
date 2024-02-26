<?php

// Define uma função para gerar um e-mail
function geraEmail(string $nome): void
{
    // Utiliza a sintaxe heredoc para criar o conteúdo do e-mail
    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para
    informar que sua conta está

    Ass: Equipe do Banco;

    FIM;

    // Imprime o conteúdo do e-mail
    echo $conteudoEmail;
}

// Chama a função geraEmail com o nome 'Lucas Stopinski'
geraEmail('Lucas Stopinski');

/*

Explicação do código:
Este código é um exemplo prático de como criar e utilizar funções
para gerar conteúdo dinâmico em PHP, bem como demonstrar o uso eficaz
da sintaxe heredoc para lidar com strings multilinhas.

*/
?>