<?php

// Definindo um array com os alunos de 2021
$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

// Definindo um array com os novos alunos
$novosAlunos = [
    5 => 'Patrícia',
    6 => 'Niko',
    7 => 'Kilderson',
    8 => 'Daiane',
];

// Combinando os arrays de alunos de 2021 e novos alunos para 2022, adicionando 'Lucas' entre eles
$alunos2022 = [...$alunos2021, 'Lucas', ...$novosAlunos];
// Adicionando 'Gustavo' ao final do array
$alunos2022[] = 'Gustavo';

// Adicionando 'Lucas' e 'Iago' ao final do array
array_push($alunos2022, 'Lucas', 'Iago');
// Adicionando 'Daniel' ao início do array
array_unshift($alunos2022, 'Daniel');

// A tentativa de usar array_push para imprimir um valor é incorreta. Removemos essa linha.
// Removendo o primeiro elemento do array e imprimindo-o
echo array_shift($alunos2022) . PHP_EOL;
// Removendo o último elemento do array e imprimindo-o
echo array_pop($alunos2022) . PHP_EOL;

// Imprimindo a lista atualizada de alunos para 2022
print_r($alunos2022);

/*

Explicações dos comandos utilizados:
... = operador de propagação que permite expandir um array em locais onde vários elementos são esperados.
array_push = função que adiciona um ou mais elementos ao final de um array.
array_unshift = função que adiciona um ou mais elementos ao início de um array.
array_shift = função que remove e retorna o primeiro elemento de um array.
array_pop = função que remove e retorna o último elemento de um array.
print_r = função que exibe informações sobre uma variável.

Explicações do código:
O código acima é um exemplo que demonstra o uso de funções para manipular arrays.
Ele define um array com os alunos de 2021 e um array com novos alunos para 2022.
Em seguida, ele combina os dois arrays, adicionando 'Lucas' entre eles e 'Gustavo' ao final.
Depois, ele adiciona 'Lucas' e 'Iago' ao final do array e 'Daniel' ao início.
Por fim, ele remove o primeiro e o último elemento do array e imprime a lista atualizada de alunos para 2022.

*/
?>