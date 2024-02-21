<?php

$idade = 17;
$minidade = 18;
$acompidade = 16;
$acomp = 0;

echo "Você só pode entrar a partir de $minidade anos ou com $acompidade anos acompanhado" . PHP_EOL;

if ($idade >= $minidade ) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar sozinho";
} elseif ($idade >= $acompidade && $acomp > 0) {
    echo "Você tem $idade anos e está acompanhado(a)" . PHP_EOL;
    echo "Pode entrar";
} else{
    echo "Você tem $idade anos e não está acompanhado(a)" . PHP_EOL;
    echo "Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

