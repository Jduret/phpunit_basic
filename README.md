# phpunit_basic
Basic skeleton to make PHPUnit works

## Prerequisites
- [<img src="https://camo.githubusercontent.com/fe973e9a7d71c297d5473213f0517ec825568534/687474703a2f2f676574636f6d706f7365722e6f72672f696d672f6c6f676f2d636f6d706f7365722d7472616e73706172656e742e706e67" width="50">](https://getcomposer.org/)
- [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://php.net/)

## Installation
```bash
$ git clone https://github.com/Jduret/phpunit_basic.git

$ cd phpunit_basic && composer install
```

## Run
```bash
/location/of/phpunit_basic $ vendor/bin/phpunit --configuration="tests/phpunit.xml" --include-path="/location/of/phpunit_basic/tests/"
```
