<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
$resultado = $conexao->query($sql)->fetchAll();
echo "opa";

print_r($resultado);