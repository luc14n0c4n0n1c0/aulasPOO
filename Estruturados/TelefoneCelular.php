<?php

// Definição da estrutura de dados para representar um telefone celular
$telefone = [
    'marca' => 'Samsung',
    'modelo' => 'Galaxy S21',
    'cor' => 'Preto',
    'tamanhoTela' => '6.2 polegadas',
    'capacidadeBateria' => '4000 mAh',
    'porcentagemBateria' => 100,
    'carregadorConectado' => false,
    'nivelVolume' => 50,
];

// Função para ligar o telefone
function ligarTelefone(&$telefone) {
    $telefone['porcentagemBateria'] -= 5;
    echo "O telefone foi ligado.<br>";
}

// Função para desligar o telefone
function desligarTelefone(&$telefone) {
    $telefone['porcentagemBateria'] -= 5;
    echo "O telefone foi desligado.<br>";
}

// Função para enviar uma mensagem de texto
function enviarMensagem($numero, $mensagem) {
    echo "Mensagem enviada para o número $numero: \"$mensagem\".<br>";
}

// Função para fazer uma ligação
function fazerLigacao($numero) {
    echo "Ligação realizada para o número $numero.<br>";
}

// Função para conectar o carregador
function conectarCarregador(&$telefone) {
    $telefone['carregadorConectado'] = true;
    echo "Carregador conectado.<br>";
}

// Função para desconectar o carregador
function desconectarCarregador(&$telefone) {
    $telefone['carregadorConectado'] = false;
    echo "Carregador desconectado.<br>";
}

// Função para aumentar o volume
function aumentarVolume(&$telefone) {
    $telefone['nivelVolume'] += 10;
    echo "Volume aumentado para " . $telefone['nivelVolume'] . ".<br>";
}

// Função para diminuir o volume
function diminuirVolume(&$telefone) {
    $telefone['nivelVolume'] -= 10;
    echo "Volume diminuído para " . $telefone['nivelVolume'] . ".<br>";
}

// Função para verificar a porcentagem da bateria
function verificarPorcentagemBateria(&$telefone) {
    echo "A porcentagem da bateria é de " . $telefone['porcentagemBateria'] . "%. <br>";
}

// Exemplo de uso do sistema de telefone celular
ligarTelefone($telefone);
enviarMensagem('1234-5678', 'Olá, tudo bem?');
fazerLigacao('9876-5432');
conectarCarregador($telefone);
aumentarVolume($telefone);
diminuirVolume($telefone);
verificarPorcentagemBateria($telefone);
desconectarCarregador($telefone);
desligarTelefone($telefone);

?>