<?php

// Definindo variáveis de nome, email e senha
$nome = 'Vinícius Dias';
$email = 'vinícius@alura.com.br ';
$senha = 'áéíóú';

// Exibindo o comprimento da senha usando mb_strlen para suportar caracteres multibyte
echo mb_strlen($senha) . PHP_EOL;

// Verificando se o comprimento da senha é menor que 8 caracteres
if (mb_strlen($senha) < 8) {
    echo "Senha insegura" . PHP_EOL;
}

// Encontrando a posição do caractere '@' no email
$posicaoArroba = strpos($email, '@');

// Extraindo o nome de usuário do email usando substr
$usuario = substr($email, 0, $posicaoArroba);

// Convertendo o nome de usuário para maiúsculas e exibindo
echo mb_strtoupper($usuario) . PHP_EOL;

// Extraindo e exibindo o domínio do email
echo substr($email, $posicaoArroba + 1 ) . PHP_EOL;

// Dividindo o nome completo em nome e sobrenome usando explode
[$nome, $sobrenome] = explode(' ', $nome);

// Exibindo o nome e sobrenome
echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;

// Criando e exibindo um array a partir de uma string formatada como CSV
$csv = 'Vinicius Dias, 18, 1.80, 80, 10';
print_r (explode(', ', $csv));

// Removendo espaços em branco do final do email e exibindo
echo trim($email) . PHP_EOL;

/*
Explicações dos comandos utilizados:
mb_strlen = Retorna o comprimento de uma string.
strpos = Encontra a posição da primeira ocorrência de uma substring em uma string.
substr = Retorna uma parte de uma string.
mb_strtoupper = Converte uma string para maiúsculas.
explode = Divide uma string em strings.

Explicação do código:
Neste código, estamos utilizando funções para manipular strings.
Primeiramente, utilizamos a função mb_strlen para exibir o comprimento
da senha, que é uma string multibyte. Em seguida, verificamos se a
senha é insegura, ou seja, se seu comprimento é menor que 8 caracteres.
Depois, encontramos a posição do caractere '@' no email e extraímos o
nome de usuário e o domínio. Em seguida, dividimos o nome completo em
nome e sobrenome e exibimos ambos. Por fim, criamos um array a partir
de uma string formatada como CSV e removemos espaços em branco do final do email.

*/
?>
