<?php

require_once './vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$twig_loader = new FilesystemLoader('./templates');
$twig = new Environment($twig_loader, [
	'cache' => './twig_cache'
]);

$main_template = $twig->load('main.twig');

echo $main_template->render();
