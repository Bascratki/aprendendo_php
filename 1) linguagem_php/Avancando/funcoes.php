<?php

// Define uma função para converter o nome do titular da conta para maiúsculas.
function nomeMaiusculo(array &$conta)
{
    // Converte o nome do titular da conta para maiúsculas e atualiza o array da conta.
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

// Define uma função para exibir mensagens.
function exibeMensagem(string $mensagem) 
{
    // Exibe a mensagem passada como argumento.
    echo $mensagem . '<br>';
}

// Define uma função para exibir os dados de uma conta.
function exibeConta(array $conta)
{
    // Extrai o titular e o saldo da conta usando a sintaxe de desestruturação de arrays.
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    // Exibe o titular e o saldo da conta.
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

// Define uma função para realizar saques em uma conta.
function sacar(array $conta, float $valorASacar): array
{
    // Verifica se o valor a ser sacado é maior que o saldo da conta.
    if ($valorASacar > $conta['saldo']) {
        // Caso seja maior, exibe uma mensagem de erro.
        exibeMensagem("Você não pode sacar esse valor");
    } else {
        // Caso contrário, subtrai o valor do saldo da conta.
        $conta['saldo'] -= $valorASacar;
    }
    // Retorna o array da conta atualizado.
    return $conta;
}

// Define uma função para realizar depósitos em uma conta.
function depositar(array $conta, float $valorADepositar): array
{
    // Verifica se o valor a ser depositado é positivo.
    if ($valorADepositar > 0) {
        // Se positivo, adiciona o valor ao saldo da conta.
        $conta['saldo'] += $valorADepositar;
    } else {
        // Caso contrário, exibe uma mensagem de erro.
        exibeMensagem("Depósitos precisam ser positivos");
    }
    // Retorna o array da conta atualizado.
    return $conta;
}

/*

Explicações dos comandos utilizados:
function = palavra reservada para definir uma função.
if = palavra reservada para iniciar uma estrutura condicional.
else = palavra reservada para executar um bloco de código caso a condição do 'if' seja falsa.
return = palavra reservada para retornar um valor de uma função.

Explicações dos parâmetros utilizados:
& = operador que passa o argumento por referência.
mb_strtoupper = função que converte uma string para maiúsculas.
echo = função que exibe um ou mais valores.

Explicações das tags HTML utilizadas:
<li> = tag HTML para criar uma lista.
<br> = tag HTML para criar uma quebra de linha.
<ol> = tag HTML para criar uma lista ordenada.

Explicações dos tipos de dados utilizados:
array = tipo de dado que armazena uma coleção de elementos.
string = tipo de dado que armazena texto.
float = tipo de dado que armazena números decimais.
ExibeMensagem = nome da função que exibe mensagens.
ExibeConta = nome da função que exibe os dados de uma conta.
Sacar = nome da função que realiza saques em uma conta.
Depositar = nome da função que realiza depósitos em uma conta.

Explicações do código:
O código acima define funções que realizam operações com contas correntes, como
saques, depósitos e exibição de mensagens. Além disso, as funções também são
responsáveis por exibir os dados de uma conta e converter o nome do titular para
maiúsculas. As funções são utilizadas em outros arquivos para manipular arrays
associativos e exibir informações.

*/
?>