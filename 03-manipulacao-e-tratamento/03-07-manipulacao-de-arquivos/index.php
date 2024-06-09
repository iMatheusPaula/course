<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/arquivo.txt";
if(file_exists($file) && is_file($file)) echo "<p>Já existe</p>";
else echo "<p>Não existe</p>";

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01". PHP_EOL);
    fwrite($fileOpen, "Linha 02". PHP_EOL);
    fwrite($fileOpen, "Linha 03". PHP_EOL);
    fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry.". PHP_EOL);
    fclose($fileOpen);
}
else {
    var_dump(
        file($file),
        pathinfo($file),
        file($file)[3]
    );
}

$open = fopen($file, "r");
while (!feof($open)) {
    echo "<p>" . fgets($open) . "</p>";
}
fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste.txt";
if(file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents); // SO TRABALHA COM O ARQUIVO JA CRIADO
} else {
    $data = "<article><h1>Matheus</h1><p>@imatheuspaula<br>imatheuspaula@gmail.com</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}
// DELETE FILES (SEMPRE FAZER A VERIFICAÇÃO)
//unlink($getContents);
//unlink($file);

if(file_exists(__DIR__ . "/test3.txt") && is_file(__DIR__ . "/test3.txt")) {
    unlink(__DIR__ . "/test3.txt");
}
