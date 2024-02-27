<?php

require_once 'conta.php'; 

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
$segundaConta = new Conta('698.549.548-10', 'Ana Paula');

print_r($primeiraConta);
print_r($segundaConta);