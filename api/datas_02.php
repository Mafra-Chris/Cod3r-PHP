<div class="titulo">Data #02</div>

<?php

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d, de %B, de %Y';
$formatoDataHora = '%A, %d, de %B, de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';
echo $agora->format($formatoData1) . '<br>';
setlocale(LC_TIME, 'pt_Br', 'pt_Br.utf-8');