<?php
$email = $_POST['email'];

$senha = $_POST['senha'];

if($email == "nycolasfretas@gmail.com" && $senha == "1234"){
    $nome = 'nycolas';
    header('Location:privada.php?nome='.$nome);
}else{
    header('Location:erro.php');
};
?>