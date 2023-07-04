<?php
function depositar(array $conta,float $valor):array{
    if($valor<0){
        exibeMensagem("Este valor eh negativo, tente outro");
    }
    else{
    $conta['saldo']+=$valor;
    }
    return $conta;
}
function sacar(array $conta,float $valor):array{
    if($valor>$conta['saldo']){
        exibeMensagem('Voce nao pode sacar este valor');
        }
        else{
            $conta['saldo']-=$valor;
        }
        return $conta;
}
function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}
function maiusculo(array &$conta){
    $conta['titular']=mb_strtoupper($conta['titular']);
}