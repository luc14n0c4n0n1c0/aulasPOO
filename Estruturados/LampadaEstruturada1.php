<?php

/// Definição das variáveis
$lampada_estado = false;
$lampada_potencia = 60;

// Função para ligar a lâmpada
function ligar_lampada() {
  global $lampada_estado;
  $lampada_estado = true;
}

// Função para desligar a lâmpada
function desligar_lampada() {
  global $lampada_estado;
  $lampada_estado = false;
}

// Função para aumentar a potência da lâmpada
function aumentar_potencia() {
  global $lampada_potencia;
  $lampada_potencia += 20;
}

// Função para diminuir a potência da lâmpada
function diminuir_potencia() {
  global $lampada_potencia;
  $lampada_potencia -= 20;
}

// Testando as funções
echo "Estado atual da lâmpada: " . ($lampada_estado ? "ligada" : "desligada") . "<br>";
echo "Potência atual da lâmpada: " . $lampada_potencia . " watts<br>";

ligar_lampada();
aumentar_potencia();

echo "Estado atual da lâmpada: " . ($lampada_estado ? "ligada" : "desligada") . "<br>";
echo "Potência atual da lâmpada: " . $lampada_potencia . " watts<br>";

desligar_lampada();
diminuir_potencia();

echo "Estado atual da lâmpada: " . ($lampada_estado ? "ligada" : "desligada") . "<br>";
echo "Potência atual da lâmpada: " . $lampada_potencia . " watts<br>";


