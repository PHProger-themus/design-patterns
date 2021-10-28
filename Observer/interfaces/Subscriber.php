<?php

namespace observer\interfaces;

interface Subscriber
{

    public function update(string $event, string $data) : void;

}