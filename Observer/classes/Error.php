<?php

namespace observer\classes;

class Error
{

    public function __construct(
        private Publisher $publisher
    ) {}

    // Some error handling methods

    public function code(int $code)
    {
        echo "There's an error! Let's use PageStatusSubscriber, he will help us!<br />";
        $this->publisher->notify('error', $code);
    }

}