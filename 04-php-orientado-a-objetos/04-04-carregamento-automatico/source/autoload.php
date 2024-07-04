<?php
spl_autoload_register(function ($class){
    $namespace = 'Source\\';
    $baseDir = __DIR__ . "/";
    $len = strlen($namespace);
    var_dump($class);
    /*
     * strncmp = Combinação binaria, verifica se tem o $namespace em $class nos primeiros caracteres definido por $len
     * */
    if(strncmp($namespace, $class, $len) !== 0) return;
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    if(file_exists($file)) require_once($file);
});
