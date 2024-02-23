<?php

// Define a idade da pessoa que deseja entrar.
$idade = 17;
// Idade mínima para entrar sozinho.
$minidade = 18;
// Idade mínima para entrar acompanhado.
$acompidade = 16;
// Número de acompanhantes.
$acomp = 0;

// Mensagem inicial com as regras de entrada.
echo "Você só pode entrar a partir de $minidade anos ou com $acompidade anos acompanhado" . PHP_EOL;

// Verifica se a pessoa atende a idade mínima para entrar sozinho.
if ($idade >= $minidade ) {
    echo "Você tem $idade anos" . PHP_EOL; // Exibe a idade da pessoa.
    echo "Pode entrar sozinho"; // Exibe a mensagem de entrada.
// Verifica se a pessoa atende a idade mínima para entrar acompanhado e se está acompanhado.
} elseif ($idade >= $acompidade && $acomp > 0) {
    echo "Você tem $idade anos e está acompanhado(a)" . PHP_EOL; // Exibe a idade da pessoa.
    echo "Pode entrar"; // Exibe a mensagem de entrada.
// Caso não atenda nenhum dos critérios anteriores, a entrada é negada.
} else{
    echo "Você tem $idade anos e não está acompanhado(a)" . PHP_EOL; // Exibe a idade da pessoa.
    echo "Você não pode entrar"; // Exibe a mensagem de entrada.
}

// Mensagem final.
echo PHP_EOL; // Quebra de linha.
echo "Adeus!"; // Exibe a mensagem de despedida.

/*
Explicações dos comandos utilizados:
echo = função que exibe um ou mais valores.
if = palavra reservada para iniciar uma estrutura condicional.
elseif = palavra reservada para executar um bloco de código caso a condição do 'if' seja falsa.
else = palavra reservada para executar um bloco de código caso a condição do 'if' seja falsa.

Explicações dos operadores utilizados:
>= = operador de comparação "maior ou igual a".
&& = operador lógico "E".

Explicações do código:
O código acima é um exemplo que demonstra o uso de estruturas condicionais para verificar se uma pessoa
pode entrar em um local com base na idade e no número de acompanhantes. Ele também ilustra o uso de
operações lógicas para combinar condições.

*/
?>