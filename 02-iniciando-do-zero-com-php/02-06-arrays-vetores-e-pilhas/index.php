<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = [0, 1, 2, 3];

var_dump($arrA);

$arrayIndex = [
    "Four Tet",
    "Skrillex",
    "Fred Again"
];

$arrayIndex[] = "San Holo";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "sound-designer" => "Skrillex",
    "drums" => "Four Tet",
    "melodies" => "Fred Again",
];

$arrayAssoc["mixing"] = "Luca";
$arrayAssoc["selo"] = "OWSLA";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$fourTet = ["Four Tet", "Drums"];
$fredAgain = [
    "name" => "Fred Again",
    "function" => "Melodies"
];

$peoples = [
    $fourTet,
    $fredAgain
];

var_dump($peoples);

var_dump([
    "Four Tet" => $fourTet,
    "Fred Again" => $fredAgain
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$newOwsla = [
    "sound-designer" => "Skrillex",
    "drums" => "Four Tet",
    "melodies" => "Fred Again"
];

$oldOwsla = [
    "sound-designer" => "Getter",
    "drums" => "Dillon Francis",
    "melodies" => "Zedd"
];

$owsla = [
    "oldOwsla" => $oldOwsla,
    "newOwsla" => $newOwsla
];

var_dump($owsla);

echo "New Owsla Drums é do {$newOwsla["drums"]}";
echo "<br>";
echo "Old Owsla Drums é do {$owsla["oldOwsla"]["drums"]}";

foreach ($oldOwsla as $item){
    echo "<p>$item</p>";
}

foreach ($newOwsla as $key => $value){
    echo "<p>{$value} é {$key} da owsla</p>";
}

foreach ($owsla as $item){
    echo "<pre>", print_r($item), "</pre>";
}

foreach ($owsla as $item){
    $art = "<article>
                <p>%s</p>
                <p>%s</p>
                <p>%s</p>
            </article>";

    vprintf($art, $item);
}
