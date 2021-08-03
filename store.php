<?php

require_once './vendor/autoload.php';
require_once './utilities/_verify_environment.php';

try {
	$dotenv = Dotenv\Dotenv::createImmutable('../');
	$dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
	die('Make sure your .env file is in the directory above index.php (and not accessible by the webserver).');
}

if (!verify_server()) {
	die('Check your .env file to make sure your configuration is set for the server.');
}

$input = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


$message = date("Y-m-d H:i:s") . ' -- ' . $input['sender_name'] . ' -- ' . $input['account_service'] . ' -- ' . $input['account_username'] . ' -- ' . $input['account_password'];

$kp = sodium_crypto_box_keypair_from_secretkey_and_publickey(
	hex2bin($_ENV['SERVER_SECRET_KEY']),
	hex2bin($_ENV['CLIENT_PUBLIC_KEY'])
);

$nonce = random_bytes(SODIUM_CRYPTO_BOX_NONCEBYTES);
$cipher = sodium_crypto_box($message, $nonce, $kp);

$fh = fopen('../submissions.txt', 'a');
fwrite($fh, bin2hex($cipher) . ',' . bin2hex($nonce) . "\r\n");
fclose($fh);
