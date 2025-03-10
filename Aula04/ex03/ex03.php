<?php

$nomes = "nycolas";
$senhas = "123";

$log = $_POST['nome'];
$pass = $_POST['senha'];

if($log == $nomes && $pass == $senhas){
    echo "<p>Nome digitado: $log </p>";
    echo "<p>senha Digitada: $pass </p>";
    echo "<p>logado com sucesso</p>";
};

?>