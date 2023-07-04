<?php

$altura=1.78;
$peso=66;
$resultado;

$resultado=$peso/$altura**2;

if($resultado<18.5){
    echo 'Voce esta com magreza.' . PHP_EOL;
}
else if($resultado>18.5 and $resultado<24.9){
    echo 'Voce esta com IMC normal.' . PHP_EOL;
}
else{
    echo 'Voce esta com sobrepeso.' . PHP_EOL;
}