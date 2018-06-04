# PHP
PHP binding for the UserAgent.App binding

## Install
The package is PSR-4 compliant, either use a package manager or a standards compliant autoloader (like the one included in the examples directory).

Via composer:
`composer require useragentapp/api`


## Requirements
 + API KEY
 + PHP 5.3+
 + CURL

# Notes
We have chosen to not make use of exceptions for error communication due to their impact on speed of code execution and relative difficulty for beginners.
