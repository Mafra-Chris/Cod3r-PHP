<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo "Morreu!";
    }

    public function apresentar(){
        echo "Nome: {$this->nome}<br>Idade: {$this->idade}<br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }
    public function apresentar(){
        parent::apresentar();
        echo "@{$this->login}<br>";
    }
}

$usuario = new Usuario('Chris', 20, 'mafra');

$usuario->apresentar();