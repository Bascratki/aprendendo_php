<?php

// Importa a classe Conta para utilizá-la como tipo de retorno de métodos.
namespace Alura\Banco\Modelo\Conta;

// A classe ContaCorrente herda de Conta e implementa suas funcionalidades específicas.
class ContaCorrente extends Conta
{
    // Implementa o método abstrato tarifa definido na classe pai.
    // Define a tarifa de operações de saque como 5% do valor sacado.
    protected function tarifa(): float
    {
        return 0.05;
    }

    // Método para realizar transferências entre contas.
    // Utiliza o saldo da conta corrente para transferir para outra conta.
    public function transfere(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível"; // Verifica se há saldo suficiente para a transferência.
            return;
        }

        // Realiza o saque na conta de origem, já considerando a tarifa de saque.
        $this->saca($valorTransferir);
        // Deposita o valor na conta de destino.
        $contaDestino->deposita($valorTransferir);
    }
}

/*

Explicação dos comandos utilizados:
extends = Define uma classe como filha de outra classe.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.
abstract = Define um método como abstrato, obrigando as classes filhas a implementarem o método.

Explicação do código:
Neste código, estamos definindo a classe ContaCorrente, que herda de Conta e implementa suas funcionalidades específicas.
Além disso, estamos implementando o método abstrato tarifa, que calcula a tarifa específica de operações de saque em contas corrente, e o método transfere, que realiza transferências entre contas.

*/
?>