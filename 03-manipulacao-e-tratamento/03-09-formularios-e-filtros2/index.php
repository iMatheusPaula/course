<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new StdClass();
$form->birthday = "1998-05-26";
$form->method = "GET";

include __DIR__ . "/form.php";

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

$now = new DateTime();
$birthday = new DateTime($form->birthday);

$now->format('Y-m-d');

var_dump(
    $now->diff($birthday)->y,
    $birthday
);





