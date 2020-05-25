<?php
    include "cabecalho.php";
?>
            <form method="post" action="recebe_filme.php">
                <input type="text" name="titulo" placeholder="Título..." /> <br />
                <input type="textarea" name="sinopse" placeholder="Sinopse..." /> <br />
                <input type="number" name="tempo_de_duracao" placeholder="Duração em minutos..." /> <br />
                <input type="text" name="produtora" placeholder="Produtora..." /> <br />
                <input type="number" name="preco" placeholder="Preço..." /> <br />
                <input type="Submit" value="Enviar"  /> <br />
            </form>
        </body>
    </html>