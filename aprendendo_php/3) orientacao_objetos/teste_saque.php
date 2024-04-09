<?php

// Importa as classes necessárias usando o operador de agrupamento de namespaces.
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php'; // Carrega as classes automaticamente.

// Cria uma nova conta corrente para o titular Vinicius Dias, com CPF e endereço especificados.
$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), // Cria um objeto CPF.
        'Vinicius Dias', // Define o nome do titular.
        new Endereco('Petrópolis', 'um bairro', 'minha rua', '71') // Cria um objeto Endereço.
    )
);

$conta->deposita(500); // Deposita R$ 500 na conta.
$conta->saca(100); // Realiza um saque de R$ 100 da conta.

echo $conta->recuperaSaldo(); // Exibe o saldo atual da conta.

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
new = Cria uma nova instância de uma classe.
require_once = Inclui um arquivo apenas uma vez, evitando duplicações.
echo = Exibe um ou mais valores.

Explicação do código:
Neste código, estamos utilizando namespaces para criar uma nova ContaCorrente, Titular, CPF, e Endereco.
Além disso, estamos utilizando o autoload para carregar as classes necessárias.

*/
?>