<?php

require_once(dirname(__DIR__) . "/autoload.php");

$publisher = new \observer\classes\Publisher();

$logger = new \observer\classes\LoggerSubscriber();
$notifier = new \observer\classes\NotifierSubscriber();
$page_status_changer = new \observer\classes\PageStatusSubscriber();

$publisher->subscribe($logger);
$publisher->subscribe($notifier, 'insert');
$publisher->subscribe($notifier, 'delete');
$publisher->subscribe($page_status_changer, 'error');

// Some events...

$publisher->insertData(['Michael', 19, 'New York'], 'users');
$publisher->removeData([2, 5, 10], 'users');

// Let's imagine that user has visited non-existent page:

$error = new \observer\classes\Error($publisher);
$error->code(404);

$publisher->unsubscribe($logger); // Testing unsubscribing
$publisher->removeData([6], 'users');
