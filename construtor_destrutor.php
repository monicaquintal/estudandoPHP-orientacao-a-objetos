<?php

class Pessoa {

  public $nome = null;

  function __construct($nome) {
    echo "Objeto iniciado!" . "<br>";;
    $this->nome = $nome;
  }

  function __destruct(){
    echo "Objeto removido!";
  }

  function __get($atributo) {
    return $this->$atributo;
  }

  function correr() {
    return $this->__get('nome') . " está correndo!";
  }

}

$pessoa = new Pessoa('Mônica'); // instanciando o objeto
echo 'Nome: ' . $pessoa->__get('nome') . '<br>';
echo $pessoa->correr();

echo '<br>';
unset($pessoa);

?>