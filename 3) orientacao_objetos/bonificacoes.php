<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Diretor, Editorvideo, Gerente, Desenvolvedor};
use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario ->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('123.456.789-11'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.456.789-12'),
    5000
);

$umEditor = new Editorvideo(
    'Paulo',
    new CPF('123.546.789-13'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();