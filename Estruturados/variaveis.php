<?php

// Definindo variáveis com nomes descritivos e tipos de dados
$nome = "João"; // string
$idade = 30; // int
$preco = 9.99; // float

// Definindo uma constante
define("PI", 3.141592); // float

// Função que usa uma variável global
function incrementaIdade() {
  global $idade; // int
  $idade++;
}

// Função que usa parâmetros
function calculaTotal(int $quantidade, float $precoUnitario): float {
  return $quantidade * $precoUnitario;
}

// Exemplo de uso das variáveis e funções definidas acima
echo "Nome: $nome <br>";
incrementaIdade();
echo "Idade: $idade <br>";
echo "Preço: $preco <br>";
echo "Valor de PI: " . PI . "<br>";
echo "Total: " . calculaTotal(5, $preco) . "<br>";


?>