<?php

namespace classes;

use interfaces\CheckerInterface;

class TextChecker implements CheckerInterface
{

    public function checkText(string $text): void
    {
        $words = explode(' ', $text);
        foreach ($words as $word) {
            echo $this->checkWord($word);
        }
    }

    public function checkWord(string $word): string
    {
        $length = strlen($word);
        $first_letter = ucfirst($word[0]);
        return "Analyzing \"$word\". Word length: $length symbols. First letter is '$first_letter' <br />";
    }

}