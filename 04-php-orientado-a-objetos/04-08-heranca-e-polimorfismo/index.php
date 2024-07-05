<?php

use Source\Inheritance\Address;
use Source\Inheritance\Event\Event;
use Source\Inheritance\Event\EventLive;
use Source\Inheritance\Event\EventOnline;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new Event(
    "Beisificando Fest",
    new DateTime("2025-05-26 16:00"),
    179,
    2,
);

$event->register("Matheus", "matheus@gmail.com");
$event->register("Juzinha", "juzinha@gmail.com");
$event->register("Oswaldo", "oswaldo@gmail.com");

var_dump($event);

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$eventLive = new EventLive(
    "Live Beisificando Fest",
    new DateTime("2020-05-26 22:00"),
    99,
    100,
    new Address("Rua Dois", 123)
);

var_dump($eventLive);


/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$eventOn = new EventOnline(
    "Online Event",
    new DateTime("2025-05-26 16:00"),
    179,
    "http://live.com/live"
);



$eventOn->register("Matheus", "matheus@gmail.com");
$eventOn->register("Juzinha", "juzinha@gmail.com");

var_dump($eventOn);