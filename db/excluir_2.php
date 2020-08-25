<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Excluir Registro #2</div>

<?php
require_once "conexao.php";



$registros = [];
$conexao = novaConexao();

if($_GET['excluir']){
    $excluirSQL = "delete from cadastro where id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "select id, nome, email, nascimento from cadastro";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<table class="table">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?= 
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td><a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>