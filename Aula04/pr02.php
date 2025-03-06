<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$num = [$n1,$n2,$n3];
$n10 = 0 ;
$i = 0;
do{
    if($n10 < $num[$i]){
        $i++;
        $n10 = $num[$i];

    }elseif($n10 >= $num[$i])break;

}while($n10 == $num[$i]);
echo "<p>o maior é: $n10</P>";
?>