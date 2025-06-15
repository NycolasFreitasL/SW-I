<?php

    class Livro {

        private $autor;
        private $titulo;
        private $disponivel;

        public function __construct($autor,$titulo,$disponivel){

            $this ->titulo = $titulo;
            $this ->autor = $autor;
            $this ->disponivel = true;

        }
        public function emprestar(){

            $this -> disponivel = false;
        }
        public function devolver(){
            $this -> disponivel = true;
        }

        public function exibirstatus(){
            echo "<br>";
            echo "titulo: ".$this -> titulo;
            echo "<br>";
            echo "Autor: ".$this -> autor;
            echo "<br>";
            //echo $this -> disponivel;

            if ($this -> disponivel == false ) {
                echo "o livro já foi emprestado";
            } else {
                echo "o livro está disponivel";
            }
            

            }
            

        }

    

?>