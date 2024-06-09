<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Matheus";
$userLastName = "Paula";
$userAge = "25";

// variavel variavel
$name = "Matheus";
$$name = "Paula";

echo "{$name} {$Matheus}";

$calcA = 10;
$calcB = 20;

$calcB = &$calcA; // Referenciar a variavel, as duas mantem o mesmo valor!
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$bestAge = ($userAge > 40 );
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

if($a || $b || $c || $d || $e){
    var_dump(true);
}
else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article>
            <h1>Um Call User Function!</h1>
        </article>
";

$codeClear = call_user_func("strip_tags", $code);

var_dump($code, $codeClear);

$codeMore = function ($code){
    var_dump($code);
};

$codeMore("testando");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "textos";

$array = [$string];

$object = new StdClass();

$object->hello = $string;

$null = null;

$int = 12123;

$float = 123.0;

var_dump([
    "string" => $string,
    "array" => $array,
    "object" => $object->hello,
    "null" => $null,
    "int" => $int,
    "float" => $float
]);
