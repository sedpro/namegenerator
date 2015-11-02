Random name generator
#####################

This plugin generates random names for testing purposes. If you need to fill a table with random users names, emails etc., this plugin will be helpful.

Installation
------------
For the installation use composer [composer](http://getcomposer.org "composer - package manager").

Add this plugin in your composer.json:
```
    "require": {
        "sedpro/namegenerator": "dev-master",
    },
    "repositories":[
        {
            "type":"git",
            "url":"https://github.com/sedpro/namegenerator"
        }
    ]
```

Post Installation
------------
In your code you can now use `\NameGenerator\Generator`
```php
    $generator = new \NameGenerator\Generator;
    $names = $generator->get(2);
```
You will get array:
```php
array(2) {
  [0] =>
  array(3) {
    'gender' =>
    string(6) "female"
    'first' =>
    string(7) "Beatris"
    'last' =>
    string(7) "Barcomb"
  }
  [1] =>
  array(3) {
    'gender' =>
    string(6) "female"
    'first' =>
    string(5) "Merle"
    'last' =>
    string(12) "Vongsamphanh"
  }
}
```

You can get additional columns(`email`, `birthday`, `phone`):
```php
    $generator = new \NameGenerator\Generator;
    $names = $generator->get(1, ['email', 'birthday', 'phone']);
```
You will get:
```php
array(1) {
  [0] =>
  array(6) {
    'gender' =>
    string(6) "female"
    'first' =>
    string(6) "Leeann"
    'last' =>
    string(5) "Papka"
    'email' =>
    string(27) "dagjucsjxx@dotbsqmmramvx.de"
    'birthday' =>
    string(10) "1943-06-03"
    'phone' =>
    string(14) "8-668-364-1686"
  }
}
```
