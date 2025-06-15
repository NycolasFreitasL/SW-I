<?php

    include_once 'Livro.class.php';

    $livro =new Livro("cidinha","receita de bolo de cenoura",1);
    
    $livro -> emprestar(); #esse empresta o livro, então logo irá mostrar qu o livro não está disponivel.
   
    $livro -> devolver();  #esse devolve o livro, logo ele irá rertornar que o livro está disponivel.
    

    echo $livro -> exibirstatus();


?>