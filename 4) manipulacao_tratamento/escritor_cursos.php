<?php

$arquivo = fopen('cursos_php.txt', 'w');

$curso = 'Design Patterns PHP: Boas práticas de programação';

fwrite($arquivo, $curso);

fclose($arquivo);