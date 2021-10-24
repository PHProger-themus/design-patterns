<?php

namespace classes;

class WebPageParser
{

    public function getH1TextUppercased(string $url) : string
    {
        $handler = new WebPageHandler();
        $tagger = new Tagger($handler->get($url));
        return mb_strtoupper($tagger->getH1Content());
    }

}