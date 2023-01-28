<?php

class Carro extends Veiculo {
    public $teto_solar = true;

  function __construct($placa, $cor) {
    $this->placa = $placa;
    $this->cor = $cor;
  }

  function abrirTetoSolar() {
    echo 'Abrir teto solar';
  }

  function alterarPosicaoVolante() {
    echo 'Alterar posição do volante';
  }
}

class Moto extends Veiculo {
  public $contra_peso_guidao = true;

  function __construct($placa, $cor) {
    $this->placa = $placa;
    $this->cor = $cor;
  }

  function empinar() {
    echo 'Empinar';
  }

  function trocarMarcha() {
    echo "Desengatar embreagem com a mão e engatar marcha com o pé";
  }
}

class Veiculo {
  public $placa = null;
  public $cor = null;

  function acelerar() {
    echo 'Acelerar';
  }

  function frear() {
    echo "Frear";
  }

  function trocarMarcha() {
    echo "Desengatar embreagem com o pé e engatar marcha com a mão";
  }
}

class Caminhao extends Veiculo {}

$carro = new Carro('ABC1234', 'branco');
$moto = new Moto('DEF1122', 'preta');
$caminhao = new Caminhao();

$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();
echo '<br>';
$caminhao->trocarMarcha();

?>