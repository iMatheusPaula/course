<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "João João";

var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, "3"),
    "mb_substr" => mb_substr($string, "3"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string),
]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

var_dump([
    "mb_strtoupper" => mb_strtoupper($string),
    "mb_strtolower" => mb_strtolower($string),
    "mb_convert_case UPPER" => mb_convert_case($string, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($string, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($string, MB_CASE_TITLE),
]);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$stringReplace = $string . ", Testando virgulas, again";

var_dump([
    "mb_strlen" => mb_strlen($stringReplace),
    "mb_strpos" => mb_strpos($stringReplace, ", "), #PEGA A PRIMEIRA OCORRENCIA
    "mb_strrpos" => mb_strrpos($stringReplace, ", "), #PEGA A SEGUNDA OCORRENCIA
    "mb_substr" => mb_substr($stringReplace, 9 + 2), #PEGA O PONTEIRO PARA FRENTE
    "mb_substr" => mb_substr($stringReplace, 9 + 2, 8), #PEGA O PONTEIRO PARA FRENTE E CONTA QUNTOS QUER DEIXAR
    "mb_strrpos" => mb_strrpos($stringReplace, ", "), #PEGA A SEGUNDA OCORRENCIA
    "mb_strstr POS" => mb_strstr($stringReplace, ", ", false), #PÓS PONTEIRO
    "mb_strstr PRE" => mb_strstr($stringReplace, ", ", true), #PRÉ PONTEIRO
    "mb_strrchr POS" => mb_strrchr($stringReplace, ", ", false), # PÓS ULTIMO PONTEIRO
    "mb_strrchr PRE" => mb_strrchr($stringReplace, ", ", true), # PRE ULTIMO PONTEIRO
]);

echo "<p>", $stringReplace,"</p>";
echo "<p>", str_replace("João", "Matheus", $stringReplace),"</p>";
echo "<p>", str_replace(['Testando', 'virgulas', 'again'], "again..", $stringReplace),"</p>";
echo "<p>", str_replace(['João', 'Testando'], ['Joseph', 'testing'], $stringReplace),"</p>";

$article = <<<TEST
    <article>
    <h3>event</h3>
    <p>desc</p>
    </article>
TEST;

$articleData = [
    "event" => "Pessoa",
    "desc" => $stringReplace,
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);
/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=test&email=test@domain.com";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object) $parseEndPoint
]);