<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static int $numContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validarNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numContas++;
    }

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor inválido";
            return;
        } 
        
        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    } 

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function recuperaNumContas(): int
    {
        return self::$numContas;
    }
}