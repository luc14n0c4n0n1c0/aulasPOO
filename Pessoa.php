<?php

class Pessoa {
   private $nome;
   private $idade;
   private $altura;

   public function getNome() {
      return $this->nome;
   }

   public function getIdade() {
      return $this->idade;
   }

   public function getAltura() {
      return $this->altura;
   }

   public function setNome($nome) {
      $this->nome = $nome;
   }

   public function setIdade($idade) {
      $this->idade = $idade;
   }

   public function setAltura($altura) {
      $this->altura = $altura;
   }
}

$pessoa1 = new Pessoa();
$pessoa1->setNome("João");
$pessoa1->setIdade(30);
$pessoa1->setAltura(1.80);

$pessoa2 = new Pessoa();
$pessoa2->setNome("Maria");
$pessoa2->setIdade(25);
$pessoa2->setAltura(1.70);

echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-"; 
echo "=-=-=-=-=- PESSOA 1 -=-=-=-=-=-=-";
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- <BR>";
echo "Nome: " . $pessoa1->getNome() . "<BR>"; // João
echo "Idade: " . $pessoa1->getIdade() . "<BR>" ; // 30
echo "Altura: " . $pessoa1->getAltura() . "<BR>"; // 1.80

echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-"; 
echo "=-=-=-=-=- PESSOA 2 -=-=-=-=-=-=-";
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- <BR>";
echo "Nome: " . $pessoa2->getNome() . "<BR>"; // Maria
echo "Idade: " . $pessoa2->getIdade() . "<BR>"; // 25
echo "Altura: " . $pessoa2->getAltura() . "<BR>"; // 1.70



?>