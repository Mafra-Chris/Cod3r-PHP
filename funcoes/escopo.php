<div class="titulo">Função e Escopo</div>

<?php

function imprimirMensagens(){
    echo "Olá <br>";
}

imprimirMensagens();

$variavel = 1;

function trocaValor(){
    global $variavel;
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes $variavel <br>";
trocaValor();
echo "Depois $variavel <br>";
