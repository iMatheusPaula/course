<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='index.php'>Clear</a></h1>";
echo "<h1><a href='index.php?arg=1&arg2=true'>Argumentos</a></h1>";

$data = [
    "name" => "Matheus",
    "mail"  => false
];

$args = http_build_query($data);
echo "<h1><a href='index.php?{$args}'>Argumentos do Array</a></h1>";


$obj = (object)$data;
$argsObj = http_build_query($obj);
echo "<h1><a href='index.php?{$argsObj}'>Argumentos do Objeto</a></h1>";

var_dump($_GET);

/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter = http_build_query([
    "name" => "matheus",
    "mail" => "test@test.co",
    "surname" => "Paula",
    "js" => "<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>"
]);

//CONVERT DATAFILTER TO ARRAY AGAIN
parse_str($dataFilter, $dataFilterArray);
$dataFilters = ([
    "name" => FILTER_SANITIZE_SPECIAL_CHARS,
    "mail" => FILTER_SANITIZE_EMAIL,
    "surname" => FILTER_SANITIZE_SPECIAL_CHARS,
    "js" => FILTER_SANITIZE_SPECIAL_CHARS
]);

var_dump(
    filter_var_array($dataFilterArray, $dataFilters)
);

echo "<h1><a href='index.php?{$dataFilter}'>Data Filter</a></h1>";
echo "<h1><a href='index.php?arg1='>Campo Núlo</a></h1>";

$dataURL = filter_input_array(INPUT_GET, FILTER_SANITIZE_URL);

if($dataURL){
    if(in_array("", $dataURL)) {
        echo "<p class='trigger warning'>Preencha todos os campos</p>";
    }
    elseif(!filter_var($dataURL["mail"], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'>E-mail Inválido</p>";
    }
    else{
        echo "<p class='trigger accept'>Tudo certinhoo!</p>";
    }
}
var_dump($dataURL);
