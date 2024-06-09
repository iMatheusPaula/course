<?php

function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

// SOBRE OS ARGUMENTOS DA FUNCAO
// PRIMEIROS SAO OS OBRIGATORIOS
// SEGUNDO OS IMPORTANTES
// TERCEIRO OS OPCIONAIS

function optionArgs($arg1, $arg2 = true, $arg3 = null){
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function calcIMC(){
    global $weight;
    global $height;
    return $weight / ($height * $height);
}


function payTotal($price){
    static $total;
    $total += $price;
    return number_format($total, "2", ",", ".");
}

function myTeam(){
    $teamNames = func_get_args();
    $teamCount = func_num_args();
    return [$teamNames, "count" => $teamCount];
}