<?php
    require_once "classFilme.php";

    include "cabecalho.php";

    echo "<table border='1'>";
    echo    "<tr>";
    echo        "<th>Título</th><th>Sinopse</th><th>Tempo de Duração</th><th>Produtora</th><th>Preço</th>";
    echo    "</tr>";

    foreach($_SESSION["filme"] as $i=>$a){
        echo "<tr>";
        echo    "<td>$a->titulo</td>";
        echo    "<td>$a->sinopse</td>";
        echo    "<td>$a->tempo_de_duracao</td>";
        echo    "<td>$a->produtora</td>";
        echo    "<td>R$$a->preco</td>";
        echo "</tr>";
    }

    echo "</table>"; 
?>
        </body>
    </html>

