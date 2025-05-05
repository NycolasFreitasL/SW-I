<?php

class Lampadas{
    public $fabricante;
    public $tensao;
    public $potencia;
    public $cor;
    public $status;


    public function ligar(){
        $this -> $status = True;
    }

    public function desligar(){ 
        $this -> $status = false;
    }

    public function mostrardados(){

        echo "fabricante" .$this -> fabricante . "<br>";

        echo "tansão" . $this -> tensao ."<br>";


        echo "potencia".$this -> potencia."<br>";

        echo "cor".$this -> cor."<br>";


        if ($this -> $status == True){
            echo "esta ligada?: sim <br>";
        }else{
             echo "esta ligada?: sim<br>";
        }

    }
}

?>