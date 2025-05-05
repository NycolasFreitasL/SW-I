<?php

include_once 'lampadas.class.php';

$lamp1 = new lampadas();

$lamp1 -> fabricante = "OSRAM";
$lamp1 -> tensao = 110;
$lamp1 -> potencia = 50;
$lamp1 -> cor = "branca";

echo "<hr>";

$lamp1 -> desligar();
$lamp1 -> mostrardados();
?>