<?php

class TelefoneCelular {
    private $marca;
    private $modelo;
    private $cor;
    private $tamanhoTela;
    private $capacidadeBateria;
    private $porcentagemBateria;
    private $carregadorConectado;
    private $nivelVolume;

    public function __construct($marca, $modelo, $cor, $tamanhoTela, $capacidadeBateria) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->tamanhoTela = $tamanhoTela;
        $this->capacidadeBateria = $capacidadeBateria;
        $this->porcentagemBateria = 100;
        $this->carregadorConectado = false;
        $this->nivelVolume = 50;
    }

    public function ligar() {
        echo "Ligando o telefone...\n";
    }

    public function desligar() {
        echo "Desligando o telefone...\n";
    }

    public function enviarMensagem($texto, $numero) {
        echo "Enviando mensagem para o número $numero: $texto\n";
    }

    public function fazerLigacao($numero) {
        echo "Realizando ligação para o número $numero\n";
    }

    public function conectarCarregador() {
        if ($this->carregadorConectado) {
            echo "O carregador já está conectado!\n";
        } else {
            $this->carregadorConectado = true;
            echo "Conectando o carregador...\n";
        }
    }

    public function desconectarCarregador() {
        if (!$this->carregadorConectado) {
            echo "O carregador já está desconectado!\n";
        } else {
            $this->carregadorConectado = false;
            echo "Desconectando o carregador...\n";
        }
    }

    public function aumentarVolume() {
        if ($this->nivelVolume < 100) {
            $this->nivelVolume++;
            echo "Aumentando o volume...\n";
        } else {
            echo "O volume já está no máximo!\n";
        }
    }

    public function diminuirVolume() {
        if ($this->nivelVolume > 0) {
            $this->nivelVolume--;
            echo "Diminuindo o volume...\n";
        } else {
            echo "O volume já está no mínimo!\n";
        }
    }

    public function verificarBateria() {
        echo "A bateria está em {$this->porcentagemBateria}%\n";
    }
}

// Exemplo de utilização
$telefone = new TelefoneCelular("Samsung", "Galaxy S21", "Preto", "6.2 polegadas", 4000);
$telefone->ligar();
$telefone->enviarMensagem("Olá, tudo bem?", "5551999999999");
$telefone->fazerLigacao("5551888888888");
$telefone->aumentarVolume();
$telefone->diminuirVolume();
$telefone->verificarBateria();
$telefone->conectarCarregador();
$telefone->verificarBateria();
$telefone->desconectarCarregador();
$telefone->verificarBateria();

?>