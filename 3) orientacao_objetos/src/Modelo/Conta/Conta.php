<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numContas++;
    }

    public function __destruct()
    {
        self::$numContas--;
    }

    public function saca(float $valorSacar): void
    {
        $tarifaSaque = $valorSacar * $this->tarifa();
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

    abstract protected function tarifa(): float;
}