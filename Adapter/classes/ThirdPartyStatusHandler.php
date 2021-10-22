<?php

namespace classes;

class ThirdPartyStatusHandler
{

    public function operate(string $string) : int {
        switch ($string) {
            case 'OK' :
                return 1;
            case 'Error' :
                return 0;
        }
    }

}