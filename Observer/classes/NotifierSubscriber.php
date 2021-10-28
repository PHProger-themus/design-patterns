<?php

namespace observer\classes;

use observer\interfaces\Subscriber;

class NotifierSubscriber implements Subscriber
{

    public function update(string $event, string $data): void
    {
        echo "New notification: '$event' happened, information: $data <br />";
    }

}