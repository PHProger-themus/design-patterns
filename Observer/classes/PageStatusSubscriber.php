<?php

namespace observer\classes;

use observer\interfaces\Subscriber;

class PageStatusSubscriber implements Subscriber
{

    public function update(string $event, string $data): void
    {
        echo "Setting $data response code... <br />";
        http_response_code($data);
    }

}