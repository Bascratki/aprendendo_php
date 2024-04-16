<?php

$meusCursos = file('lista_cursos.txt');
$outrosCursos = file('cursos_php.txt');

$arquivoCSV = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    fputcsv($arquivoCSV, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];
    fputcsv($arquivoCSV, $linha, ';');
}

fclose($arquivoCSV);