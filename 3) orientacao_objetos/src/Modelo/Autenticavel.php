<?php

// A interface Autenticavel define um contrato para autenticação no sistema.
namespace Alura\Banco\Modelo;

// A interface Autenticavel define um contrato para autenticação no sistema.
// Classes que implementam esta interface devem fornecer a lógica específica de autenticação.
interface Autenticavel
{
    // Método podeAutenticar recebe uma senha como string e retorna um booleano.
    // Deve retornar true se a senha for considerada válida, e false caso contrário.
    public function podeAutenticar(string $senha): bool;
}

/*

Explicação dos comandos utilizados:
interface = Define uma interface, que é um contrato que classes podem implementar.
public = Define um método ou propriedade como público, permitindo acesso em qualquer lugar.

Explicação do código:
Neste código, estamos definindo a interface Autenticavel, que define um contrato para autenticação no sistema.
Classes que implementam esta interface devem fornecer a lógica específica de autenticação.

*/
?>