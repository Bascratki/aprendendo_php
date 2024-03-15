<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos.zip#lista_cursos.txt',
    false,
    $contexto
);