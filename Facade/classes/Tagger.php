<?php

namespace classes;

class Tagger
{

    private const H1_TAG_WIDTH = 4;

    public function __construct(
        private string $page
    ){}

    public function getH1Content()
    {
        if (preg_match("~<h1[^<>]*>(.+)</h1>~", $this->page, $tag)) {
            return $tag[1];
        }
        return false;
    }

}