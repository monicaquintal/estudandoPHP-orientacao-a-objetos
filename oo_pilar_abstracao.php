<?php

  // definir o modelo
class Funcionario {

  //atributos
  public $nome = null;
  public $telefone = null;
  public $numFilhos = null;
  public $cargo = null;
  public $salario = null;

  //getters setters (overloading / sobrecarregar)
  function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }

  function __get($atributo)
  {
    return $this->$atributo;
  }

  function resumirCadFunc() {
    return "$this->nome possui $this->numFilhos filho(s)!";
  }

  function modificarNumFilhos($numFilhos) {
    // afetar um atributo do objeto
    $this->numFilhos = $numFilhos;
    // neste caso é uma ação void (sem retorno)
  }
}

$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
// echo $y->resumirCadFunc();
echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
echo '<br />';
$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 0);
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';

  /*
    // métodos setters
    function setNome($nome) {
    $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
      }

    //métodos getters
    function getNome() {
      return $this->nome;
    }

    function getNumFilhos() {
      return $this->numFilhos;
    }

    //métodos
    function resumirCadFunc() {
      return "$this->nome possui $this->numFilhos filho(s)!";
    }

    function modificarNumFilhos($numFilhos) {
      // afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
      // neste caso é uma ação void (sem retorno)
    }

  }


  $y = new Funcionario();
  $y->setNome("Mônica");
  $y->setNumFilhos(1);
  //echo $y->resumirCadFunc();  **OU:**
  echo $y->getNome() . ' possui ' . $y->numFilhos . ' filho(s).';
  echo '<hr>';

  $x = new Funcionario();
  $x->setNome("João");
  $x->setNumFilhos(3);
  echo $x->getNome() . ' possui ' . $x->numFilhos . ' filho(s).';

*/
?>