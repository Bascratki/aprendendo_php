<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numContas = 0;
    private int $tipo;  // 1 = corrente, 2 = poupança

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numContas++;
    }

    public function __destruct()
    {
        self::$numContas--;
    }

    public function saca(float $valorSacar): void
    {
        if ($this->tipo === 1) {
            $tarifaSaque = $valorSacar * 0.05;
        } else {
            $tarifaSaque = $valorSacar * 0.03;
        }
        $valorSaque = $valorSacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor inválido";
            return;
        } 
        
        $this->saldo += $valorDepositar;
    }

    public function transfere(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            
        $this->saca($valorTransferir);
        $contaDestino->deposita($valorTransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumContas(): int
    {
        return self::$numContas;
    }
}