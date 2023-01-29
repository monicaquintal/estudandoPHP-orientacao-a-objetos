<?php

class Exemplo {
  public static $atributo1 = 'Eu sou um atributo estático!';
  public $atributo2 = 'Eu sou um atributo normal!';
  
  public static function metodo1 () {
    echo 'Eu sou um método estático.';
  }

  public function metodo2 () {
    echo 'Eu sou um método normal.';
  }
}

// instanciando o objeto x com base no modelo Exemplo
// $x = new Exemplo();

// acessando atributos e métodos estáticos
/*
echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();
*/

// tentando acessar atributos e métodos normais
/* 
echo Exemplo::$atributo2;
Exemplo::metodo2();
*/

Exemplo::metodo1();

?>