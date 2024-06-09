<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

//CONST
const DATE_BR = "d/m/Y H:i:s";

// CLASS
$dateNew = new DateTime();
$birth = new DateTime("1998-05-26");

//STATIC MODE
$dateStatic = DateTime::createFromFormat(DATE_BR, "26/05/2000 12:00:00");

var_dump(
    $dateNew,
    get_class_methods($dateNew),
    $birth,
    $dateStatic,
    $dateNew->format(DATE_BR),
    $dateNew->format("d")
);

echo "<p>Hoje e dia {$dateNew->format('d')} do mes {$dateNew->format('m')}</p>";

$newTimeZone = new DateTimeZone('Pacific/Auckland');
$newDateTime = new DateTime("now", $newTimeZone);

var_dump($newTimeZone,$newDateTime);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M"); // PERIODO DE 10 ANOS 2 MESES E TEMPO DE 10 MINUTOS
$dateTime = new DateTime("now");
//$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump($dateInterval,$dateTime);

// BIRTH
//$birth = new DateTime(date("Y"). "-05-26");
$birth = new DateTime("2025-05-26");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);

$date = "Falta ".$dateNow->diff($birth)->d." dias ".$diff->m." meses e ".$diff->y." anos pro meu aniversario";
var_dump($birth,$diff, $date);

if($diff->invert) echo "<p> Seu aniversario foi a {$diff->days} dias. ";
else echo "<p>Faltam {$diff->days} dias para seu aniversário.";

$dateResources = new DateTime("now");

var_dump(
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("30 days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("60 days"))->format(DATE_BR),
);
/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2025-01-01");

$period = new DatePeriod($start, $interval, $end);

var_dump(
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR),
    $period,
    get_class_methods($period)
);

// EXEMPLO TEMPO DE ASSINATURA

echo "<h1>Sua assinatura:</h1>";
foreach ($period as $date) {
    echo "<p>Proximo vencimento em: {$date->format(DATE_BR)}</p>";
}
