<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n"); 
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Nova Linha\n"); 
fclose($arquivo);