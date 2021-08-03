<?php

function verify_server() {
	return isset($_ENV['SERVER_SECRET_KEY']) && isset($_ENV['CLIENT_PUBLIC_KEY']) && strlen($_ENV['SERVER_SECRET_KEY']) && strlen($_ENV['CLIENT_PUBLIC_KEY']);
}

function verify_client() {
	return isset($_ENV['CLIENT_SECRET_KEY']) && isset($_ENV['SERVER_PUBLIC_KEY']) && strlen($_ENV['CLIENT_SECRET_KEY']) && strlen($_ENV['SERVER_PUBLIC_KEY']);
}
