<?php
$nome = $_GET['nome'];
$nota1 = $_GET['nota'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$media = ($nota1 + $nota2 + $nota3)/3;

echo "<p>Nome digitado: $nome</p>";
echo "<p>sua media: $media</p>";
?>