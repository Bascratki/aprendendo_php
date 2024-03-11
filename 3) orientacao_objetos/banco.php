<?php

require_once 'autoload.php'; // Inclui o sistema de autoload para carregar as classes automaticamente.

// Utiliza namespaces para as classes Titular, Endereco, CPF, e Conta para evitar a necessidade de referenciá-las com seu namespace completo.
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

// Cria um novo Endereco.
$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

// Cria um novo Titular com um CPF, nome, e Endereco.
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);

// Cria uma nova Conta com o Titular previamente criado.
$primeiraConta = new Conta($vinicius);
// Deposita 500 na conta.
$primeiraConta->deposita(500);
// Realiza um saque de 300 da conta.
$primeiraConta->saca(300);

// Exibe informações do titular da conta e o saldo atual.
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

// Cria um segundo titular e uma segunda conta para demonstrar a possibilidade de múltiplas contas.
$patricia = new Titular(new CPF('123.456.789-11'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta); // Exibe detalhes da segunda conta usando var_dump.

// Cria uma terceira conta com um novo titular e endereço para demonstrar a flexibilidade da criação de contas.
$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123.456.789-12'), 'Abcdefg', $outroEndereco));

// Remove a segunda conta para demonstrar como a contagem de contas ativas é gerenciada.
unset($segundaConta);

// Exibe o número total de contas ativas.
echo Conta::recuperaNumContas();

/*

Explicação dos comandos utilizados:
use = Importa um namespace para utilizar classes definidas em outros arquivos.
new = Cria uma nova instância de uma classe.
require_once = Inclui um arquivo apenas uma vez, evitando duplicações.
unset = Remove uma variável ou índice de um array.
echo = Exibe um ou mais valores.

Explicação do código:
Neste código, estamos utilizando namespaces
para criar um novo Titular, Endereco, CPF, e Conta.
Além disso, estamos utilizando o autoload para carregar
as classes necessárias. Por fim, estamos instanciando um
novo Titular, uma nova Conta, e exibindo informações sobre
o titular e saldo da conta, além de criar uma segunda conta
e uma terceira conta para demonstrar a flexibilidade da
criação de contas, e removendo a segunda conta para demonstrar
como a contagem de contas ativas é gerenciada.

*/
?>