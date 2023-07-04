<?php

echo 'Numeros impares de 1 a 100:' . PHP_EOL;

for ($i=0;$i<=100;$i++){
    if($i%2!=0){
        echo $i . PHP_EOL;
    }
}