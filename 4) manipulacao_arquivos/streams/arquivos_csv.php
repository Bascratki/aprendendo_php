<?php

$meusCursos = file('lista_cursos.txt');
$outroscursos = file('cursos_php.txt');

$arquivoCSV = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCSV, $linha, ';');
}

foreach ($meusCursos as $curso) {
    $linhas = [trim($curso), 'Não'];

    fputcsv($arquivoCSV, $linha, ';');
}

fclose($arquivoCSV);