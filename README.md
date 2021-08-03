# password-share

## Intro
password-share is a system where a person can send a password to another via a form. I made it after being painfully frustrated about clients texting/emailing me their passwords for services when I've told them not to.

## Should I trust it?
Probably not right now. I'm not a crypto expert, and this is my first time using libsodium.

## I've got feedback!
Open an issue or send a message to chris@chrisgaraffa.com - thank you!

## Requirements
PHP versions that include sodium_* functions: 7.2.0+ including PHP 8

## Usage
* Generate your public/private key pairs by running `php utilities/create_keys.php` at the command line.
* On the server, create a .env file **in the directory above index.php**. See `.env.example` as a template.
* On the client, create a .env file **in the directory above index.php**. See `.env.example` as a template.

## TODO
* Encryption & storage of message
* Decryption section
