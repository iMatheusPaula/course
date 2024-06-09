<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 0;
$while = [];

while($looping <= 5){
    $while[] = $looping;
    $looping++;
}

var_dump($while);

//$looping = 0;
$while = [];

do{
    $while[] = $looping;
    $looping--;
}
while($looping >= 1);

var_dump($while);


/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for($i = 1; $i <= 10; $i++){
    echo "<p>{$i}</p>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($x = 1; $x <= 10; $x++){
    if($x % 2 == 0){
        continue;
    }
    if ($x > 7){
        break;
    }

    echo "<p>Pulou + 2 [ {$x} ]</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];

for($ar = 0; $ar <= 4; $ar++){
    $array[] = $ar;
}

foreach ($array as $item){
    echo "<p>{$item}</p>";
}

foreach($array as $key => $value){
    echo "<p>{$key} -- {$value}</p>";
}