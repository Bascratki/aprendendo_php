<?php

// Define o namespace para a classe Endereco.
namespace Alura\Banco\Modelo;

/**
 * A classe Endereco representa um endereço no sistema.
 * Utiliza o trait AcessoPropriedades para permitir a leitura de suas propriedades privadas.
 * 
 * @property-read string $cidade O nome da cidade do endereço.
 * @property-read string $rua O nome da rua do endereço.
 * @property-read string $bairro O nome do bairro do endereço.
 * @property-read string $numero O número do endereço na rua.
 */

// A classe Endereco é marcada como final, significando que não pode ser herdada.
final class Endereco
{
    use AcessoPropriedades; // Inclui o trait AcessoPropriedades para acesso indireto a propriedades.

    // Propriedades privadas para armazenar as partes de um endereço.
    private string $cidade; // O nome da cidade.
    private string $bairro; // O nome do bairro.
    private string $rua; // O nome da rua.
    private string $numero; // O número do endereço.

    // Construtor que inicializa o endereço com valores específicos para cada parte.
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade; // Atribui a cidade.
        $this->bairro = $bairro; // Atribui o bairro.
        $this->rua = $rua; // Atribui a rua.
        $this->numero = $numero; // Atribui o número.
    }

    // Métodos para recuperar as partes do endereço. Cada um retorna a parte correspondente.
    public function recuperaCidade(): string
    {
        // Retorna o nome da cidade.
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        // Retorna o nome do bairro.
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        // Retorna o nome da rua.
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        // Retorna o número do endereço.
        return $this->numero;
    }

    // Método mágico __toString permite converter o objeto Endereco em uma string formatada.
    public function __toString(): string
    {
        // Formata o endereço como "rua, número, bairro, cidade".
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}

/*

Explicação dos comandos utilizados:
namespace = Define o namespace da classe, permitindo agrupar classes relacionadas.
class = Define uma classe.
final = Define uma classe como final, impedindo a extensão por outras classes.
use = Importa um trait para utilizar suas propriedades e métodos.
private = Define um método ou propriedade como privado, permitindo acesso apenas na classe.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.
__construct = Método construtor, chamado ao criar um novo objeto.
__toString = Método mágico que é chamado quando o objeto é convertido para string.

Explicação do código:
Neste código, estamos definindo a classe Endereco, que representa um endereço no sistema.
Além disso, estamos utilizando um trait para permitir o acesso indireto às propriedades privadas da classe.

*/
?>