<div class="titulo">Primeira Classe</div>
<?php

class Cliente {
    public $nome;
    public $idade;

    public function apresentar(){
        echo "Nome: {$this->nome}<br>Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = "Christiano";
$c1->idade = 20;
$c1->apresentar();