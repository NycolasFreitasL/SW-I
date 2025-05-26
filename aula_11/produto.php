
<?php

    include_once 'produto.class.php';

    $p1 = new produtos("Mouse",100.00,10);
    $p1->adicionarEstoque(10);
    $p1->removerEstoque(2);
    $p1->mostrardetalhes();
    echo "<br/>";
    $p2 = new produtos("Guitarra",990.00,5);
    $p2->adicionarEstoque(1);
    $p2->removerEstoque(2);
    $p2->mostrardetalhes();

?>
