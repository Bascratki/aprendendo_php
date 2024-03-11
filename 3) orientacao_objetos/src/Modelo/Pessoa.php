<?php

// Importa o namespace para que a classe CPF possa ser utilizada.
namespace Alura\Banco\Modelo;

// A classe Pessoa é abstrata, servindo como base para outras classes que representam pessoas no sistema.
abstract class Pessoa
{
    use AcessoPropriedades; // Inclui o trait AcessoPropriedades para acesso a propriedades através de métodos mágicos.

    protected string $nome; // Nome da pessoa, protegido para que subclasses possam acessá-lo.
    private CPF $cpf; // CPF da pessoa, privado para encapsulamento e segurança.

    // Construtor que inicializa uma pessoa com nome e CPF, validando o nome.
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome); // Valida o nome antes de atribuir.
        $this->nome = $nome; // Atribui o nome.
        $this->cpf = $cpf; // Atribui o CPF.
    }

    // Método para recuperar o nome da pessoa.
    public function recuperaNome(): string
    {
        // Retorna o nome da pessoa.
        return $this->nome;
    }

    // Método para recuperar o número do CPF da pessoa.
    public function recuperaCpf(): string
    {
        // Retorna o número do CPF.
        return $this->cpf->recuperaNumero(); // Chama o método recuperaNumero do objeto CPF.
    }

    // Método final protegido validaNome impede a sobreposição em subclasses e valida o comprimento do nome.
    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) { // Verifica se o nome tem pelo menos 5 caracteres.
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit(); // Encerra a execução se o nome não atende ao critério.
        }
    }
}

/*

Explicação dos comandos utilizados:
use = Importa um trait para utilizar suas propriedades e métodos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
abstract = Define uma classe como abstrata, impedindo a criação de objetos a partir dela.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
final = Define um método ou classe como final, impedindo a extensão por outras classes ou a sobreposição de métodos.

Explicação do código:
Neste código, estamos definindo a classe Pessoa, que é abstrata e serve como base para outras classes que representam pessoas no sistema.
Além disso, estamos utilizando um trait chamado AcessoPropriedades para permitir acesso a propriedades através de métodos mágicos.

*/
?>