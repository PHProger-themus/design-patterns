<?php

require_once(dirname(__DIR__) . "/autoload.php");

$form = [
    'name' => 'Michael',
    'email' => 'michael.st@gmail.com'
];
$required = new \chain_of_responsibility\classes\Required();
$isEmail = new \chain_of_responsibility\classes\IsEmail();
$length = new \chain_of_responsibility\classes\Length(2);

$required->setNext($length);
$name = $required;

$name->handle($form['name']);

$required->setNext($isEmail);
$email = $required;

$email->handle($form['email']);

// Form data processing code