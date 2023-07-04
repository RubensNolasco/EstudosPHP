<?php
function arraySoma($numero){
    $num=0;
    foreach($numero as $numeros){
        $num+=$numeros;
    }
    return $num;
}

$array1=[2,2,2,2,2];
$resultado=arraySoma($array1);
echo "A soma do arrya eh: $resultado";
