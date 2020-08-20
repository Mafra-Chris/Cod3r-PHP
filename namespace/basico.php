<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ .' <br>';
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
echo constante1 .'<br>';
echo constante2 .'<br>';
echo \contexto\constante3 .'<br>';