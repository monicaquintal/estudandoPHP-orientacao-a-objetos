<?php

class Pai {
  private $nome = "Mônica";
  protected $sobrenome = "Quintal";
  public $humor = "com sono";
/*
  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }
*/
  private function executarMania() {
    echo "Assoviar";
  }

  protected function responder() {
    echo "Oi!";
  }

  public function executarAcao() {
    $x = rand(1, 10);

    //podemos, inclusive, implementar lógicas, como:
    if ($x >= 1 && $x <= 8) {
      $this->executarMania();
    } else {
      $this->responder();
    }
  }
}

class Filho extends Pai {

  public function __construct() {
    echo '<pre>';
    print_r(get_class_methods($this));
    echo '</pre>';
  }

  private function executarMania() {
    echo "Cantar";
  }

  protected function responder() {
    echo "Hello!!";
  }

  /*
  public function getAtributo($atributo) {
    return $this->$atributo;
  }

  public function setAtributo($atributo, $valor) {
    $this->$atributo = $valor;
  } */

/*  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }
*/
}

$filho = new Filho();

echo '<pre>';
print_r($filho);
echo '</pre>';


// exibir os métodos do objeto
/*echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';*/



/*
$pai = new Pai();
echo $pai->executarAcao();
*/

/*
class Pai {
  private $nome = "Mônica";
  protected $sobrenome = "Quintal";
  public $humor = "com sono";

  public function getNome() {
    return $this->nome;
  }

  public function setNome($value) { // método de interface
    // exemplo de "regra de negócio"
    // é um nível de segurança! 
    // o valor do atributo só será modificado a partir de um método público de interface de objeto, que atenda a uma determinada regra de negócio!
    if(strlen($value) >= 3) {
      $this->nome = $value;
    }
  }


  public function getSobrenome() {
    return $this->sobrenome;
  }

  public function setSobrenome($value) { 
    if(strlen($value) >= 3) {
      $this->sobrenome = $value;
    }
  }
}

$pai = new Pai();

echo $pai->getNome();
echo '<br>';
$pai->setNome("João");
echo $pai->getNome();
echo '<br>';
$pai->setNome("Oi");
echo $pai->getNome();
//echo $pai->nome;
//echo $pai->sobrenome;

echo '<hr>';

echo $pai->getSobrenome();
echo '<br>';
$pai->setSobrenome("Oliveira");
echo $pai->getSobrenome();
echo '<br>';
$pai->setNome("Oi");
echo $pai->getSobrenome();

/* 
ATRIBUTO PUBLIC:

echo $pai->humor;
$pai->humor = 'feliz';
echo '<br>';
echo $pai->humor;
*/
?>