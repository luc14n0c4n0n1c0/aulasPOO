<?php

class ConversorKmMi {
  private $totalKm = 0;

  public function converter($quilometros) {
      $this->totalKm += $quilometros;
      return $quilometros * 0.6;
  }

  public function getTotalKm() {
      return $this->totalKm;
  }
}

$conversor = new ConversorKmMi();
echo 'percorreu ' . $conversor->converter(100) . " milhas <br>";
echo 'percorreu ' . $conversor->converter(200) . " milhas <br>";
echo 'percorreu no total ' . $conversor->getTotalKm() . " quilometros <br>";




?>