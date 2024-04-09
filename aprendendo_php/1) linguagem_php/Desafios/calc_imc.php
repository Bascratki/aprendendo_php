<?php

// Define o peso em quilogramas.
$peso = 80;
// Define a altura em metros.
$altura = 1.70;
// Calcula o IMC usando a fórmula IMC = peso / (altura ao quadrado).
$imc = $peso / $altura ** 2;

// Exibe o valor do IMC.
echo "Seu IMC é igual à $imc ";

// Estrutura condicional para classificar o valor do IMC.
if  ($imc >= 30) {
    // Se o IMC for maior ou igual a 30, classifica como acima do peso recomendado.
    echo "ele está acima ";
} elseif ($imc >= 18.5) {
    // Se o IMC estiver entre 18.5 e 29.9, classifica como dentro do peso recomendado.
    echo "ele está dentro ";
} else {
    // Se o IMC for menor que 18.5, classifica como abaixo do peso recomendado.
    echo "ele está abaixo ";
}

// Conclui a mensagem indicando que a classificação se refere ao peso recomendado.
echo "do recomendado";

/*

Explicações dos comandos utilizados:
echo = função que exibe um ou mais valores.
if = palavra reservada para iniciar uma estrutura condicional.
elseif = palavra reservada para executar um bloco de código caso a condição do 'if' seja falsa.
else = palavra reservada para executar um bloco de código caso a condição do 'if' seja falsa.

Explicações dos operadores utilizados:
++ = operador de incremento.
-- = operador de decremento.
== = operador de comparação.
= = operador de atribuição.
. = operador de concatenação.
* = operador de multiplicação.
/ = operador de divisão.
** = operador de exponenciação.
>= = operador de comparação "maior ou igual a".

Explicações do código:
O código acima é um exemplo que demonstra o uso de estruturas condicionais para classificar
o valor do IMC de acordo com o peso recomendado. Ele também ilustra o uso de operadores de
comparação para verificar se o valor do IMC está dentro de um intervalo específico.

*/
?>