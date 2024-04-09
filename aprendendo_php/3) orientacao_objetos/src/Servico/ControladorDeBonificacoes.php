<?php

// Arquivo que contém a classe ControladorDeBonificacoes.
namespace Alura\Banco\Servico;

// Importa a classe Funcionario.
use Alura\Banco\Modelo\Funcionario\Funcionario;

// Classe ControladorDeBonificacoes gerencia as bonificações dos funcionários.
class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0; // Armazena o total de bonificações concedidas.

    // Adiciona a bonificação de um funcionário ao total de bonificações.
    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        // A bonificação do funcionário é obtida pelo método calculaBonificacao e somada ao total.
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    // Recupera o valor total das bonificações concedidas.
    public function recuperaTotal(): float
    {
        // Retorna o total de bonificações.
        return $this->totalBonificacoes;
    }
}

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
void = Define que um método não retorna nenhum valor.

Explicação do código:
Neste código, estamos definindo a classe ControladorDeBonificacoes, que gerencia as bonificações dos funcionários.
Além disso, estamos utilizando namespaces para importar a classe Funcionario.

*/
?>