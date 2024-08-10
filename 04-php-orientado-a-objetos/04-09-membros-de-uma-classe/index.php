<?php

use Source\Members\Config;
use Source\Members\Trigger;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

$config = new Config();
var_dump($config::COMPANY);

$reflection = new ReflectionClass($config);

var_dump($reflection->getConstants());

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);
/** PHP 8.3 NAO FUNCIONOU!! **/

Config::$nome = "Matheus";
Config::$idade = 26;

echo Config::getConfig();

var_dump($reflection->getProperties(), $reflection->getDefaultProperties());

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

/** TAMBEM NAO FUNCIONA
 * SÓ FUNCIONOU A LEITURA DOS VALORES QUE FORAM DECLARADOS DIRETO NA CLASSE DIRETO NA
 * VARIAVEL ESTATICA. PELO METODO SET NAO FUNCIONOU.
 * */
Config::setConfig("Math", 26);

var_dump($config,$reflection->getMethods(), $reflection->getDefaultProperties());

/*
 * THIS-> REFERENCIA O OBJ
 * SELF:: REFERENCIA A CLASSE
 * ENTAO COISAS STATICAS O USO CORRETO É O SELF.
 */

/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

$trigger = new Trigger();
Trigger::show("test");
Trigger::show("test", Trigger::ACCEPT);
Trigger::show("test", Trigger::ERROR);
Trigger::show("test", Trigger::WARNING);
Trigger::show("test", "success"); // passa sem o sucess pq o in_array trata

echo Trigger::push("test", "success");

var_dump($trigger);
