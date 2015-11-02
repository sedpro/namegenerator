<?php

//spl_autoload_register(function ($class) {
//    return include preg_replace('/\\\\/i', DIRECTORY_SEPARATOR, $class) . '.php';
//});

$count = 100;

$start = microtime(true);

$nameGenerator = new NameGenerator\Generator;

$names = $nameGenerator->get($count);

//$name = $names[0];
foreach ($names as $name) {
echo $name['first'] . ' ' . $name['last'] . ' (' . $name['gender'] . ')' . ' - ' . $name['email'] . PHP_EOL;

}


echo $count . ' names generated in ' . (microtime(true) - $start) . ' sec.' . PHP_EOL;


//10000 names generated in 0.19985818862915 sec.