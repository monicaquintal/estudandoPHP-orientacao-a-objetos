<div align="center">
<h2>Estudando PHP 🐘</h2>
<h3>Seção 12: PHP e Orientação a Objetos</h3>
<p>Curso Desenvolvimento Web Completo 2022</p>
</div>

<div align="justify">

<a href="https://github.com/monicaquintal/estudandoPHP" target="_blank">Introdução ao PHP.</a>

## Conteúdo

<a href="#aula01">Aula 01: Introdução à Orientação a Objetos - Considerações preliminares.</a><br>
<a href="#aula02">Aula 02: Introdução à Orientação a Objetos.</a><br>
<a href="#aula03">Aula 03: OO - Pilar da Abstração.</a><br>
<a href="#aula04">Aula 04: Getters e Setters.</a><br>
<a href="#aula05">Aula 05: Getters e Setters mágicos (overloading de atributos e métodos).</a><br>
<a href="#aula06">Aula 06: Chamando métodos internamente.</a><br>
<a href="#aula07">Aula 07: Método Construtor e Destrutor (Construct e Destruct).</a><br>
<a href="#aula08">Aula 08: OO - Pilar da Herança.</a><br>
<a href="#aula09">Aula 09: Pilar do Polimorfismo.</a><br>
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
