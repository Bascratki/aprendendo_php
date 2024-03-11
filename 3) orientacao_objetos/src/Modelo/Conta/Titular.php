<?php

// Importa a classe Conta para utilizá-la como tipo de retorno de métodos.
namespace Alura\Banco\Modelo\Conta;

// Importações de namespaces para uso de classes definidas em outros arquivos.
use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

// A classe Titular estende a classe Pessoa e implementa a interface Autenticavel.
class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco; // Atributo para armazenar o endereço do titular.

    // O método construtor recebe um CPF, um nome e um Endereço, e inicializa o objeto.
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); // Chama o construtor da classe pai (Pessoa).
        $this->endereco = $endereco; // Define o endereço do titular.
    }

    // Método para recuperar o endereço do titular.
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco; // Retorna o objeto Endereco associado ao titular.
    }

    // Implementação do método da interface Autenticavel.
    // Neste exemplo, a autenticação é fixa, validando apenas se a senha é 'abcd'.
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd'; // Retorna verdadeiro se a senha for igual a 'abcd'.
    }
}

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
extends = Define uma classe como filha de outra classe.
implements = Define que a classe implementa uma interface.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.

Explicação do código:
Neste código, estamos definindo a classe Titular, que estende a classe Pessoa e implementa a interface Autenticavel.
Além disso, estamos utilizando namespaces para importar classes definidas em outros arquivos, como Pessoa, CPF e Endereco.

*/
?>