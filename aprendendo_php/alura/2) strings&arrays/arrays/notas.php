<?php

// Definindo um array associativo com nomes de alunos e suas notas
$notas = [
    'Ana' => 10,
    'Maria' => 6,
    'João' => 7,
    'José' => 8,
    'Paula' => 9,
];

// Ordenando o array pelo nome do aluno em ordem decrescente
krsort ($notas);

// Exibindo o array após a ordenação
var_dump ($notas);

// Verificando se $notas é um array
if (is_array ($notas)) {
    echo "Sim, é um array" . PHP_EOL; //Imprime "Sim, é um array"
}

// Verificando se $notas é uma lista (um array sequencial sem lacunas nas chaves)
var_dump(array_is_list($notas));

// Verificando se a Ana fez a prova
echo "Ana fez a prova: " . PHP_EOL;
var_dump(isset($notas['Ana'])); //Imprime "Ana fez a prova: bool(true)"

// Verificando se alguém tirou 10
echo "Alguém tirou 10 ?" . PHP_EOL;
var_dump(in_array(10, $notas, true)); //Imprime "Alguém tirou 10 ? bool(true)"

// Procurando quem tirou 10
echo "Quem tirou 10 ?" . PHP_EOL;
var_dump(array_search(10, $notas, true)); //Imprime "Quem tirou 10 ? string(3) "Ana""

/*

Explicações dos comandos utilizados:
krsort = função que ordena um array associativo pelas chaves em ordem decrescente.
var_dump = função que exibe informações sobre uma variável.
is_array = função que verifica se uma variável é um array.
array_is_list = função que verifica se um array é uma lista (um array sequencial sem lacunas nas chaves).
isset = função que verifica se uma variável foi iniciada.
in_array = função que verifica se um valor existe em um array.
array_search = função que procura por um valor em um array e retorna a chave correspondente.

Explicações do código:
O código acima é um exemplo que demonstra o uso de funções para manipular arrays associativos.
Ele ordena um array associativo de notas de alunos em ordem decrescente pelo nome do aluno e
exibe o array após a ordenação. Em seguida, ele verifica se o array é um array e se é uma lista,
se a aluna Ana fez a prova, se alguém tirou 10 e quem tirou 10.

*/
?>