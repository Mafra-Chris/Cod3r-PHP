<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja bem vindo(a)';
}

echo obterMensagem();

function obterNome($nome){
    return "<br> Olá $nome";
}

echo obterNome('Chris');

function trocaValor(&$a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
echo "<br> Antes: $variavel";
trocaValor($variavel, 5);
echo "<br> Depois: $variavel";