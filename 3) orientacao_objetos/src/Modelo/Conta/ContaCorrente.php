<?php

namespace Alura\Banco\Modelo\Conta;
class ContaCorrente extends Conta
{
    protected function tarifa(): float
    {
        return 0.05;
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
}