<?php

require_once(dirname(__DIR__) . "/autoload.php");

$form = [
    'name' => 'Michael',
    'email' => 'michael.st@gmail.com'
];
$required = new \classes\Required();
$isEmail = new \classes\IsEmail();
$length = new \classes\Length(2);

$required->setNext($length);
$name = $required;

$name->handle($form['name']);

$required->setNext($isEmail);
$email = $required;

$email->handle($form['email']);

// Form data processing code