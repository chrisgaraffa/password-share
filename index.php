<?php

require_once './vendor/autoload.php';
require_once './utilities/_verify_environment.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

/* Use dotenv to load the .env file from the directory above this one */
try {
	$dotenv = Dotenv\Dotenv::createImmutable('../');
	$dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
	die('Make sure your .env file is in the directory above index.php (and not accessible by the webserver).');
}

if (!verify_server()) {
	die('Check your .env file to make sure your configuration is set for the server.');
}

#region twig init
$twig_loader = new FilesystemLoader('./templates');
$twig = new Environment($twig_loader, [
	'cache' => './twig_cache'
]);
$main_template = $twig->load('main.twig');
#endregion


echo $main_template->render();
