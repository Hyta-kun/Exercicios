<?php
    require_once "classInfo.php";

    class Livro extends Info {
        public $n_de_paginas;
        public $editora;
        public function __construct($atributos){
            $this->titulo = $atributos["titulo"];
            $this->sinopse = $atributos["sinopse"];
            $this->n_de_paginas = $atributos["n_de_paginas"];
            $this->editora = $atributos["editora"];
            $this->preco = $atributos["preco"];
        }
    }
?>