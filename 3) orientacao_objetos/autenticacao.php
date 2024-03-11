<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Titular(
    new CPF('123.456.789-10'),
    'João da Silva',
    new Endereco('', '', '', '', '')
);

$autenticador->tentaLogin($umDiretor, 'abcd');