<?php

// Define um trait, permitindo reutilizar métodos em diferentes classes.
namespace Alura\Banco\Modelo;

// O trait AcessoPropriedades é definido para permitir acesso a propriedades de uma classe de forma indireta.
trait AcessoPropriedades
{
    // Método mágico __get é utilizado para interceptar tentativas de leitura de propriedades não públicas ou inexistentes.
    public function __get(string $nomeAtributo)
    {
        // Constrói o nome do método baseado no atributo requisitado, capitalizando a primeira letra do nome do atributo.
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        // Executa o método correspondente ao atributo. Isso requer que exista um método com o nome 'recuperaX' para cada atributo 'x'.
        echo $this->$metodo(); 
    }
}

/*

Explicação dos comandos utilizados:
trait = Define um trait, permitindo reutilizar métodos em diferentes classes.

Explicação do código:
Neste código, estamos definindo o trait AcessoPropriedades, que permite acesso
a propriedades de uma classe de forma indireta. O trait define o método mágico
__get, que é utilizado para interceptar tentativas de leitura de propriedades
não públicas ou inexistentes. Dentro do método __get, construímos o nome do
método baseado no atributo requisitado, capitalizando a primeira letra do nome
do atributo. Em seguida, executamos o método correspondente ao atributo, utilizando
a variável $metodo para chamar o método dinamicamente.

*/
?>