<?php

class Visibilidade {
    public function publicFunction() {
        echo "public method<br>";
    }

    protected function protectedFunction() {
        echo "protected method<br>";
    }

    private function privateFunction() {
        echo "private method<br>";
    }
}

$visibilityTest = new Visibilidade();
$visibilityTest->publicFunction(); // Saída: "public method<br>"
$visibilityTest-> protectedFunction(); // Erro, método protegido não pode ser acessado fora da classe ou suas subclasses
$visibilityTest-> privateFunction(); // Erro, método privado não pode ser acessado fora da classe

?>

