<?php

namespace visitor\interfaces;

interface Element
{

    public function accept(Visitor $visitor) : array;

}