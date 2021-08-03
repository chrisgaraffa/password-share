<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/utilities/_verify_environment.php');
require_once(__DIR__ . '/utilities/_is_cli.php');


try {
	$dotenv = Dotenv\Dotenv::createImmutable('../');
	$dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
	die('Make sure your .env file is in the directory above index.php (and not accessible by the webserver).');
}

if (!verify_client()) {
	die('Check your .env file to make sure your configuration is set for the client.');
}

$eol_char = is_cli() ? PHP_EOL : '<br>';

$submissions = file_get_contents('../submissions.txt');
$submissions = explode("\r\n", $submissions);
$submissions = array_reverse($submissions);

/* Reading the submissions reversed to show newest first */
foreach ($submissions as $idx => $line) {
	if (strlen($line) === 0) { continue; }
	list($message, $nonce) = explode(',', $line);
	
	echo "Line $idx: ";
	$kp = sodium_crypto_box_keypair_from_secretkey_and_publickey(
		hex2bin($_ENV['CLIENT_SECRET_KEY']),
		hex2bin($_ENV['SERVER_PUBLIC_KEY'])
	);
	$plaintext = sodium_crypto_box_open(
		hex2bin($message),
		hex2bin($nonce),
		$kp
	);

	if ($plaintext === false) {
		echo "Failed - malformed message or invalid MAC.";
	}

	echo $plaintext . $eol_char;
}
