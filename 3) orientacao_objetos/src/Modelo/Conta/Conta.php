<?php

// Define o namespace da classe.
namespace Alura\Banco\Modelo\Conta;

// A classe abstrata Conta define a estrutura básica de uma conta bancária.
abstract class Conta
{
    // Atributos privados só podem ser acessados dentro da classe.
    private Titular $titular; // Armazena o titular da conta.
    protected float $saldo; // Saldo da conta, acessível por classes filhas.
    private static int $numContas = 0; // Contador estático de contas criadas.

    // O método construtor é chamado automaticamente ao criar uma nova conta.
    public function __construct(Titular $titular)
    {
        $this->titular = $titular; // Define o titular da conta.
        $this->saldo = 0; // Inicializa o saldo como zero.

        self::$numContas++; // Incrementa o contador de contas.
    }

    // O método destrutor é chamado automaticamente quando uma conta é destruída.
    public function __destruct()
    {
        self::$numContas--; // Decrementa o contador de contas.
    }

    // Método para realizar saques na conta, aplicando uma tarifa.
    public function saca(float $valorSacar): void
    {
        $tarifaSaque = $valorSacar * $this->tarifa(); // Calcula a tarifa do saque.
        $valorSaque = $valorSacar + $tarifaSaque; // Total a ser sacado incluindo a tarifa.
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível"; // Verifica se há saldo suficiente.
            return;
        }

        $this->saldo -= $valorSaque; // Atualiza o saldo.
    }

    // Método para depositar valores na conta, com validação do valor a depositar.
    public function deposita(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor inválido"; // Verifica se o valor é positivo.
            return;
        } 
        
        $this->saldo += $valorDepositar; // Atualiza o saldo.
    }

    // Métodos acessores para recuperar informações da conta e do titular.
    public function recuperaSaldo(): float
    {
        return $this->saldo; // Retorna o saldo atual.
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome(); // Retorna o nome do titular.
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf(); // Retorna o CPF do titular.
    }

    // Método estático para recuperar o número total de contas criadas.
    public static function recuperaNumContas(): int
    {
        return self::$numContas; // Retorna o contador de contas.
    }

    // Método abstrato definido em subclasses para calcular a tarifa específica de cada tipo de conta.
    abstract protected function tarifa(): float;
}

/*

Explicações dos comandos utilizados:
namespace = Define um namespace para o arquivo.
abstract = Define uma classe como abstrata, impedindo sua instância direta.
private = Define um atributo ou método como privado, acessível apenas dentro da classe.
protected = Define um atributo ou método como protegido, acessível dentro da classe e suas subclasses.
static = Define um atributo ou método como estático, acessível sem instanciar a classe.
self = Referencia a própria classe, útil para acessar atributos e métodos estáticos.
public = Define um atributo ou método como público, acessível de qualquer lugar.

Explicação do código:
Neste código, estamos definindo a classe abstrata Conta, que serve como base para
os diferentes tipos de conta bancária. Ela define métodos e atributos comuns a
todas as contas, como o titular, o saldo e operações de saque e depósito. Além
disso, a classe define um método abstrato tarifa, que deve ser implementado nas
classes filhas para calcular a tarifa específica de cada tipo de conta.

*/
?>