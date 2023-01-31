<?php

namespace B;

class Cliente implements CadastroInterface
{
  public $nome = "João";
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

?>