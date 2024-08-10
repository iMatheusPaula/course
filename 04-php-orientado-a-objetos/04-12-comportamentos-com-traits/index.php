<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new \Source\Traits\User("Matheus", "Paula", "math@gmail.com");
$address = new \Source\Traits\Address("Rua 3 de Março", "33", "Ap. 3");

$register = new \Source\Traits\Register($user, $address);

var_dump(
    $register,
    $register->getAddress()->getStreet(),
    $register->getUser()->getFirstName()
);

$cart = new \Source\Traits\Cart();
$cart->add(1, "Test", 10, 12.99);
$cart->add(2, "Testandoo", 1, 199.90);
$cart->remove(1, 1);
$cart->checkout($user, $address);
var_dump($cart);
