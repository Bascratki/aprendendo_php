<?php

// Define o namespace onde a classe se encontra.
namespace Alura\Banco\Modelo\Funcionario;

// Importa as classes necessárias.
use Alura\Banco\Modelo\{CPF, Pessoa};

// A classe Funcionario é abstrata e estende a classe Pessoa, adicionando comportamentos específicos de funcionários.
abstract class Funcionario extends Pessoa
{
    private float $salario; // Armazena o salário do funcionário.

    // O construtor da classe recebe nome, CPF e salário, e inicializa o objeto.
    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf); // Chama o construtor da classe pai para definir nome e CPF.
        $this->salario = $salario; // Define o salário do funcionário.
    }

    // Método para alterar o nome do funcionário, com validação.
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome); // Valida o novo nome antes de atribuí-lo.
        $this->nome = $nome; // Atribui o novo nome ao funcionário.
    }

    // Método para aplicar um aumento no salário do funcionário.
    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo"; // Valida se o aumento é um valor positivo.
            return;
        }

        $this->salario += $valorAumento; // Aplica o aumento ao salário.
    }

    // Método para recuperar o salário atual do funcionário.
    public function recuperaSalario(): float
    {
        return $this->salario; // Retorna o valor do salário.
    }

    // Método abstrato que deve ser implementado pelas subclasses, definindo como a bonificação é calculada.
    abstract public function calculaBonificacao(): float;
}

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
abstract = Define uma classe como abstrata, impedindo a criação de objetos a partir dela.
extends = Define uma classe como filha de outra classe.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
protected = Define um método ou propriedade como protegido, permitindo acesso apenas na classe ou em classes filhas.

Explicação do código:
Neste código, estamos definindo a classe abstrata Funcionario, que estende a classe Pessoa e adiciona
comportamentos específicos de funcionários, como salário, aumento de salário e bonificação. Além disso,
estamos utilizando namespaces para importar classes definidas em outros arquivos, como CPF e Pessoa.

*/
?>