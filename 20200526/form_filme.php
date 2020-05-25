<?php
    include "cabecalho.php";
?>
            <form method="post" action="recebe_filme.php">
                <input type="text" name="titulo" placeholder="Título..." /> <br />
                <input type="textarea" name="sinopse" placeholder="Sinopse..." /> <br />
                <input type="number" step="0.01" name="tempo_de_duracao" placeholder="Duração em horas..." /> <br />
                <input type="text" name="produtora" placeholder="Produtora..." /> <br />
                <input type="cash" step="0.01" name="preco" placeholder="Preço..." /> <br />
                <input type="Submit" value="Enviar"  /> <br />
            </form>
        </body>
    </html>