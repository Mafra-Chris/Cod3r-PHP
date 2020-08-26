<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Chris',
    'chris@email.com',
    '1999/11/17',
    'https://chris.com.br',
    0,
    10000)";

    $conexao = novaConexao();

    if($conexao->exec($sql)){
        $id = $conexao->lastInsertId();
        echo "Novo cadastro com id $id.";
    }else{
        echo $conexao->errorCode() . "<br>";
        print_r($conexao->errorInfo());
    }