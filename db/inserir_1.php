<div class="titulo">Inserir #1</div>

<?php

require_once "conexao.php";

$sql = "insert into cadastro 
    (nome, nascimento, email, site, filhos, salario)
    values (
        'Wainer',
        '1999-11-17',
        'Cintia@email.com',
        'https://Cintia.com',
        0,
        16000
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
