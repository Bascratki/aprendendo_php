<?php

$cursos = fopen('zip://arquivos.zip#cursos_php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);
