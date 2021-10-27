<?php

namespace adapter\interfaces;

interface Service
{

    public function run(string $status) : string;

}