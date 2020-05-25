<?php
    require_once "classLivro.php";

    include "cabecalho.php";

    echo "<table border='1'>";
    echo    "<tr>";
    echo        "<th>Título</th><th>Sinopse</th><th>Nº de Páginas</th><th>Editora</th><th>Preço</th>";
    echo    "</tr>";

    foreach($_SESSION["livro"] as $i=>$a){
        echo "<tr>";
        echo    "<td>$a->titulo</td>";
        echo    "<td>$a->sinopse</td>";
        echo    "<td>$a->n_de_paginas Página(s)</td>";
        echo    "<td>$a->editora</td>";
        echo    "<td>R$ $a->preco</td>";
        echo "</tr>";
    }

    echo "</table>"; 
?>
        </body>
    </html>

