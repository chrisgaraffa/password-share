<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/_is_cli.php');

use \Bramus\Ansi\Ansi;
use \Bramus\Ansi\Writers\StreamWriter;
use \Bramus\Ansi\ControlSequences\EscapeSequences\Enums\SGR;

$ansi = new Ansi(new StreamWriter('php://stdout'));

if (!is_cli()) { die('Must be run from the CLI.'); }

list($server_box_secretkey, $server_box_publickey, $server_sign_secretkey, $server_sign_publickey) = create_pairs();
list($client_box_secretkey, $client_box_publickey, $client_sign_secretkey, $client_sign_publickey) = create_pairs();

$ansi->bold()->text('Server Secret Key: ')->nostyle()->text($server_box_secretkey)->lf();
$ansi->bold()->text('Server Public Key: ')->nostyle()->text($server_box_publickey)->lf();
$ansi->bold()->text('Client Secret Key: ')->nostyle()->text($client_box_secretkey)->lf();
$ansi->bold()->text('Client Public Key: ')->nostyle()->text($client_box_publickey)->lf();

$ansi->bold()->color([SGR::COLOR_FG_RED, SGR::COLOR_BG_WHITE])->text('DO NOT LOSE THESE KEYS.     DO NOT SHARE PRIVATE KEYS.')->lf();


function create_pairs() {
	$box_kp = sodium_crypto_box_keypair();
	$sign_kp = sodium_crypto_sign_keypair();
	
	$box_secretkey = sodium_crypto_box_secretkey($box_kp);
	$box_publickey = sodium_crypto_box_publickey($box_kp);

	$sign_secretkey = sodium_crypto_sign_secretkey($sign_kp);
	$sign_publickey = sodium_crypto_sign_publickey($sign_kp);

	return [bin2hex($box_secretkey), bin2hex($box_publickey), bin2hex($sign_secretkey), bin2hex($sign_publickey)];
}
