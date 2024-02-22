<?php

$idades = [18, 19, 20, 21, 22];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idades;

unset($idades[4]);

foreach ($idades as $idade) {
    echo $idade . PHP_EOL;
}