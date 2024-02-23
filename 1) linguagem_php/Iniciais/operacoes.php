<?php

// Operações matemáticas.
$soma = 2 + 2; // Soma.
$substracao = 2 - 2; // Subtração.
$multiplicacao = 2 * 2; // Multiplicação.
$divisao = 2 / 2; // Divisão.
$potencia = 2 ** 2; // Potência.
$restodivisao = 10 % 3; // Resto da divisão.
$restodivisao2 = 10 % 2; // Resto da divisão.

// Exibe os resultados.
echo $soma . "\n"; // Exibe a soma.
echo $substracao . "\n"; // Exibe a subtração.
echo $multiplicacao . "\n"; // Exibe a multiplicação.
echo $divisao . "\n"; // Exibe a divisão.
echo $potencia . "\n"; // Exibe a potência.
echo $restodivisao; // Exibe o resto da divisão.

// Operações de comparação.
$igual = 2 == 2; // Igualdade.
$diferente = 2 != 2; // Diferença.
$maior = 2 > 2; // Maior que.
$menor = 2 < 2; // Menor que.
$maiorigual = 2 >= 2; // Maior ou igual a.
$menorigual = 2 <= 2; // Menor ou igual a.

// Exibe os resultados.
echo $igual . "\n"; // Exibe a igualdade.
echo $diferente . "\n"; // Exibe a diferença.
echo $maior . "\n"; // Exibe a comparação "maior que".
echo $menor . "\n"; // Exibe a comparação "menor que".
echo $maiorigual . "\n"; // Exibe a comparação "maior ou igual a".
echo $menorigual; // Exibe a comparação "menor ou igual a".

// Operações lógicas.
$e = true && true; // E lógico.
$ou = true || false; // Ou lógico.
$nao = !true; // Negação lógica.

// Exibe os resultados.
echo $e . "\n"; // Exibe o "E" lógico.
echo $ou . "\n"; // Exibe o "OU" lógico.
echo $nao; // Exibe a negação lógica.

// Operações de incremento e decremento.
$incremento = 2; // Define o valor inicial.
$incremento++; // Incrementa em 1.
$decremento = 2; // Define o valor inicial.
$decremento--; // Decrementa em 1.

// Exibe os resultados.
echo $incremento . "\n"; // Exibe o incremento.
echo $decremento; // Exibe o decremento.

// Operações de concatenação.
$texto = "Olá"; // Define o texto inicial.
$texto .= " Mundo!"; // Concatena com outro texto.

// Exibe o resultado.
echo $texto; // Exibe o texto concatenado.

// Operações de comparação de tipos.
$inteiro = 2; // Define um número inteiro.
$texto = "2"; // Define um texto.

// Exibe os resultados.
echo $inteiro == $texto . "\n"; // Exibe a comparação de valores.
echo $inteiro === $texto; // Exibe a comparação de tipos.


/*

Explicações dos comandos utilizados:
echo = função que exibe um ou mais valores.

Explicações dos operadores utilizados:
+ = operador de adição.
- = operador de subtração.
* = operador de multiplicação.
/ = operador de divisão.
** = operador de potência.
% = operador de resto da divisão.
== = operador de comparação "igual a".
!= = operador de comparação "diferente de".
> = operador de comparação "maior que".
< = operador de comparação "menor que".
>= = operador de comparação "maior ou igual a".
<= = operador de comparação "menor ou igual a".
&& = operador lógico "E".
|| = operador lógico "OU".
! = operador lógico de negação.
++ = operador de incremento.
-- = operador de decremento.
.= = operador de concatenação.
=== = operador de comparação de tipos.

Explicações do código:
O código acima é um exemplo que demonstra o uso de operações matemáticas, de comparação, lógicas, de incremento
e decremento, de concatenação e de comparação de tipos. Ele também ilustra o uso de operadores para realizar
operações com valores e variáveis.

*/
?>