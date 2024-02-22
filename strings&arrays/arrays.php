<?php

$array = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
];

foreach ($array as $id => $numeral) {
    echo "$id em inglês é $numeral" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;