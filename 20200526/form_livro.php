<?php
    include "cabecalho.php";
?>
            <form method="post" action="recebe_livro.php">
                <input type="text" name="titulo" placeholder="Título..." /> <br />
                <input type="textarea" name="sinopse" placeholder="Sinopse..." /> <br />
                <input type="number" step="0.01" name="n_de_paginas" placeholder="Nº de páginas..." /> <br />
                <input type="text" name="editora" placeholder="Editora..." /> <br />
                <input type="cash" step="0.01" name="preco" placeholder="Preço..." /> <br />
                <input type="Submit" value="Enviar"  /> <br />
            </form>
        </body>
    </html>