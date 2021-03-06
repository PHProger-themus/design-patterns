<?php

namespace adapter\classes;

use adapter\interfaces\Service;

class ProcessStatus implements Service
{

    public function run(string $status): string
    {
        switch ($status) {
            case 'OK' :
                return 'Page was loaded';
            case 'Error' :
                return 'Error while loading page';
        }
    }

}