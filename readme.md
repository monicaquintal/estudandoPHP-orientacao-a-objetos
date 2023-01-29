<div align="center">
<h2>Estudando PHP 🐘</h2>
<h3>Seção 12: PHP e Orientação a Objetos</h3>
<p>Curso Desenvolvimento Web Completo 2022</p>
</div>

<div align="justify">

<a target="_blank" href="https://github.com/monicaquintal/estudandoPHP">Introdução ao PHP.</a>

## Conteúdo

<a href="#aula01">Aula 01: Introdução à Orientação a Objetos - Considerações preliminares.</a><br>
<a href="#aula02">Aula 02: Introdução à Orientação a Objetos.</a><br>
<a href="#aula03">Aula 03: OO - Pilar da Abstração.</a><br>
<a href="#aula04">Aula 04: Getters e Setters.</a><br>
<a href="#aula05">Aula 05: Getters e Setters mágicos (overloading de atributos e métodos).</a><br>
<a href="#aula06">Aula 06: Chamando métodos internamente.</a><br>
<a href="#aula07">Aula 07: Método Construtor e Destrutor (Construct e Destruct).</a><br>
<a href="#aula08">Aula 08: OO - Pilar da Herança.</a><br>
<a href="#aula09">Aula 09: OO - Pilar do Polimorfismo.</a><br>
<a href="#aula10">Aula 10: OO - Pilar do Encapsulamento parte 1.</a><br>
<a href="#aula11">Aula 11: OO - Pilar do Encapsulamento parte 2.</a><br>
<a href="#aula12">Aula 12: Atributos e métodos estáticos.</a><br>
<a href="#aula13">Aula 13: Interfaces.</a><br>
<a href="#aula14">Aula 14: Namespaces parte 1 - Utilizando namespaces para Classes e Interfaces.</a><br>
<a href="#aula15">Aula 15: Namespaces parte 2 - Importando e apelidando namespaces.</a><br>
<a href="#aula16">Aula 16: Tratamento de erros - Try, Catch, Finally e Throw.</a><br>
<a href="#aula17">Aula 17: Tratamento de erros - Exceções customizadas.</a><br>

</div>

<hr>

<div id="aula01" align="center">
<h2>Aula 01: Introdução à Orientação a Objetos - Considerações preliminares.</h2>
</div>

É um dos **Paradigmas de Programação**, suportado pelo PHP. 

Paradigma é um padrão, conduta, modelo, forma de se fazer alguma coisa. As linguagens podem ou não suportar o paradigma desejado. Os dois mais difundidos são:

- Procedural / Estruturado / Imperativo - princípios:
  - sequência (interpretação gravitacional e chamada de funções);
  - decisão (aplicação de comandos como if/else e switch) 
  - e repetição (aplicação de comandos como for, while e do while).

- Orientado a Objetos
  - considerado sucessor do procedural, mas na verdade, se completam.
  - seus princípios serão abordados neste módulo!
  
<hr>

<div id="aula02" align="center">
<h2>Aula 02: Introdução à Orientação a Objetos.</h2>
</div>

Paradigmas:

1. Procedural:

Fax a chamada de procedimentos (procedures - métodos, rotinas, funções...) para manipulação de dados.

A interpretação do script é uma questão sequencial, gravitacional (de cima para baixo).

~~~php
$a = 10;
$b = 7; 
$operador = 'soma';

function calcular ($a, $b, $operador) {
  if ($operador == 'soma') {
    return $a + $b;
  }
  return false;
}
echo calcular($a, $b, $operador);
~~~

2. Orientação a Objetos:

Estrutura de dados com seus respectivos comportamentos.

~~~php
class Calculadora {
  public $a = 10;
  public $b = 7; 
  public $operador = 'soma';
}

public function calcular () {
  if($this->operador == 'soma') {
    return $this->a + $this->b;
  }
  return false; 
}

$calcular = new Calculadora();
echo $calcular->calcular();
~~~

Há uma mudança na forma de pensamento e programação!

Abstração = forma como se interpreta o que ocorre no mundo real.

Os pilates da OO são:
1. Abstração;
2. Encapsulamento;
3. Herança;
4. Polimisfismo.

<hr>

<div id="aula03" align="center">
<h2>Aula 03: OO - Pilar da Abstração. </h2>
</div>

### Abstração:
Consiste na forma como nós interpretamos as coisas do mundo real e transportamos para nossas aplicações.

### Conceitos:

1. Entidade: é a compreensão de que um objeto do mundo real deve passar para dentro da aplicação.

2. Identidade: é no processo de criação ou instância do projeto, com base nos modelos, que podemos criar uma associação de identidade (trata-se de uma referência que irá, futuramente, nos permitir acessar o objeto em questão).

3. Características: atributos.

4. Ações: métodos (são, na essência, funções) ou comportamentos.

Entidade | Identidade | Catacterísticas | Ações
---------|------------|------------------|----------
Produto | x = new Produto() | categoria, título, descrição, valor | exibirResumoProduto, alterarValorProduto
Ideia | z = new Ideia() | tipo, descrição, complexidade | modificarTipoIdeia
Funcionario | y = new Funcionario() | nome, telefone, numFilhos | resumirCadFunc, modificarNumFilhos

Ou seja, ao invés de apenas enviar dados para funções, criaremos objetos (dados), dentro do qual vamos inserir comportamentos!

### Praticando:

> arquivo `oo_pilar_abstracao.php`

Exemplo de relatório que apresente os funcionários da empresa.

- Entidade: Funcionario
- Identidade: y = new Funcionario()
- Características: nome, telefone, numFilhos
- Ações: resumirCadFunc, modificarNumFilhos

**Utilizar o padrão CamelCase para definir a entidade!** E, nos atributos/variáveis/funções, utilizar a partir da 2a palavra!

**Modelo:**

~~~php
class Funcionario {

  //atributos
  public $nome = null;
  public $telefone = null;
  public $numFilhos = null;

  //métodos
  function resumirCadFunc() {
    return 'Esse é o resumo do cadastro do funcionário:';
  }

  function modificarNumFilhos() {
    // afetar um atributo do objeto
  }

}
~~~

**Instanciando objetos:**

~~~php
// criando um objeto com base no modelo Funcionário, 
// e atribuindo esse objeto à variável (dando acesso aos atributos/métodos).
$y = new Funcionario();
// chamando o atributo ou método desejado
echo $y->resumirCadFunc();
echo '<br>';
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

//criando variável x 
//e atribuindo a ela uma nova instância de Funcionário (novo objeto)
$x = new Funcionario();
echo $x->resumirCadFunc();
echo '<br>';
$x->modificarNumFilhos(1);
echo $x->resumirCadFunc();
~~~

O operador `$this` é um operador de ajuste de contexto. Ele indica ao interpretador do PHP que estamos falando do atributo do objeto em questão.

<hr>

<div id="aula04" align="center">
<h2>Aula 04: Getters e Setters. </h2>
</div>

> arquivo `oo_pilar_abstracao.php`

São métodos utilizados para manipulação de atributos, que permitem atender uma convenção/boas práticas (que indica qual a melhor forma de **acessar e manipular os atributos dos objetos**).

O ideal é que as classes sejam genéricas, com atributos que não sejam engessados.

### 1. Métodos Setters:

Sua finalidade é settar ou definir os valores dos atributos dos objetos. Esse método receberá um parâmetro, o recuperará e atribuirá esse valor ao atributo do objeto. 

São métodos do tipo void, que apenas recebem determinado valor e manipulam, sem gerar retorno.

**Importante:** Sempre iniciar com a palavra `set` (boa prática).

Exemplo:

~~~php
function setNome($nome) {
  $this->nome = $nome;
}

function setNumFilhos($numFilhos) {
  $this->numFilhos = $numFilhos;
}
~~~

### 2. Métodos Getters:

Permitem recuperar os valores dos atributos. São métodos do tipo return, que retornarão o atributo solicitado.

**Importante:** Sempre iniciar com a palavra `get` (boa prática).

~~~php
function getNome() {
  return $this->nome;
}

function getNumFilhos() {
  return $this->numFilhos;
}
~~~

### 3. Instanciando objetos:

~~~php
$y = new Funcionario();
$y->setNome("Mônica");
$y->setNumFilhos(1);
echo $y->resumirCadFunc(); // OU:
echo $y->getNome() . ' possui ' . $y->numFilhos . ' filho(s).';

$x = new Funcionario();
$x->setNome("João");
$x->setNumFilhos(3);
echo $x->getNome() . ' possui ' . $x->numFilhos . ' filho(s).';
~~~

<hr>

<div id="aula05" align="center">
<h2>Aula 05: Getters e Setters mágicos (overloading de atributos e métodos). </h2>
</div>

> arquivo `oo_pilar_abstracao.php`

Atualmente, questiona-se de utilizar métodos getters e setters consiste em uma boa prática, pois torna o código extenso e redundante - cria um conflito entre um pilar e a prática!

Há algumas formas de atender ao que é considerado boa prática (utilizando getters e setters), porém de uma forma mais inteligente, através da criação de métodos mágicos, utilizando o conceito de `overloading` ou sobrecarga: criar **um único método set e um único método get, capaz de se adaptar ao atributo que queremos manipular**.

Por convenção, adotar:

~~~php
function __set() { //dois underlines
  <...>
}
~~~

Na prática:

~~~php
class Funcionario {

//atributos
public $nome = null;
public $telefone = null;
public $numFilhos = null;
public $cargo = null;
public $salario = null;

//getters setters (overloading / sobrecarregar)
function __set($atributo, $valor) {
  $this->$atributo = $valor;
}

function __get($atributo) {
  return $this->$atributo;
}

function resumirCadFunc() {
  return "$this->nome possui $this->numFilhos filho(s)!";
}

function modificarNumFilhos($numFilhos) {
  $this->numFilhos = $numFilhos;
}
}

$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
echo '<br />';
$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 0);
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
~~~

<hr>

<div id="aula06" align="center">
<h2>Aula 06: Chamando métodos internamente.</h2>
</div>

> arquivo `oo_pilar_abstracao.php`

Chamar métodos dentro de outros métodos é uma implementação muito comum!

Exemplo:

~~~php
function resumirCadFunc() {
  return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)!";
}
~~~

<hr>

<div id="aula07" align="center">
<h2>Aula 07: Método Construtor e Destrutor (Construct e Destruct). </h2>
</div>

São conhecidos como **métodos mágicos** `__construct()` e `__destruct()`!

Fazem parte do "ciclo de vida" de um objeto: quando criamos a instância de um objeto com base em uma classe, automaticamente o método construtor é executado, de modo que uma ação possa ser tomada no processo de inicialização do objeto. Já o método destrutor, é executado automaticamente quando a instância do objeto é removida da m,memória (quando o objeto deixa de existir).

> arquivo `construtor_destrutor.php`

Exemplo:

~~~php
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
//unset($pessoa); // proposital
~~~

<hr>

<div id="aula08" align="center">
<h2>Aula 08: OO - Pilar da Herança.</h2>
</div>

Segundo príncipio que sustenta o paradigma da Orientação a Objetos.

A Herança traz dois benefícios ao código:
1. Reutilizável
2. Manutenção

> arquivo `oo_pilar_heranca.php`

Exercício de abstração:

~~~php
// CARRO:
$placa
$cor
$teto_solar

$acelerar() {}
$abrirTetoSolar() {}
$alterarPosicaoVolante() {}

// MOTO:
$placa
$cor
$contra_peso_guidao

$acelerar() {}
$empinar() {}
~~~

Em php, inicialmente, temos:

~~~php
class Carro {
  public $placa = 'ABC1234';
  public $cor = 'branco';
  public $teto_solar = true;

  function acelerar() {
    echo 'Acelerar';
  }

  function abrirTetoSolar() {
    echo 'Abrir teto solar';
  }

  function alterarPosicaoVolante() {
    echo 'Alterar posição do volante';
  }
}

class Moto {
  public $placa = 'DEF1122';
  public $cor = 'preta';
  public $contra_peso_guidao = true;

  function acelerar() {
    echo 'Acelerar';
  }

  function empinar() {
    echo 'Empinar';
  }
}

$carro = new Carro();
$moto = new Moto();

echo '<pre>';
print_r($carro);
print_r($moto);
echo '</pre>';
~~~

E, exibindo os dados no browser:

~~~
Carro Object
(
    [placa] => ABC1234
    [cor] => branco
    [teto_solar] => 1
)
Moto Object
(
    [placa] => DEF1122
    [cor] => preta
    [contra_peso_guidao] => 1
)
~~~

A **herança** também é um exercício de abstração: a ideia é compreender o que existe em comum entra os objetos da nossa aplicação, que possa sr abstraído e definido em outro modelo. Ou seja, **centralizar atributos e métodos comuns aos objetos, de modo a implementar outras classes (especialistas)**.

Podemos observar que, no exemplo, os atributos `$placa` e `$cor` são comuns aos objetos carro e moto, assim como o método `$acelerar() {}`!

Podemos, então, centralizar essas características e ações dentro de um terceiro modelo! (podemos utilizar também os termos `Classe Pai/Filhos` e `Classes Genérica/Especializadas` ou `Superclasse/Subclasses`).

Precisamos explicitar a relação de Herança no código! Para isso, utilizar: 

~~~
class Filho extends Pai () {
  <...>
}
~~~

E, no exemplo da aula, teremos:

~~~php
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
echo '<hr>';

echo $moto->empinar();
echo '<br>';
echo $moto->acelerar();
~~~

Explorando a vantagem de **manutenção do código**:

Caso precisemos, por exemplo, criar o método `frear(){}`, comum ao carro e à moto, poderemos simplesmente defini-lo na Classe Veiculo, e passar a utiliza-lo nos objetos especializados Carro e Moto!

~~~php
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

<...>

echo $carro->frear();
echo '<hr>';
echo $moto->frear();
~~~

<hr>

<div id="aula09" align="center">
<h2>Aula 09: OO - Pilar do Polimorfismo.</h2>
</div>

Polimorfismo consiste na sobrescrita de métodos.

> arquivo `oo_pilar_polimorfismo.php`

Continuaremos trabalhando com o exemplo da aula anterior (oo_pilar_heranca.php), porém no novo arquivo oo_pilar_polimorfismo.php).

~~~php
// VEICULO
$plaa
$cor

$acelerar() {}
$frear() {}
$trocarMarcha() {}
// Herança

// CARRO
$teto_solar

$abrirTetoSolar() {}
$alterarPosicaoVolante() {}

// MOTO
$contra_peso_guidao

$empinar() {}
$trocarMarcha() {}
~~~

A Classe Veículo, da aula anterior, passará a possuir o novo método `$trocarMarcha() {}`, comportamento comum tanto para carro quanto para moto. Entretanto, o objeto Moto possui uma particularidade na forma como troca a marcha (usamos a mão para desengatar embreagem e pé para engatar a marcha).

Aplicando no código:

~~~php
<...>
class Veiculo {
<...>
  function trocarMarcha() {
    echo "Desengatar embreagem com o pé e engatar marcha com a mão";
  }
}

$carro = new Carro('ABC1234', 'branco');
$moto = new Moto('DEF1122', 'preta');

$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();

/* Dessa forma, imprime resultados iguais para carro e moto;
 como proceder para indicar a particularidade 
 do método trocarMarcha(){} na Classe Moto? */
~~~

Temos duas possibilidades:

1. implementar um método específico para o Filho dentro da Classe Pai (inadequado, fere o princípio do Polimorfismo, causando redundância de código, já que todos os filhos o herdariam).

2. definir NO OBJETO FILHO como esse método deve se comportar!

Para sobrescrever o método, é simples: basta definir no objeto filho como esse método deve se comportar para este objeto!

~~~php
class Moto extends Veiculo {
<...>
  function trocarMarcha() {
    echo "Desengatar embreagem com a mão e engatar marcha com o pé";
  }
}
<...>
~~~

<hr>

<div id="aula10" align="center">
<h2>Aula 10: OO - Pilar do Encapsulamento parte 1.</h2>
</div>

Do **ponto de vista conceitual**, consiste em encapsular um objeto, tornando-o seguro. Significa que o objeto terá condições de dizer o que dentro dele está disponível para o sistema.

É uma forma de controlar a visibilidade dos atributos e métodos de acordo com as necessidades.

**Na prática**, podemos definir se um determinado atributo/método é privado ou público, ou se esse atributo/método deve ou não ser herdado pelos seus filhos, criando uma camada de segurança para cada um dos objetos da nossa aplicação!!!

Exemplo:

<div align="center">
<img src="./imagens/oo_pilar_encapsulamento.png" width="80%">
</div>

Neste caso, temos atributos e métodos configurados com visibilidades diferentes. Portanto, quando abordamos esse conceito de Encapsulamento, é importante ter em mente os operadores de visibilidade: public, protected e private.

> arquivo `oo_pilar_encapsulamento.php`

`Atributos públicos` estão disponíveis para serem acessados diretamente pela instância do objeto; ou seja, tanto para aplicação quanto para outros objetos. Ou seja, está disponível para o mundo!

~~~php
class Pai {
  public $humor = "com sono";
}

$pai = new Pai();

echo $pai->humor;
$pai->humor = 'feliz';
echo '<br>';
echo $pai->humor;
~~~

Porém, caso tentemos realizar a mesma ação (acessando diretamete) em atributos private ou protected, teremos um erro (indica que o acesso a propriedades privadas/protegidas está bloqueado - É UM NÍVEL DE SEGURANÇA!) Ou seja, estarão disponíveis apenas para o próprio objeto.

~~~php
$pai = new Pai();
echo $pai->nome;
// Fatal error: Uncaught Error: Cannot access private property Pai::$nome (...)

echo $pai->sobrenome;
// Fatal error: Uncaught Error: Cannot access protected property Pai::$sobrenome
~~~

Do ponto de vista da interação Objeto-Aplicação, os operadores protected e private serão idênticos, não estando disponíveis para a aplicação. ***Porém, eles se comportam de forma diferente no processo de herança!***

### Por que criar atributos protegidos?

Geralmente, atributos privados ou protegidos são criados para que sua modificação dependa de alguma regra de negócio (Interface!), a qual deve ser respeitada sempre que esses atributos ou métodos forem acessados.

Logo, o mais coerente é disponibilizar o acesso desses atributos somente a partir de uma interface que implemente
essas regras de negócio.

~~~php
class Pai {
  private $nome = "Mônica";

  public function getNome() {
    return $this->nome;
  }

  public function setNome($value) {
    $this->nome = $value;
  }
}

$pai = new Pai();

echo $pai->getNome();
echo '<br>';
$pai->setNome("João");
echo $pai->getNome();
~~~

Portanto, através dos `métodos de interface`, poderemos manipular atributos privados ou protegidos (podendo estabelecer uma regra de negócio)!

O exemplo abaixo trata-se de "regra de negócio". É um nível de segurança, onde o valor do atributo só será modificado a partir de um método público de interface de objeto, que atenda a uma determinada regra de negócio!

~~~php
// método de interface
  public function setNome($value) { 
    if(strlen($value) >= 3) {
      $this->nome = $value;
    }
  }

echo $pai->getNome(); // retorna "Mônica"
echo '<br>';
$pai->setNome("João");
echo $pai->getNome(); // retorna "João"
echo '<br>';
$pai->setNome("Oi");
echo $pai->getNome(); // retorna "João" novamente
// (pois não atende à regra)
~~~

O mesmo efeito ocorrerá para o atributo "protected", no que se refere à visibilidade (interação script-objeto.)

### Métodos mágicos __set() e __get():

Estão preparados para trabalhar com atributos privados e protegidos. Ao serem definidos, ganhamos a possibilidade de acessar diretamente estes atributos, a partir da instância do objeto (podendo inclusive atribuir valores diretamente a esses atributos ptivados/protegidos).

Exemplo:

~~~php
class Pai {
  private $nome = "Mônica";
  protected $sobrenome = "Quintal";
  public $humor = "com sono";

  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }
}

$pai = new Pai();
echo $pai->humor;
echo "<br>";
echo $pai->nome;
echo "<br>";
echo $pai->sobrenome;
echo "<br>";
echo $pai->sobrenome = "Oliveira";
~~~

### Implementando métodos:

Os operadores de visibilidade aplicados aos métodos funcionam de forma análoga ao que vimos em relação aos atributos:

- atributos e métodos públicos: disponíveis para aplicação e para outros objetos.

- métodos privados ou protegidos: disponíveis apenas para o próprio projeto, quando estamos falando da relação entre a aplicação e o objeto.

~~~php
private function executarMania() {
  echo "Assoviar";
}

protected function responder() {
  echo "Oi!";
}

echo $pai->executarMania();
// Fatal error: Uncaught Error: Call to private method Pai::executarMania() from global scope
echo $pai->responder();
// Fatal error: Uncaught Error: Call to protected method Pai::responder() from global scope
~~~

Para acessar esses métodos protegidos ou privados, precisaremos de um método público, que faça a interface entre a aplicação e o objeto!

Exemplo:

~~~php
  private function executarMania() {
    echo "Assoviar";
  }

  public function executarAcao() {
    $this->executarMania();
    echo '<br>';
    $this->responder();
  }

$pai = new Pai();
echo $pai->executarAcao();
// "Assoviar"
// Oi!
~~~

<hr>

<div id="aula11" align="center">
<h2>Aula 11: OO - Pilar do Encapsulamento parte 2.</h2>
</div>

> arquivo `oo_pilar_encapsulamento.php`
(dando continuidade ao conteúdo e arquivo da aula anterior)

### Como o princípio de Encapsulamento se comporta no contexto de Herança?

### A) Atributos:

 A Classe Filho automaticamente herda ***todos*** os atributos e métodos da classe Pai cujos operadores de visibilidade estejam settados como ***public e protected***.

Ou seja, ***no processo de herança, `atributos e métodos private não são herdados`***.

~~~php
class Filho extends Pai {
  public function getAtributo($atributo) {
    return $this->$atributo;
  }
}

$filho = new Filho();
echo $filho->getAtributo('humor');
// recupera "com sono"
echo '<br>';
echo $filho->getAtributo('sobrenome');
//retorna "Quintal"
echo '<br>';
echo $filho->getAtributo('nome');
// Warning: Undefined property: Filho::$nome
// erro; é um atributo específico da Classe Pai (private)!
// não faz parte do contexto do objeto filho!
~~~

Testando a modificação do estado do objeto:

~~~php
class Filho extends Pai {
  public function getAtributo($atributo) {
    return $this->$atributo;
  }

  public function setAtributo($atributo, $valor) {
    $this->$atributo = $valor;
  }
}

$filho->setAtributo('humor', 'feliz');
echo $filho->getAtributo('humor');
// recupera "feliz"
echo '<br>';
$filho->setAtributo('sobrenome', 'Oliveira');
echo $filho->getAtributo('sobrenome');
// recupera "Oliveira"
echo '<br>';
$filho->setAtributo('nome', 'João');
echo $filho->getAtributo('nome');
echo '<br>';
// recupera "João"
~~~

Conforme indicado acima, podemos criar atributos dinâmicos no contexto do objeto, mesmo quando se trata de um operador de visibilidade privada (atributo específico da Classe Pai); ou seja, apesar do nome ser `private`, podemos alterar e recuperar o seu valor dinamicamente. Portanto, quando utilizamos o mpetodo público e alteramos o seu valor, cria-se um **novo atributo (que será público), com novo valor** (não equivale ao atributo original, que é *específico* da Classe Pai)!!!

### B) Métodos mágicos __set() e __get():

A função nativa `get_class_methods()` espera receber por parâmetro um objeto, e retorna um array com a relação de métodos internos deste objeto!

~~~php
// exibir os métodos do objeto
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';

/*
Array
(
    [0] => __get
    [1] => __set
    [2] => executarAcao
)
*/
~~~

O método mágico definido tem a inteligência de acessar o atributo do objeto Pai, já que get e set foram inicialmente definidos no mesmo contexto, que é o objeto pai!!!

~~~php
class Pai {
  private $nome = "Mônica";
  protected $sobrenome = "Quintal";
  public $humor = "com sono";

  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }
}

$filho = new Filho();

echo $filho->__get('nome');
// recupera "Mônica"
echo '<br>';
echo $filho->__set('nome', 'João');
echo $filho->__get('nome');
// recupera "João"

~~~

Porém, se os métodos get e set forem definidos no objeto filho, irão trabalhar apenas no contexto do objeto filho (não consegue rastrear atributo privado da Classe Pai, por exemplo)!

Ou seja, o contexto dos métodos mágicos influencia em relação a encontrar ou não atributos de objetos Pais.

~~~php
class Filho extends Pai {

  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }
}

$filho = new Filho();

echo $filho->__get('nome');
echo '<br>';
// Warning: Undefined property: Filho::$nome
echo $filho->__set('nome', 'João');
echo $filho->__get('nome');
// recupera "João" 
// (novo atributo público criado!)
~~~ 

### C) Métodos:

Segue a lógica anterior; `public e protected` são herdados, enquanto `private` não são (são restritos ao objetos).

Se utilizarmos o método `get_class_methods` na instância do objeto, não conseguiremos acessa os métodos protegidos. Portanto, podemos solicitar que o próprio objeto exponha seus métodos para aplicação (centro da Classe Filho), exibindo métodos protegidos e privados. Portanto, para debug, podemos utilizar o método `__construct()`, da seguinta forma:

~~~php
class Filho extends Pai {

  public function __construct() {
    echo '<pre>';
    print_r(get_class_methods($this));
    echo '</pre>';
  }
}

/* RETORNO:
Array
(
    [0] => __construct
    [1] => responder - private
    [2] => executarAcao - e executarMania() acessada através da lógica
)
Filho Object
(
    [nome:Pai:private] => Mônica
    [sobrenome:protected] => Quintal
    [humor] => com sono
)
~~~

Assim como atributos, métodos protected podem ser sobrepostos dentro do objeto filho, e automaticamente ter o seu contexto atualizado!

<hr>

<div id="aula12" align="center">
<h2>Aula 12: Atributos e métodos estáticos.</h2>
</div>

