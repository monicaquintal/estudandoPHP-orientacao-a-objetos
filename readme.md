<div align="center">
<h2>Estudando PHP 🐘</h2>
<h3>Seção 12: PHP e Orientação a Objetos</h3>
<p>Curso Desenvolvimento Web Completo 2022</p>
</div>

<div align="justify">

[Introdução ao PHP.](https://github.com/monicaquintal/estudandoPHP)

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
