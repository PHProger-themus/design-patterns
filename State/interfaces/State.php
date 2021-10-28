<?php

namespace state\interfaces;

interface State
{

    public function info() : string;

    public function switchMode() : void;

}