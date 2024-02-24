<?php

// Define uma variável com um valor de ponto flutuante
$idade = 21.00;
// Define uma variável com um valor inteiro
$salario = 1000;
// Realiza uma divisão que resulta em um valor de ponto flutuante
$divisao = 10 / 3;
// Define uma variável com uma string
$texto = "Olá Mundo";
// Define variáveis booleanas
$verdadeiro = true;
$falso = false;

// Imprime o tipo de cada variável
echo gettype($idade) . "\n"; // Imprime "double"
echo gettype($salario) . "\n"; // Imprime "integer"
echo gettype($divisao) . "\n"; // Imprime "double"
echo gettype($texto) . "\n"; // Imprime "string"
echo gettype($verdadeiro) . "\n"; // Imprime "boolean"
echo gettype($falso); // Imprime "boolean"

/*

Explicações dos comandos utilizados:
echo = função que exibe um ou mais valores.
gettype = função que retorna o tipo de uma variável.

Explicações do código:
O código acima é um exemplo que demonstra o uso da função 'gettype' para obter o tipo de uma variável.
Ele ilustra o uso de variáveis com diferentes tipos de dados e a obtenção do tipo de cada uma delas.

*/
?>