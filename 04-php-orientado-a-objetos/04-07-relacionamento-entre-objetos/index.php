<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company1 = new \Source\Related\Company();
//sem associação
$company1->bootCompany("swt Devs", "Rua Dois");
var_dump($company1);
//com associação
$company1->boot("swt Devs", new \Source\Related\Address("Rua dois", 124, "Casa"));
var_dump($company1);

echo "<p>A {$company1->getCompany()} está na rua {$company1->getAddress()->getStreet()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$swtMu = new \Source\Related\Product("sweetWEB Mu", 799);
$swtSound = new \Source\Related\Product("sweetWEB Soundviser", 1099);

$company1->addProduct($swtMu);
$company1->addProduct($swtSound);

var_dump($company1);
/**
 * @var \Source\Related\Product $product
 */
foreach ($company1->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}



/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company1->addTeamMember("DevOps", "Matheus", "Paula");
$company1->addTeamMember("FullStack", "Ju", "Savazzi");

var_dump($company1);

/**
 * @var \Source\Related\User $member
 */
foreach ($company1->getTeam() as $member){
    echo "<p>{$member->getFirstName()} é {$member->getJob()} aqui na {$company1->getCompany()}</p>";
}
