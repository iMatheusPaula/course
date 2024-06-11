<?php
//TODA SESSAO É UM ARQUIVO E COM ESSE CMD CONSEGUIMOS SALVAR ONDE QUEREMOS.
session_save_path(__DIR__ . "/session");
session_name("SWTSESSION");
session_start(["cookie_lifetime" => 86400]);

//CREATE USER
$user = ["user" => "user", "password" => "password", "expire" => time()];

//SET COOKIES
setcookie("swtweb", "My cookie", time() + 10);
setcookie("swtcredentials", http_build_query($user), time() + 60 * 60, "/", "localhost");

//FRAMEWORK
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

//setcookie("swtweb", null, time() - 10); // DELETE COOKIE WITH NEGATIVE TIME.
//GET COOKIES WITH FILTERS.
$cookie = filter_input(INPUT_COOKIE,"swtweb",FILTER_SANITIZE_SPECIAL_CHARS);
$cookieCredentials = filter_input(INPUT_COOKIE, "swtcredentials",FILTER_DEFAULT);

if($cookie) var_dump($cookie);
if($cookieCredentials) {
    parse_str($cookieCredentials, $user);
    var_dump($user);
}

/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

// MESMO COM LIFETIME A SESSAO SE ENCERRA CASO FECHE O NAVEGADOR.
// TODA CONFIGURACAO DA SESSAO DEVE SER FEITA ANTES DE INICIAR ELA. (COMO ALTERAR O NOME E PATH).

$_SESSION['login'] = (object)$user;
$_SESSION['userID'] = 12;

//DELETA A SESSAO.
unset($_SESSION['userID']);

//DESTROI TODAS AS SESSOES.
session_destroy();

var_dump($_SESSION, [
    "id" => session_id(),
    "name" => session_name(),
    "status" => session_status(),
    "save_path" => session_save_path(), // QUANDO NAO INFORMAMOS O CAMINHO, ELE SOMENTE CONSULTA
    "cookie" => session_get_cookie_params(),
]);

