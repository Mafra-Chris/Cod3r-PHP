<div class="titulo">Map e Filter</div>

<?php
$notas = [5.8, 9.7, 8.5, 6.7];
$notasFinais = [];

$notasFinais = array_map('round', $notas);

print_r($notasFinais);

function aprovados($nota){
    return $nota >=7;
}

$apenasAprovados = array_filter($notas, 'aprovados');
echo "<br>";
print_r($apenasAprovados);
