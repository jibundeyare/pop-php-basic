<?php

// activation du système d'autoloading de Composer
require __DIR__.'/../vendor/autoload.php';

// instanciation du chargeur de templates
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');

// instanciation du moteur de template
// activation du mode debug et du mode de variables strictes
$twig = new Twig_Environment($loader, [
    'debug' => true,
    'strict_variables' => true,
]);

// chargement de l'extension Twig_Extension_Debug
$twig->addExtension(new Twig_Extension_Debug());

// initialisation des données
$greeting = 'Hello MVC!';
$title = 'Mon titre';

// affichage du rendu d'un template
echo $twig->render('hello.html.twig', [
    // transmission de données au template
    'greeting' => $greeting,
    'title' => $title,
]);
