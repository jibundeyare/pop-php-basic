<?php
// public/form.php
require __DIR__.'/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');

// activer le mode debug et le mode de variables strictes
$twig = new Twig_Environment($loader, [
    'debug' => true,
    'strict_variables' => true,
]);

// charger l'extension Twig_Extension_Debug
$twig->addExtension(new Twig_Extension_Debug());

dump($_GET);

$title = 'Multiplication';

$numberA = '';
$numberB = '';
$result = '';

if ($_GET) {
    $numberA = $_GET['number_a'];
    $numberB = $_GET['number_b'];
    $result = $numberA * $numberB;
}

echo $twig->render('form.html.twig', [
    'title' => $title,
    'numberA' => $numberA,
    'numberB' => $numberB,
    'result' => $result,
]);
