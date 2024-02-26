<?php

// Array contendo números de telefone para validação
$telefones = [
    '(41) 99999-9993',
    '(41) 99999-9992',
    '(41) 99999-9991',
    '(41) 99999-9990',
];

// Loop para percorrer cada número de telefone no array
foreach ($telefones as $telefone) {
    // Definindo a expressão regular para validar o formato do telefone
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/';

    // Usando preg_match para verificar se o telefone corresponde ao padrão da regex
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

    // Verificando se o número de telefone é válido e imprimindo uma mensagem correspondente
    if ($telefoneValido) {
        echo 'Telefone válido => ';
    } else {
        echo 'Telefone inválido => ';
    }

    // Substituindo o código de área do telefone por 'XX' e mantendo o resto do número
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}

/*

Explicações dos comandos utilizados:
preg_match = Realiza uma correspondência de expressão regular.
preg_replace = Realiza uma pesquisa por uma expressão regular e a substitui por outra.

Explicação do código:
Neste código, estamos utilizando as funções preg_match e preg_replace para validar
e manipular números de telefone. Primeiramente, definimos uma expressão regular
para validar o formato do telefone. Em seguida, utilizamos preg_match para verificar
se o telefone corresponde ao padrão da regex. Caso o telefone seja válido, imprimimos
uma mensagem indicando isso. Caso contrário, imprimimos uma mensagem indicando que
o telefone é inválido. Por fim, utilizamos preg_replace para substituir o código de
área do telefone por 'XX' e manter o resto do número.

*/
?>