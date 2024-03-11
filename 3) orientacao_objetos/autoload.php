<?php

// Registra uma função no autoload para carregar automaticamente as classes necessárias.
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    // Substitui o namespace 'Alura\\Banco' pelo diretório 'src' no caminho do arquivo.
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    
    // Substitui o separador de namespace '\\' pelo separador de diretórios do sistema operacional.
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    
    // Adiciona a extensão '.php' ao caminho do arquivo.
    $caminhoArquivo .= '.php';

    // Verifica se o arquivo existe antes de tentar incluí-lo.
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo; // Inclui o arquivo se ele existir.
    }
});

/*

Explicação dos comandos utilizados:
spl_autoload_register = Registra uma função no autoload para carregar automaticamente as classes necessárias.
str_replace = Substitui todas as ocorrências de uma substring por outra substring.

Explicação do código:
Neste código, estamos registrando uma função no autoload para carregar automaticamente as classes necessárias.
Para isso, estamos substituindo o namespace 'Alura\\Banco' pelo diretório 'src' no caminho do arquivo, e
substituindo o separador de namespace '\\' pelo separador de diretórios do sistema operacional.
Por fim, estamos adicionando a extensão '.php' ao caminho do arquivo, e verificando se o arquivo existe
antes de tentar incluí-lo.

*/
?>