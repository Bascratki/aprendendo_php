<?php

// Inclui o arquivo que contém as funções 'sacar', 'depositar' e 'nomeMaiusculo'.
require_once 'funcoes.php';

// Declaração de um array associativo para armazenar informações das contas correntes.
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria', // Nome do titular da conta.
        'saldo' => 10000 // Saldo inicial da conta.
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto', // Nome do titular da conta.
        'saldo' => 300 // Saldo inicial da conta.
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius', // Nome do titular da conta.
        'saldo' => 100 // Saldo inicial da conta.
    ]
];

// Realiza um saque na conta de Maria, chamando a função 'sacar' e atualizando a conta dela.
$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes ['123.456.789-10'], 500);

// Realiza um saque na conta de Alberto, chamando a função 'sacar' e atualizando a conta dele.
$contasCorrentes ['123.456.689-11'] = sacar($contasCorrentes ['123.456.689-11'], 200);

// Realiza um depósito na conta de Vinicius, chamando a função 'depositar' e atualizando a conta dele.
$contasCorrentes ['123.256.789-12'] = depositar($contasCorrentes ['123.256.789-12'], 900);

// Remove a conta de Alberto do array, usando seu CPF como chave.
unset($contasCorrentes['123.456.689-11']);

// Altera o nome do titular da conta de Vinicius para maiúsculas.
nomeMaiusculo ($contasCorrentes['123.256.789-12']);

?>

<!doctype html>
<!-- O restante do código é HTML e apresenta os dados das contas correntes em uma lista. -->

<html lang="en">
<head>
    <!-- Metadados do cabeçalho da página HTML. -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php
        // Laço de repetição para percorrer o array de contas correntes.
        foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <!-- Exibe o nome do titular e o CPF da conta. -->
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            <!-- Exibe o saldo da conta. -->
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

<?php

/*

Explicações dos comandos utilizados:
require_once = inclui o arquivo apenas uma vez
require = inclui o arquivo sempre que for chamado
include_once = inclui o arquivo apenas uma vez
include = inclui o arquivo sempre que for chamado
unset = remove um elemento do array
foreach = laço de repetição para percorrer arrays

Explicações das tags HTML utilizadas:
<!doctype html> = declaração do tipo de documento HTML
<html> = tag HTML que indica o início do documento
<head> = tag HTML que contém metadados do cabeçalho da página
<meta> = tag HTML que contém informações sobre o documento
<title> = tag HTML que define o título da página
<body> = tag HTML que contém o conteúdo da página
<h1> = tag HTML que define um cabeçalho de nível 1
<dl> = tag HTML que define uma lista de descrição
<dt> = tag HTML que define um termo em uma lista de descrição
<dd> = tag HTML que define uma descrição em uma lista de descrição

Explicações do código:
O código acima é um exemplo que demonstra o uso de funções para manipular
arrays associativos e strings. Ele também ilustra o uso de estruturas de
controle, como 'if', 'else' e 'foreach', para realizar operações condicionais
e percorrer arrays associativos. Além disso, o código mostra como utilizar a
estrutura de controle 'unset' para remover elementos de um array associativo
e as estruturas de controle 'require_once', 'require', 'include_once' e 'include'
para incluir arquivos.

*/
?>