<?php
    require_once "classFilme.php";

    include "cabecalho.php";

    $filme = new Filme($_POST);

    $_SESSION["filme"][] = $filme;
?>
            Filme Cadastrado com sucesso.
        </body>
    </html>

