<?php

require_once(dirname(__DIR__) . "/autoload.php");

$password = new \decorator\classes\Password();
echo "My new password: " . $password->execute() . "<br />Let's make it harder!<br />";

$reverser = new \decorator\classes\Reverser($password);
$salter = new \decorator\classes\Salter($reverser);
echo "No one can hack me now: " . $salter->execute();
