<?php

require_once(dirname(__DIR__) . "/autoload.php");

function getStatusDecoding(\adapter\interfaces\Service $service, string $status) {
    return $service->run($status);
}

// This works fine

$status = 'OK';
$service = new \adapter\classes\ProcessStatus();
echo getStatusDecoding($service, $status);

// This won't work

$TP_service = new \adapter\classes\ThirdPartyStatusHandler();
//echo getStatusDecoding($service, $status);

// But this solves the problem

$service = new \adapter\classes\ThirdPartyHandlerAdapter($TP_service);
echo getStatusDecoding($service, $status);