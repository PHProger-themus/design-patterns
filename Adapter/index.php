<?php

require_once(dirname(__DIR__) . "/autoload.php");

function getStatusDecoding(\interfaces\Service $service, string $status) {
    return $service->run($status);
}

// This works fine

$status = 'OK';
$service = new \classes\ProcessStatus();
echo getStatusDecoding($service, $status);

// This won't work

$TP_service = new \classes\ThirdPartyStatusHandler();
//echo getStatusDecoding($service, $status);

// But this solves the problem

$service = new \classes\ThirdPartyHandlerAdapter($TP_service);
echo getStatusDecoding($service, $status);