<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra){
    $ultimo = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimo; $i++){
        if($palavra[$i] !== $palavra[$ultimo -$i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('ovo') . '<br>';
echo palindromo('camisa') . '<br>';

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('ovo') . '<br>';
echo palindromoSimples('camisa') . '<br>';