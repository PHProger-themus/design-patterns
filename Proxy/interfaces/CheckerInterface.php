<?php

namespace interfaces;

interface CheckerInterface
{

    public function checkText(string $text) : void;

    public function checkWord(string $word) : string;

}