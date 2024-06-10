<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

//CREATE FOLDER
$folder = __DIR__ . "/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
}

include __DIR__ . "/form.php";


$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
if($_FILES && !empty($_FILES['file']['name'])) uploadHandler();
elseif($getPost) echo "<p class='trigger warning'>Oops!, parece que o arquivo é muito grande.</p>";
elseif($_FILES) echo "<p class='trigger warning'>Selecione um arquivo antes de enviar</p>";

function uploadHandler(): void
{
    $allowedTypes = ["image/jpeg", "image/jpg", "image/png", "application/pdf"];
    $fileUpload = $_FILES['file'];
    $newFileName = time() . mb_strstr($fileUpload['name'], '.');
    if(!in_array($fileUpload['type'], $allowedTypes)){
        echo "<p class='trigger warning'>Oops!, formato do arquivo não permitido.</p>";
    }
    elseif(move_uploaded_file($fileUpload['tmp_name'], __DIR__ . "/uploads/{$newFileName}")) {
        echo "<p class='trigger accept'>Arquivo Enviado com sucesso.</p>";
    }
    else {
        echo "<p class='trigger error'>Oops!, alguma coisa deu errado, tente novamente mais tarde.</p>";
    }
    var_dump($newFileName);
}

//FILESIZE = TAMANHO MAXIMO DE UM ARQUIVO
//POSTSIZE = TAMANHO MAXIMO DA SOMA DE TODOS ARQUVIVOS DE UM FORMULARIO POST
var_dump([
    "filesize" => ini_get('upload_max_filesize'),
    "postsize" => ini_get('post_max_size'),
]);

var_dump(
    filetype(__DIR__ . "/index.php"),
    mime_content_type(__DIR__ . "/index.php") // VALIDACAO CORRETA.. QUE MOSTRA O TIPO DO ARQUIVO
);

var_dump(scandir(__DIR__ . "/uploads"));
