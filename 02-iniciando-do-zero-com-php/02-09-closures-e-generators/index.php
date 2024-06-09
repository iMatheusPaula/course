<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
    $age = date("Y") - $year;
    return "<p>Sua Idade é {$age}</p>";
};


echo $myAge(1998);
echo $myAge(1988);

$priceBRL = function ($price){
  return number_format($price, 2, ",", ".");
};

echo "O valor da compra é: ", $priceBRL(2000), ", deseja finalizar o pedido?";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};


$cartAdd("PC", 1, 999);
$cartAdd("Mac", 1, 998);

var_dump($myCart);

//var_dump($cartAdd);

echo "Valor final: ", $priceBRL($myCart["totalPrice"]);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

// EXEMPLO SEM GENERATOR

$iterator = 10000;

function showDates($days){
    $saveDate = [];
    for($day = 1; $day < $days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(0) as $date){
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";

// REAL GENERATOR

function generatorDate($days){
    for($day = 1; $day < $days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date){
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";
