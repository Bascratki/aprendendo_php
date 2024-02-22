<?php

$idades = [0, 1, 2, 3, 4, 5, 6, 7];

for ($i = 0; $i <= count($idades); $i++) {
    echo $idades[$i] . PHP_EOL;
}

echo "Essa lista possui " . count($idades) . " números";