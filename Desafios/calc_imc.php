<?php

$peso = 80;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é igual à $imc " ;

if  ($imc >= 30) {
    echo "ele está acima ";
} elseif ($imc >= 18.5) {
    echo "ele está dentro ";
} else {
    echo "ele está abaixo ";
}

echo "do recomendado";