<?php

// Autenticador.php é responsável por realizar o processo de autenticação no sistema.
namespace Alura\Banco\Servico;

// Importa a interface Autenticavel.
use Alura\Banco\Modelo\Autenticavel;

// Classe Autenticador é responsável por realizar o processo de autenticação no sistema.
class Autenticador
{
    // Método tentaLogin recebe um objeto que implementa Autenticavel e uma senha para tentar realizar o login.
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema"; // Login bem-sucedido.
        } else {
            echo "Ops. Senha incorreta"; // Falha na autenticação.
        }
    }
}

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.

Explicação do código:
Neste código, estamos definindo a classe Autenticador, que é responsável por realizar o processo de autenticação no sistema.
Além disso, estamos utilizando namespaces para importar a interface Autenticavel.

*/
?>