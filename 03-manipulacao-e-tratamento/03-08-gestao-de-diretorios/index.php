<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__ . "/uploads";

if(!file_exists($folder) && !is_dir($folder)) mkdir($folder, 0755);
else var_dump(scandir($folder));

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

$file = __DIR__ . "/file.txt";
if(!file_exists($file) && !is_dir($file) && !is_file($file)) {
    $open = fopen($file, "w");
    fclose($open);
} else {
//    var_dump(filemtime($file), filemtime(__DIR__ . "/uploads/file.txt"));
//    copy($file, $folder . "/" . basename($file));
//    rename(
//        __DIR__ . "/uploads/file.txt",
//        __DIR__ . "/uploads/".time(). ".".pathinfo($file, PATHINFO_EXTENSION)
//    );

    rename($file, __DIR__ . "/uploads/".time(). ".".pathinfo($file, PATHINFO_EXTENSION));
}

var_dump(pathinfo($file), scandir($folder), scandir(__DIR__));

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

//mkdir("remove", 0755);
$dir = __DIR__ . "/remove";

//rmdir($dir);

$dirFiles = array_diff(scandir($dir), ['.', '..']);
$count = count($dirFiles);

if($count > 0) {
    foreach(scandir($dir) as $file) {
        $file = __DIR__ . "/remove/{$file}";
        if(file_exists($file) && is_file($file)) {
            unlink($file);
        }
    }
    rmdir($dir);
}
else {
    rmdir($dir);
}
var_dump($dirFiles, $count);




