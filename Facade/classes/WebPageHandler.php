<?php

namespace classes;

class WebPageHandler
{

    private const CLOSE_BODY_TAG_WIDTH = 7;

    public function get(string $url) : string {
        $page = file_get_contents($url);
        $body_open_tag = strpos($page, '<body');
        $body_close_tag = strpos($page, '</body>');
        return substr($page, $body_open_tag, ($body_close_tag - $body_open_tag) + self::CLOSE_BODY_TAG_WIDTH);
    }

}