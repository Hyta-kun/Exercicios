<?php
    require_once "classLivro.php";

    include "cabecalho.php";

    $livro = new Livro($_POST);

    $_SESSION["livro"][] = $livro;
?>
            Livro Cadastrado com sucesso.
        </body>
    </html>

