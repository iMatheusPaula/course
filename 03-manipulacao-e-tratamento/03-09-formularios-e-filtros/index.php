<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new StdClass();
$form->name = "test";
$form->mail = "test@test.com";
//$form->method = "POST";

var_dump($_REQUEST);
include __DIR__ . "/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);
$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($postArray){
    if(in_array("", $postArray)) echo "<p class='trigger warning'>Preencha todos os campos!</p>";
    elseif(!filter_var($postArray["mail"], FILTER_VALIDATE_EMAIL)) echo "<p class='trigger warning'>E-mail inválido!</p>";
    else {
        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $saveStrip);
        var_dump($save);
        echo "<p class='trigger accept'>Cadastro realizado com sucesso!</p>";
    }
}
var_dump($post, $postArray);

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

$form->method = "GET";
var_dump($_GET);

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

//VALIDATE RETORNA UM BOOLEAN,
//O SANITIZE TENTA SANITIZAR O CAMPO PRA ENTRAR NAS REGRAS.
var_dump(
    filter_list(),
    filter_id('validate_email'),
);

$filtersForm = [
    "name"  => FILTER_DEFAULT,
    "mail" => FILTER_VALIDATE_EMAIL,
];

$getForm = filter_input_array(INPUT_GET, $filtersForm);

var_dump($getForm);

//VALIDACAO DE DADOS QUE NAO SEJA INPUT, (VARIAVEIS)
$mail = "mail@test.com";
var_dump(
    filter_var($mail, FILTER_VALIDATE_EMAIL),
    filter_var_array($getForm, $filtersForm),
);
