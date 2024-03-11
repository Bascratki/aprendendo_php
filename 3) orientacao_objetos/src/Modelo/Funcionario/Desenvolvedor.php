<?php

// Importa a classe Funcionario para ser usada como tipo de retorno de métodos.
namespace Alura\Banco\Modelo\Funcionario;

// A classe Desenvolvedor herda de Funcionario, representando um tipo específico de funcionário.
class Desenvolvedor extends Funcionario
{
    // Método para promover o desenvolvedor a um novo nível, com aumento de salário.
    public function sobeDeNivel()
    {
        // Aplica um aumento de 75% sobre o salário atual do desenvolvedor.
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    // Método para calcular a bonificação específica de um Desenvolvedor.
    // Retorna um valor fixo de bonificação.
    public function calculaBonificacao(): float
    {
        return 500.0; // Todos os desenvolvedores recebem uma bonificação fixa de 500.
    }
}

/*

Explicação dos comandos utilizados:
extends = Define uma classe como filha de outra classe.

Explicação do código:
Neste código, estamos definindo a classe Desenvolvedor, que herda de Funcionario e implementa
suas funcionalidades específicas. Além disso, estamos implementando o método sobeDeNivel, que
promove o desenvolvedor a um novo nível, com aumento de salário, e o método calculaBonificacao,
que calcula a bonificação específica de um Desenvolvedor.

*/
?>