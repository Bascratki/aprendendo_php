<?php

// Utiliza os namespaces necessários para Titular, CPF, Endereco, e Autenticador.
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php'; // Inclui o autoload para carregar as classes necessárias.

// Instancia um novo Autenticador.
$autenticador = new Autenticador();

// Cria um novo Titular (neste contexto, atuando como um Diretor ou qualquer outro usuário que possa se autenticar).
$umTitular = new Titular(
    new CPF('123.456.789-10'), // Cria um novo CPF para o titular.
    'João da Silva', // Define o nome do titular.
    new Endereco('Cidade', 'Bairro', 'Rua', 'Número') // Cria um novo Endereço para o titular.
);

// Tenta realizar login com o Titular e a senha 'abcd'.
$autenticador->tentaLogin($umTitular, 'abcd');

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
new = Cria uma nova instância de uma classe.
require_once = Inclui um arquivo apenas uma vez, evitando duplicações.

Explicação do código:
Neste código, estamos utilizando os namespaces necessários
para criar um novo Titular, CPF, Endereco, e Autenticador.
Além disso, estamos utilizando o autoload para carregar as
classes necessárias. Por fim, estamos instanciando um novo
Autenticador e um novo Titular, e tentando realizar login
com o Titular e a senha 'abcd'.

*/
?>