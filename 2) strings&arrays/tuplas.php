<?php

// Definindo um array associativo com dados de um aluno
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

// Descomentando a linha para mostrar outra forma de extrair dados diretamente para variáveis
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

// Usando extract para criar variáveis a partir das chaves do array associativo
extract($dados);

// Imprimindo as variáveis extraídas
var_dump($nome, $nota, $idade);

// Usando compact para criar um novo array associativo a partir das variáveis existentes
var_dump(compact('nome', 'nota', 'idade'));

/*

Explicações dos comandos utilizados:
extract = função que extrai elementos de um array associativo como variáveis, nomeando as variáveis com as chaves do array.
compact = função que cria um array associativo a partir de variáveis nomeadas, usando os nomes das variáveis como chaves e seus valores como valores do array.
var_dump = função que exibe informações sobre uma variável.


Explicações do código:
O código inicia definindo um array associativo com informações de um aluno. Em seguida,
utiliza a função `extract` para extrair essas informações como variáveis individuais
($nome, $nota, $idade). Após a extração, as variáveis são impressas usando `var_dump`
para demonstrar que foram criadas corretamente. Por fim, o código usa a função `compact`
para criar um novo array associativo a partir das variáveis existentes, demonstrando assim
uma maneira eficiente de reagrupar variáveis em um array.

*/
?>
