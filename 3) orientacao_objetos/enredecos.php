<?php

use Alura\Banco\Modelo\Endereco; // Usa a classe Endereco do namespace Alura\Banco\Modelo.

require_once 'autoload.php'; // Inclui o sistema de autoload para carregar as classes automaticamente.

// Cria um novo objeto Endereco com os parâmetros fornecidos.
$umEndereco = new Endereco('Petropólis', 'bairro Qualquer', 'Minha rua', '71B');
// Cria outro objeto Endereco com um conjunto diferente de parâmetros.
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

// Exibe o primeiro endereço usando o método mágico __toString() para converter o objeto em uma string.
echo $umEndereco . PHP_EOL;
// Exibe o segundo endereço, também aproveitando o __toString() para a conversão em string.
echo $outroEndereco;

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
new = Cria uma nova instância de uma classe.
require_once = Inclui um arquivo apenas uma vez, evitando duplicações.
echo = Exibe um ou mais valores.

Explicação do código:
Neste código, estamos utilizando namespaces para criar um novo Endereco.
Além disso, estamos utilizando o autoload para carregar as classes necessárias.
Por fim, estamos instanciando um novo Endereco e exibindo suas informações.

*/
?>