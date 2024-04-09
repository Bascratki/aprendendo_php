<?php

// Importando a classe Funcionario.
namespace Alura\Banco\Modelo\Funcionario;

// Importando a interface Autenticavel.
use Alura\Banco\Modelo\Autenticavel;

// A classe Diretor estende Funcionario e implementa a interface Autenticavel.
class Diretor extends Funcionario implements Autenticavel
{
    // Método calculaBonificacao retorna o dobro do salário como bonificação para o diretor.
    public function calculaBonificacao(): float
    {
        // Retorna o dobro do salário do diretor.
        return $this->recuperaSalario() * 2;
    }

    // Método podeAutenticar verifica se a senha fornecida corresponde à senha esperada ('1234').
    public function podeAutenticar(string $senha): bool
    {
        // Retorna verdadeiro se a senha fornecida for igual a '1234'.
        return $senha === '1234';
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
Neste código, estamos definindo a classe Diretor, que estende a classe Funcionario e implementa
a interface Autenticavel. Além disso, estamos implementando o método calculaBonificacao, que calcula
a bonificação específica de um Diretor, e o método podeAutenticar, que verifica se a senha fornecida corresponde à senha esperada.

*/
?>