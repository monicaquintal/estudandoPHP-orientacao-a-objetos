<?php

  // definir o modelo
  class Funcionario {

    //atributos
    public $nome = 'José';
    public $telefone = '11 99999-9999';
    public $numFilhos = 2;

    //métodos
    function resumirCadFunc() {
      return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
      // afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
      // neste caso é uma ação void (sem retorno)
    }

  }

  // criando um objeto com base no modelo Funcionário, e aribuindo esse objeto à variável y (dando acesso aos atributos e métodos!
  $y = new Funcionario();
  // chamando o atributo ou método desejado
  echo $y->resumirCadFunc();
  echo '<br>';
  $y->modificarNumFilhos(3);
  echo $y->resumirCadFunc();
  echo '<hr>';

  //criando variável x e atribuindo a ela uma nova instância de Funcionário (um novo objeto)
  $x = new Funcionario();
  echo $x->resumirCadFunc();
  echo '<br>';
  $x->modificarNumFilhos(1);
  echo $x->resumirCadFunc();
?>