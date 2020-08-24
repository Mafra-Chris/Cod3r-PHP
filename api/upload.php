<div class="titulo">Upload</div>

<?php
    print_r($_FILES);

    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = '/Users/mafra/Desktop/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)){
            echo "<br>Enviado";
        }else
        echo "<br>Erro ao enviar";
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>