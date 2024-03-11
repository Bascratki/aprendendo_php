<?php

require_once 'autoload.php'; // Carrega automaticamente as classes necessárias.

// Utiliza múltiplas classes de Funcionarios do namespace Alura\Banco\Modelo\Funcionario.
use Alura\Banco\Modelo\Funcionario\{Diretor, Editorvideo, Gerente, Desenvolvedor};
use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

// Cria um objeto Desenvolvedor com nome, CPF, e salário.
$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

// Chama o método sobeDeNivel para aumentar a bonificação do Desenvolvedor.
$umFuncionario->sobeDeNivel();

// Cria objetos para as classes Gerente, Diretor, e EditorVideo com seus respectivos nomes, CPFs, e salários.
$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('123.456.789-11'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.456.789-12'),
    5000
);

$umEditor = new Editorvideo(
    'Paulo',
    new CPF('123.546.789-13'),
    1500
);

// Cria um objeto ControladorDeBonificacoes.
$controlador = new ControladorDeBonificacoes();

// Adiciona a bonificação de cada um dos funcionários ao controlador de bonificações.
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

// Exibe o total de bonificações calculadas pelo controlador.
echo $controlador->recuperaTotal();

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
new = Cria uma nova instância de uma classe.
require_once = Inclui um arquivo apenas uma vez, evitando duplicações.
echo = Exibe um ou mais valores.

Explicação do código:
Neste código, estamos utilizando namespaces para criar
múltiplas classes de Funcionarios. Além disso, estamos
utilizando o autoload para carregar as classes necessárias.
Por fim, estamos instanciando um novo Desenvolvedor, Gerente,
Diretor, e EditorVideo, e adicionando a bonificação de cada
um dos funcionários ao controlador de bonificações, e exibindo
o total de bonificações calculadas pelo controlador.

*/
?>