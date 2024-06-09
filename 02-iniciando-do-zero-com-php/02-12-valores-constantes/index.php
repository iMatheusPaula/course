<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);


const COURSE = "Full Stack PHP";
const AUTHOR = "Birao";

// DEFINE RUNTIME (ENQUANTO RODA JA ENTERPRETA O CODIGO)
// CONST ESTA EM COMPILE TIME, OCORRE ANTES DA EXECUCAO, ENTAO NAO FUNCIONA DENTRO DAS CONDICOES


$formation = true;

if($formation){
    define("FORMATION", "if");
    //const FORMATION_TWO = "Curso de {COURSE} de {AUTHOR}"; // DA ERRO PQ É 
} else {
    define("FORMATION_TWO", "else");
}

echo "<p>".COURSE."</p>";
echo "<p>", AUTHOR, "</p>";

class Login{
    const USER = "admin";
    const PASSWORD = "123456";

    //define("ACESS", "2");
    // EM CLASSE NAO FUNCIONA O DEFINE

}

echo Login::USER, PHP_EOL, Login::PASSWORD;

var_dump(get_defined_constants(true)["user"]);



/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

function fullStackPHP(){
    return __FUNCTION__;
}

var_dump(fullStackPHP());


trait myTrait{
    public $traitName = __TRAIT__;
}

class FsPHP{
    use myTrait;
    public $className = __CLASS__;
}

var_dump(
    new FsPHP() 
);

require __DIR__. "/MyClass.php";

var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);
