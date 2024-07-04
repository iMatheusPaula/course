<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/Web/Template.php";
require __DIR__ . "/classes/App/Template.php";

$webTemplate = new Web\Template;
$appTemplate = new App\Template;

var_dump($webTemplate, $appTemplate);

// import with 'use'
use Web\Template;
use App\Template as AppTemplate;

$useWebTemplate = new Template;
$useAppTemplate = new AppTemplate;

var_dump($useWebTemplate, $useAppTemplate);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$userQualifield = new \Source\Qualifield\User;

var_dump($userQualifield, get_class_methods($userQualifield));

echo "<p>O email de {$userQualifield->getName()} é {$userQualifield->getMail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$matheus = $userQualifield->setUser("Matheus", "Paula", 26, "matheus@test.co");
if(!$matheus) echo "<p class='trigger error'>{$userQualifield->getError()}</p>";

$juzinha = new \Source\Qualifield\User;

if(!$juzinha->setUser("Juzinha", "Dias", 24, "juzinha")) {
    echo "<p class='trigger error'>{$juzinha->getError()}</p>";
}
//if($juzinha->getError()) echo "<p class='trigger error'>{$juzinha->getError()}</p>";
