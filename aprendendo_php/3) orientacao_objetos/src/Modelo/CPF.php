<?php

// O namespace é utilizado para evitar conflitos de classes com o mesmo nome.
namespace Alura\Banco\Modelo;

// A classe CPF é marcada como final, o que significa que ela não pode ser estendida.
final class CPF
{
    private string $numero; // Atributo para armazenar o número do CPF.

    // O construtor valida o formato do número do CPF fornecido e inicializa o objeto.
    public function __construct(string $numero)
    {
        // Utiliza filter_var com FILTER_VALIDATE_REGEXP para validar o formato do CPF.
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/' // Expressão regular para o formato de CPF.
            ]
        ]);

        // Se o número fornecido não passar na validação, exibe uma mensagem e termina a execução.
        if ($numero === false) {
            echo "Cpf inválido";
            exit(); // Termina a execução se o CPF é inválido.
        }

        // Se o CPF é válido, o número é atribuído ao atributo da classe.
        $this->numero = $numero;
    }

    // Método para recuperar o número do CPF.
    public function recuperaNumero(): string
    {
        return $this->numero; // Retorna o número do CPF.
    }
}

/*

Explicação dos comandos utilizados:
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
final = Define uma classe como final, impedindo a extensão por outras classes.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.

Explicação do código:
Neste código, estamos definindo a classe CPF, que é marcada como final, o que significa que ela não pode ser estendida.
Além disso, estamos definindo um construtor que valida o formato do número do CPF fornecido e inicializa o objeto.
Também estamos definindo um método para recuperar o número do CPF.

*/
?>