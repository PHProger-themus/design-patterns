<?php

namespace abstract_factory\interfaces;

interface TypeShuffler
{

    public function shuffle($data) : static;

    public function getInfo() : string;

}