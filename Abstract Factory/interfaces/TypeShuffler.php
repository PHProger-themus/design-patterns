<?php

namespace interfaces;

interface TypeShuffler
{

    public function shuffle($data) : static;

    public function getInfo() : string;

}