<?php

namespace template_method\classes;

abstract class Searcher
{

    public function search(string $string, $haystack)
    {
        $haystack = $this->normalizeHaystack($haystack);
        $haystack_array = $this->splitHaystack($haystack);
        $this->displayInfo();
        return $this->searchNeedle($string, $haystack_array);
    }

    abstract protected function normalizeHaystack($haystack);

    protected function splitHaystack($haystack) : array
    {
        return $haystack;
    }

    protected function displayInfo() {} // Hook

    protected function searchNeedle(string $string, array $haystack_array)
    {
        return array_search(strtolower($string), $haystack_array);
    }

}