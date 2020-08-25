<div class="titulo">Excluir Registro #1</div>

<?php
require_once "conexao.php";

$sql = "delete from cadastro where id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();