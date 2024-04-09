<?php

// Definindo um array com números de telefone
$telefones = [
    '(41) 99999-9999',
    '(41) 99999-9998',
    '(41) 99999-9997',
    '(41) 99999-9996',
    '(41) 99999-9995',
    '(41) 99999-9994',
    '(41) 99999-9993',
    '(41) 99999-9992',
    '(41) 99999-9991',
    '(41) 99999-9990',
];

// Convertendo o array de telefones em uma string, separando os elementos por vírgula
echo (implode(',', $telefones)) . PHP_EOL;

/*

Explicações dos comandos utilizados:
implode = Junta elementos de um array em uma string, separando os elementos com um separador.

Explicação do código:
Neste código, estamos utilizando a função implode para converter um array
de telefones em umastring, separando os elementos por vírgula.

*/
?>