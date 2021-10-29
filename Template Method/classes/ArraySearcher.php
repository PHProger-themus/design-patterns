<?php

namespace template_method\classes;

class ArraySearcher extends Searcher
{

    protected function normalizeHaystack($haystack)
    {
        foreach ($haystack as &$value) {
            $value = strtolower($value);
        }
        return $haystack;
    }

    protected function displayInfo()
    {
        echo "Trying to search in array...<br />";
    }

}