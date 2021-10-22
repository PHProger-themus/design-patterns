<?php

namespace classes;

use interfaces\Service;

class ThirdPartyHandlerAdapter implements Service
{

    private object $service;

    public function __construct(object $service)
    {
        $this->setService($service);
    }

    public function setService(object $service)
    {
        $this->service = $service;
    }

    public function run(string $status): string
    {
        return (string)$this->service->operate($status);
    }

}