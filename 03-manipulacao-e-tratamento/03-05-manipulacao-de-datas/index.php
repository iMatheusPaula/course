<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C), // date_w3c interage perfeitamente com as DB
    date("d/m/Y H:i:s"),
]);

const DATE_BR = "d/m/Y H:i:s";
const TIME_ZONE = "Pacific/Apia";

date_default_timezone_set(TIME_ZONE);

var_dump([
    date_default_timezone_get(),
    date(DATE_BR)
]);

var_dump(getdate());

echo "<p>Hoje é o dia ", getdate()['yday'] ," de ", getdate()['year'],"</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
    "string to date" => strtotime("now"),
    "time" => time(),
    "strtotime + 10d" => strtotime("+10days"),
]);
echo "<p>date + strtotime </p>";
var_dump([
    "date_br now" => date(DATE_BR),
    "date_br now+10days" => date(DATE_BR ,strtotime("+10days")),
    "date_br now-10days" => date(DATE_BR ,strtotime("-10days")),
    "date_br now+1year" => date(DATE_BR ,strtotime("+1year")),
]);
