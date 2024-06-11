<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 */
fullStackPHPClassSession("classe e objeto", __LINE__);

require __DIR__ . "/classes/User.php";

$user = new User();
var_dump($user);

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

$user->name = "Matheus";
$user->surName = "Paula";
$user->age = 26;

echo "<h1>{$user->name} {$user->surName} tem {$user->age} anos</h1>";

/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);

$user->setName("Matheus");
$user->setSurName("Paula");
$user->setAge(26);
if(!$user->setMail("imatheuspaula@gmail.com")) echo "<p class='trigger error'>E-Mail invalido</p>";

var_dump($user);
