<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'Morreu!';
    }

    public function apresentar(){
        echo "Nome: {$this->nome}<br>Idade: {$this->idade}<br>";
    }
}

$p1 = new Pessoa('Chris', 20);
$p1->apresentar();
$p1 = null;