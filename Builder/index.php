<?php

require_once(dirname(__DIR__) . "/autoload.php");

$config = [
    'driver' => 'pgsql',
    'host' => 'localhost',
    'username' => 'max_lol1',
    'password' => '******',
    'database' => 'ml_website'
];

$builder_name = "\\builder\\classes\\" . ucfirst($config['driver']) . "ManagerBuilder";
$builder = new $builder_name();
$director = new \builder\classes\Director($builder);

$manager = $director->make($config['username'], $config['password'], $config['database']);
var_dump($manager->getDriverInfo());
