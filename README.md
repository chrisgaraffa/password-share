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
* When a password is submitted, `submissions.txt` is stored in the directory above your `index.php` file (and should not be readable by the web server).
* To read `submissions.txt` copy it to a local machine and run `php read.php` or `php -S 0.0.0.0:8000` and go to http://0.0.0.0:8000/read.php in a browser.

## Security
* Your web server process must be able to read a file and write a file in the directory above the main directory (where `index.php` lives). This is to read `.env` and write `submissions.txt`. The server should not serve files from this directory, though.
* Don't store both client & server public & private keys in one place after you've generated them. Especially not on the server. Someone who got a hold of your `.env` and `submissions.txt` files could then decrypt them.

## TODO: 
* Clean up redundant code, for example loading dotenv.
* Safety check that we don't have client and server ENV vars in the same environment (with an override, maybe)
* Show a warning on non-HTTPS connections?
* "Thank you" page user sees after submitting the form - requires a basic twig template.


## Thanks
Especially to [@ParagonIE](https://twitter.com/paragonie) for their support and work on libsodium and their documentation! (Don't blame them for any issues in my code.)
