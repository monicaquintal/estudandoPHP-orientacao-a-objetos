<?php

// -------------- EXEMPLO 1 --------------

interface EquipamentoEletronicoInterface {
  public function ligar();
  public function desligar();
}

class Geladeira implements EquipamentoEletronicoInterface {
  public function abrirPorta() {
    echo "Abrir a porta!";
  }

  public function ligar() {
    echo "Ligar!";
  }

  public function desligar() {
    echo "Desligar!";
  }
}

class TV implements EquipamentoEletronicoInterface {
  public function trocarCanal() {
    echo "Trocar o canal!";
  }
  public function ligar() {
    echo "Ligar!";
  }

  public function desligar() {
    echo "Desligar!";
  }
}

$x = new Geladeira();
$y = new TV();


// -------------- EXEMPLO 2 --------------

interface MamiferoInterface {
  public function respirar();
}

interface TerrestreInterface {
  public function andar();
}

interface AquaticoInterface {
  public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {
  public function respirar() {
    echo "Respirar";
  }
  public function andar() {
    echo "Andar";
  }

  public function conversar() {
    echo "Conversar";
  }
}

class Baleia implements MamiferoInterface, AquaticoInterface {
  public function respirar() {
    echo "Respirar";
  }
  public function nadar() {
    echo "Nadar";
  }
  protected function esguichar() {
    echo "Esguichar";
  }
}

// -------------- EXEMPLO 3 --------------

interface AnimalInterface {
  public function comer();
}

interface AveInterface extends AnimalInterface {
  public function voar();
}

class Papagaio implements AveInterface {
  public function voar() {
    echo "Voar";
  }

  public function comer() {
    echo "Comer";
  }
}




?>