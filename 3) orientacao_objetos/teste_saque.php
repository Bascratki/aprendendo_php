<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca,ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias', 
        new Endereco('Petrópolis', 'um bairro', 'minha rua', '71')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();