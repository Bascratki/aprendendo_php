<?php

// Definindo o ano de nascimento como uma string
$anonascimento = '1997';

// Calculando a idade subtraindo o ano de nascimento de 2022
$idade = 2022 - $anonascimento;

// Exibindo a idade
echo $idade . PHP_EOL;

// Verificando se o ano de nascimento é exatamente igual a 1997
if ($anonascimento == 1997) {
    // Imprimindo uma mensagem caso o ano de nascimento seja igual a 1997
    echo "SIM" . PHP_EOL;
} else {
    // Imprimindo uma mensagem caso o ano de nascimento não seja igual a 1997
    echo "NÃO" . PHP_EOL;
}

/*

Explicação do código:
Neste código, estamos utilizando a variável $anonascimento para armazenar o
ano de nascimento como uma string. Em seguida, calculamos a idade subtraindo
o ano de nascimento de 2022 e exibimos o resultado. Por fim, verificamos se
o ano de nascimento é exatamente igual a 1997 e imprimimos uma mensagem correspondente.

*/
?>