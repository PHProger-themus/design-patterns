<?php

namespace template_method\classes;

class StringSearcher extends Searcher
{

    protected function normalizeHaystack($haystack)
    {
        return strtolower($haystack);
    }

    protected function splitHaystack($haystack): array
    {
        return explode(' ', $haystack);
    }

}