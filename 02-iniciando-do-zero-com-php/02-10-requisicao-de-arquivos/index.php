<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

include __DIR__. "/header.php";

$profile = new StdClass();
$profile->name = "Matheus";
$profile->company = "sweetbiru";
$profile->email = "contato@sweetbiru.com";

include __DIR__. "/profile.php";

$profile = new StdClass();
$profile->name = "Juliany";
$profile->company = "sweetbiru";
$profile->email = "contato@sweetbiru.com";

include_once __DIR__. "/profile.php"; // NAO VAI INCLUIR PQ JA FOI INCLUIDO (ONCE)



/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

require __DIR__. "/config.php";

echo "<p>" . COURSE . "</p>";

// require __DIR__. "/config.php"; // DA ERRO NA CONST PQ ELA JÁ FOI DEFINIDA

require_once __DIR__. "/config.php";

if(require_once __DIR__. "/config.php"){
    var_dump("arquivo ja incluso");
}
