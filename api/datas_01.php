<div class="titulo">Datas #01</div>

<?php

echo time() . '<br>';

echo date('D, d \d\e M \d\e Y H A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'pt_Br', 'pt_Br.utf-8');

echo strftime('%A, %d de %B de %Y', time()) . '<br>';