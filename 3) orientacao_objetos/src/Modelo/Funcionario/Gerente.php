<?php

// A classe Gerente estende Funcionario e implementa a interface Autenticavel,
namespace Alura\Banco\Modelo\Funcionario;

// Importando a classe Funcionario.
use Alura\Banco\Modelo\Autenticavel;

// A classe Gerente estende Funcionario e implementa a interface Autenticavel, 
// adicionando funcionalidades específicas para gerentes dentro da organização.
class Gerente extends Funcionario implements Autenticavel
{
    // Método para calcular a bonificação do gerente, que neste caso, é igual ao seu salário.
    public function calculaBonificacao(): float
    {
        // Retorna o salário do gerente como bonificação.
        return $this->recuperaSalario();
    }

    // Método que implementa a lógica de autenticação para o gerente.
    // A autenticação é bem-sucedida se a senha fornecida for '4321'.
    public function podeAutenticar(string $senha): bool
    {
        // Retorna verdadeiro se a senha fornecida for igual a '4321'.
        return $senha === '4321';
    }
}

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
extends = Define uma classe como filha de outra classe.
implements = Define que a classe implementa uma interface.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.

Explicação do código:
Neste código, estamos definindo a classe Gerente, que estende a classe Funcionario e implementa a interface Autenticavel.
Além disso, estamos implementando o método calculaBonificacao, que calcula a bonificação específica de um Gerente, e o método podeAutenticar,
que verifica se a senha fornecida corresponde à senha esperada.

*/
?>