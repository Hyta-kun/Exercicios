<?php
    require_once "classInfo.php";

    class Filme extends Info {
        public $tempo_de_duracao;
        public $produtora;
        public function __construct($atributos){
            $this->titulo = $atributos["titulo"];
            $this->sinopse = $atributos["sinopse"];
            $this->tempo_de_duracao = $atributos["tempo_de_duracao"];
            $this->produtora = $atributos["produtora"];
            $this->preco = $atributos["preco"];
        }
    }
?>