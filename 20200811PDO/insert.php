<?php
    include "conexao.php";
    if(!empty($_POST))
    {
        $nome = $_POST["nome_estado"];
        $sigla = $_POST["sigla"];
        $insert = "INSERT INTO estado(nome_estado,sigla) VALUES ('$nome','$sigla')";
        $conexao->query($insert);
        echo "Estado Inserido no Banco de dados. <a href='form_estado.php'>Voltar...</a>";
    }
    else
    {
        header("location: form_estado.php");
    }
?>
<?php
    //',''); DELETE FROM estado;--
?>