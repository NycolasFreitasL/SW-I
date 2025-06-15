<?php

    class Retangulo{

        private $altura;
        private $largura;
        private $area;
        private $perimetro;

        public function __construct($altura,$largura){

            $this -> altura = $altura;
            $this -> largura = $largura;

        }

       // public function setretang($altura,$largura){{}

        public function caucularArea(){
         
            $area = $this -> altura *$this -> largura;

            echo "a area do retangulo é: ". $area;
            
        }

        public function caucularPerimetro(){

            $perimetro = (2* $this -> largura )+( $this -> altura);
            echo "o perimetro do retagulo é: ". $perimetro;

        }


    }


?>