<?php

namespace A;
class Cliente implements \B\CadastroInterface {
  public $nome = "Mônica";

  public function __construct() {
    echo '<pre>';
    print_r(get_class_methods($this));
    echo '</pre>';
  }
  public function __get ($atributo) {
    return $this->$atributo;
  }
  public function salvar() {
    echo "Salvar";
  }
  public function remover()
  {
    echo "Remover";
  }
}

interface CadastroInterface {
  public function salvar();
}

namespace B;

class Cliente implements CadastroInterface
{
  public $nome = "Mônica";
  public function __get($atributo)
  {
    return $this->$atributo;
  }

  public function __construct() {
    echo '<pre>';
    print_r(get_class_methods($this));
    echo '</pre>';
  }

  public function remover()
  {
    echo "Remover";
  }
}

  interface CadastroInterface {
    public function remover();
  }




$c = new \B\Cliente();

echo '<pre>';
print_r($c);
echo '</pre>';

echo $c->__get('nome');


?>