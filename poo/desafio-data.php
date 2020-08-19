<div class="titulo">Desafio Data</div>

<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data;

$d1->apresentar();