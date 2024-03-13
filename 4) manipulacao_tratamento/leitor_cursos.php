<?php

$arquivo = fopen('lista_cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista_cursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);
