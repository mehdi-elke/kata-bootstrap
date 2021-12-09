
This repository is used to learn PHP and its ecosystem.

Currently the following items are included: 
- unit tests,
- dependencies management.

# Prerequiste:
You need some IDE or text editor (phpstorm, atom, vscode or a simple notepad) and [php](https://www.php.net/manual/fr/install.php)  installed on your workstation.


# Dependency management
## composer
[Composer](https://getcomposer.org/download/) is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

Briefly, declare dependencies on __composer.json__ and install them with 
```shell
composer install
```

### Few useful commands
```
composer dump-autoload
```

the dump-autoload command which won't download anything new, but looks for all of the classes it needs to include again. It just regenerates the list of all classes that need to be included in the project 


# Unit test
## phpunit
Add phpunit on composer.json and install dependency.

execute all unit tests:
```
 ./vendor/bin/phpunit tests
```
execute one test class:
```
 ./vendor/bin/phpunit  tests/FizzBuzzTest.php
 ```

 # BDD
 ## Behat
 [**Behat**](https://docs.behat.org/en/latest/) is an opensource **Behavior-Driven Development** framework for PHP.

## behat/mink
[**behat/mink**](https://mink.behat.org/en/latest/) For web testing.


## selenium: 
need to install chrome web driver according your OS