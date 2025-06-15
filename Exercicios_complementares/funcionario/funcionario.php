<?php

    include_once 'Funcionario.class.php';


    $func1 = new Funcionario("roberto",1000);

    $func1 -> setaumentarsalario(10);

    $func1 -> getexibirinformacoes();

?>