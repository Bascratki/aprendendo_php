<?php

// Importa a classe Conta para utilizá-la como tipo de retorno de métodos.
namespace Alura\Banco\Modelo\Conta;

// A classe ContaPoupanca herda de Conta e especifica o comportamento de uma conta poupança.
class ContaPoupanca extends Conta
{
    // Implementa o método abstrato tarifa, definindo a tarifa de saque específica para contas poupança.
    // Neste caso, a tarifa é definida como 3% do valor do saque.
    protected function tarifa(): float
    {
        return 0.03;
    }
}

/*

Explicação dos comandos utilizados:
extends = Define uma classe como filha de outra classe.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.
abstract = Define um método como abstrato, obrigando as classes filhas a implementarem o método.

Explicação do código:
Neste código, estamos definindo a classe ContaPoupanca, que herda de Conta e implementa suas funcionalidades específicas.
Além disso, estamos implementando o método abstrato tarifa, que calcula a tarifa específica de operações de saque em contas poupança.

*/
?>