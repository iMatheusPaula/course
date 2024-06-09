<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "John Doe",
    "email" => "john@doe.com",
    "age" => 25,
];

$obgProfile = (object) $arrProfile;

var_dump($arrProfile, $obgProfile);

echo "<p>{$arrProfile['name']} tem {$arrProfile['age']} anos.</p>";
echo "<p>{$obgProfile->name} tem {$obgProfile->age} anos.</p>";

$ceo = $obgProfile;
unset($obgProfile->email); //excluindo campo do obg
var_dump($ceo);

$company = new stdClass();
$company->name = "School";
$company->ceo = $ceo;
$company->teacher = new StdClass(); // obg multinivel
$company->teacher->name = "Teacher";
$company->teacher->email = "teacher@school.com";

var_dump($company);
/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

echo "<h2>var_dump DateTime</h2>";
$date = new DateTime();
var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime") // validacao se é filha de 'DateTime'
]);

echo "<h2>var_dump PDOException</h2>";
$exception = new PDOException();
var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Exception") // validacao se é filha de 'DateTime'
]);
