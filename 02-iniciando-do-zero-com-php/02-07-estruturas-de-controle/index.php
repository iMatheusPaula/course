<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = false;

if($test){
    var_dump(true);
}
else{
    var_dump(false);
}

$age = 52;

if($age <20){
    var_dump("marsh");
}elseif ($age > 20 and $age < 50){
    var_dump("skrillx");
}else{
    var_dump("benny bennasi");
}

$hour = 5;

if($hour >= 5 and $hour < 23){
    if($hour < 7){
        var_dump("bob marley");
    }
    else{
        var_dump("after bridge");
    }
}
else {
    var_dump("sleeep time");
}
/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$people = "";

if(!isset($people)){
    var_dump("existe");
}
else{
    var_dump("nao existe");
}

if(empty($people)){
    var_dump("existe");
}
else{
    var_dump("nao existe");
}



/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "completed";

switch ($payment){
    case 'billet_printed':
        var_dump("boleto impresso");
        break;

    case 'canceled':
        var_dump("pagamento cancelado");
        break;

    case 'past_due':
    case 'pending':
        var_dump("pagamento pendente");
        break;


    case 'approved':
    case 'completed':
        var_dump("pagamento aprovado");
        break;

    default:
        var_dump("erro ao processar pagamento");
        break;
}
