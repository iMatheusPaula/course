<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = ["AC/DC", "Nirvana", "Alter Bridge"];
$assoc = ["band_1" => "AC/DC", "band_2" => "Nirvana", "band_3" => "Alter Bridge"];

// Adicionar no começo
array_unshift($index, "Test 1", "Test 2");
$assoc= ["band_4" => "Molchat Domaa", "band_5" => "Oasis"] + $assoc;

// Adicionar no Final
array_push($index, "Test Final 1", "2");
$assoc = $assoc + ["band_10" => "test final"];

// Remove o primeiro
array_shift($index);
array_shift($assoc);

// Remove o ultimo
array_pop($index);
array_pop($assoc);

array_unshift($index, "");
$assoc= ["band_11" => ""] + $assoc;

// Filtro
$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump([$index, $assoc]);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

// Reverse
$index = array_reverse($index);
$assoc = array_reverse($assoc);

// Ordem Alfabetica
asort($index);
asort($assoc);

//Por Indice
ksort($index);
krsort($index);

sort($index);
rsort($index);


var_dump([$index, $assoc]);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

//Detach Keys and Values
var_dump([array_keys($assoc), array_values($assoc)]);

//Search
var_dump(in_array("AC/DC", $assoc));

//Convert to string
$arrToString = implode(", ", $assoc);
echo $arrToString;

$stringToArr = explode(", ", $arrToString);
echo '<br>';
print_r($stringToArr);

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);


$profile = ["name" => "Matheus", "email" => "imatheuspaula@gmail.com"];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <a href="mailto:{{email}}" title="Enviar e-mail para {{email}}">{{email}}</a>  
    </article>
TPL;

$replaces = "{{" . implode("}}&{{", array_keys($profile)). "}}";

echo str_replace(explode("&", $replaces), array_values($profile), $template);


