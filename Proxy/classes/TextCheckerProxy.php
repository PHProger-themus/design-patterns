<?php

namespace proxy\classes;

use proxy\interfaces\CheckerInterface;

class TextCheckerProxy extends TextChecker implements CheckerInterface
{

    private array $word_cache = [];

    public function checkWord(string $word): string
    {
        if (!isset($this->word_cache[$word])) {
            $this->word_cache[$word] = parent::checkWord($word);
        } else {
            echo "FROM CACHE: "; // Just for clarity, that the data was retrieved from the cache
        }
        return $this->word_cache[$word];
    }

}