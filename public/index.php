<?php

require __DIR__.'/../vendor/autoload.php';

echo 'Hello world!<br />';

$foo = 123;
dump($foo);

$bar = 3.14;
dump($bar);

$baz = true;
dump($baz);

$lorem = 'lorem ipsum';
dump($lorem);

$values = [123, 3.14, true, 'lorem ipsum'];
dump($values);

if ($foo > 100) {
    echo 'la variable $foo est supérieure à 100<br />';
}

if ('123' !== 123) {
    echo "'123' et 123 sont non identiques<br />";
}

echo 'toto alias \'the dev\'<br />';
echo "toto alias \"the dev\"<br />";

// affiche un backslash
echo "\\";
// affiche un saut de ligne
echo "\n";
// affiche un saut de ligne
echo "
";

// affichage par concaténation
echo "J'ai ".$foo." foos<br />";
// affichage par interpolation (il faut obligatoirement des doubles quotes)
echo "J'ai $foo foos<br />";
// affichage par interpolation mais en spécifiant où démarre la variable et quand elle s'arrête
echo "J'ai {$foo}foos<br />";

// échappement du caractère $ pour l'afficher (et non signaler une variable)
echo "J'ai \$foo<br />";
// l'interpolation ne fonctionne pas avec des simples quotes
echo 'J\'ai $foo<br />';

for ($i = 0; $i < count($values); $i++) {
    echo $values[$i].'<br />';
}

foreach ($values as $value) {
    echo $value.'<br />';
}

foreach ($values as $key => $value) {
    echo $key.': '.$value.'<br />';
}

$valuesAndKeys = [
    'user' => 'toto',
    'email' => 'toto@pop.eu.com',
    'newsletter' => false,
];

if ($valuesAndKeys['newsletter']) {
    echo 'true<br />';
} else {
    echo 'false<br />';
}

echo $valuesAndKeys['email'].'<br />';
$valuesAndKeys['newsletter'] = true;

// exemple d'utilisation de l'opérateur ternaire
// équivalent du code des lignes 51 à 55
echo $valuesAndKeys['newsletter'] ? 'true<br />' : 'false<br />';

$valuesAndNumericKeys = [
    1 => 123,
    2 => 3.14,
    3 => 'foo',
    4 => true,
];

function mult($a, $b)
{
    return $a * $b;
}

echo mult(2, 3).'<br />';

function add($a, $b)
{
    return $a + $b;
}

echo add(2, 3).'<br />';

$userChoice = random_int(1, 5);

switch ($userChoice) {
    case 1:
        echo 'userChoice est 1<br />';
        break;
    case 2:
        echo 'userChoice est 2<br />';
        break;
    case 3:
        echo 'userChoice est 3<br />';
        break;
    default:
        echo 'autre cas<br />';
}

// données envoyées avec la méthode HTTP GET
dump($_GET);
