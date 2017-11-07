# try_phpunit

This is a project that developed through [Lynda - PHP: Test-Driven-Development with PHPUnit](https://www.lynda.com/PHPUnit-tutorials/Test-Driven-Development-PHP-PHPUnit/502109-2.html "Test-Driven-Development with PHPUnit") course.

## Requirements

1. PHP7.0 or latest
2. PHP Extensions:
..* DOM
..* JSON
..* PCRE
..* Reflection
..* SPL
..* XMLWriter
3. Composer 1.2.* or latest

## Instalation
    composer install

## Usage
Make sure you are inside the project folder.

### Windows (Command Prompt)
    > vendor\bin\phpunit tests
### Ubuntu (Terminal)
    $ vendor/bin/phpunit tests

## History

## Available Tests

### ReceiptTest
    vendor/bin/phpunit tests --filter testTotal
