<?php

require_once(dirname(__DIR__) . "/autoload.php");

$parser = new \facade\classes\WebPageParser();
echo $parser->getH1TextUppercased('example.com');
