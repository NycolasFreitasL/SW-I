<?php

    class Funcionario{

        private $nome;
        private $salario;
        
    public function __construct($nome,$salario){

        $this -> nome = $nome;
        $this -> salario = $salario;

    }

    public function setaumentarsalario($quantidade){

        $quantidade/=100;

        $this -> salario += $this -> salario * $quantidade;

        //echo "salario foi para:". $this -> salario;
    }

    public function getexibirinformacoes(){
        echo "<br>";
        echo"nome: " .$this -> nome;
        echo "<br>";
        echo "salario: " . $this ->salario;
    }
}   

?>