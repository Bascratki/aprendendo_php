<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function saca(float $valorSacar): void
    {
        $tarifaSaque = $valorSacar * 0.03;
        $valorSaque = $valorSacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return; 
        }

        $this->saldo -= $valorSaque;
    }
}