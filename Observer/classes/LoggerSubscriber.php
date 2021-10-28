<?php

namespace observer\classes;

use factory_method\interfaces\ServiceInterface;
use observer\interfaces\Subscriber;

class LoggerSubscriber implements Subscriber
{

    private ServiceInterface $logger;

    public function __construct(string $type = 'file') // Let's use Factory Method here also
    {
        $class = '\\factory_method\\classes\\Init' . ucfirst($type) . 'Logger';
        $this->logger = (new $class())->init('log');
    }

    public function update(string $event, string $data): void
    {
        $log_str = "Event '$event', with data: $data";
        echo "Logging data... $log_str <br />";
        $this->logger->log($log_str);
    }

}