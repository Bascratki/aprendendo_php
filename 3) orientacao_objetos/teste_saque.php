<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$conta = new Conta(
    new TItular(
        new CPF('123.456.789-10'), 'Vinicius Dias', 
        new Endereco('Petrópolis', 'um bairro', 'minha rua', '71'
    )
), 2
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();