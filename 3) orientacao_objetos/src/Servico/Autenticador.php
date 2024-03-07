<?php

namespace Alura\Banco\Servico;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema";
        } else {
            echo "Ops. Senha incorreta";
        }
    }
}
