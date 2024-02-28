<?php

require_once 'Conta.php';
require_once 'Endereco.php'; 
require_once 'Titular.php';
require_once 'CPF.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('123.456.789-11'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123.456.789-12'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumContas();