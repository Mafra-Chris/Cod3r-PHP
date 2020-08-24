<?php
session_start();
print_r($_SESSION);
?>
<?php
$_SESSION['nome'] = 'chris mafra';
?>

<p>
    <b>Nome: </b><?= $_SESSION['nome']?>
</p>
<p>
    <b>Email: </b><?= $_SESSION['email']?>
</p>


<p>
    <a href="/sessao/basico_sessao.php">Voltar Sessão</a>
</p>

<p>
    <a href="/sessao/basico_sessao_limpar.php">Limpar Sessão</a>
</p>