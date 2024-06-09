<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/functions.php";

var_dump(functionName("Skrillex", "Four Tet", "Fred Again..."));

var_dump(functionName("Matheus", "Juliany", "sweetbiru"));


var_dump(optionArgs("Matheus", "Paula"));
var_dump(optionArgs("Matheus"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 86;
$height = 1.86;

echo calcIMC();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

payTotal(200);
payTotal(1100);
payTotal(357);

echo "<p>O total a pagar é R$ ", payTotal(0), "</p>";

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Skrillex", "Four Tet", "FredAgain..."));
