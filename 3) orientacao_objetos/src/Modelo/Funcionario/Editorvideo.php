<?php

// Importando classes necessárias
namespace Alura\Banco\Modelo\Funcionario;

// A classe EditorVideo estende a classe abstrata Funcionario, especificando comportamentos para editores de vídeo.
class EditorVideo extends Funcionario
{
    // Método calculaBonificacao sobrescreve o método da classe base, retornando a bonificação específica para editores de vídeo.
    // Neste caso, a bonificação é de R$ 600,00.
    public function calculaBonificacao(): float
    {
        // Retorna a bonificação fixa de R$ 600,00 para editores de vídeo.
        return 600;
    }
}

/*

Explicação dos comandos utilizados:
extends = Define uma classe como filha de outra classe.

Explicação do código:
Neste código, estamos definindo a classe EditorVideo, que herda de Funcionario e implementa suas funcionalidades específicas.
Além disso, estamos implementando o método calculaBonificacao, que calcula a bonificação específica de um EditorVideo.

*/
?>