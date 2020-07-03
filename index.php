<?php
require_once __DIR__.'/vendor/autoload.php';
require_once "functions.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);

$checks = getChecks();

echo $twig->render(
    'index.html',
    [
        'checks' => $checks
    ]
);
