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
}

$carro = new Carro('ABC1234', 'branco');
$moto = new Moto('DEF1122', 'preta');

echo '<pre>';
print_r($carro);
print_r($moto);
echo '</pre>';
echo '<hr>';

echo $carro->abrirTetoSolar();
echo '<br>';
echo $carro->acelerar();
echo '<br>';
echo $carro->frear();
echo '<hr>';

echo $moto->empinar();
echo '<br>';
echo $moto->acelerar();
echo '<br>';
echo $moto->frear();
?>