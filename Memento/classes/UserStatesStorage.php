<?php

namespace memento\classes;

class UserStatesStorage
{

    private array $states = [];

    public function __construct(
        private User $user
    ) {}

    public function storeState() : string
    {
        $new_key = 'state_' . rand(1000,9999);
        if (!isset($this->states[$new_key])) {
            $this->states[$new_key] = $this->user->save();
            echo "Saving info, key: " . $new_key . "<br />";
            return $new_key;
        } else {
            $this->storeState();
        }
    }

    public function restoreByKey(string $key)
    {
        if (isset($this->states[$key])) {
            $this->user->restore($this->states[$key]);
        } else {
            return false;
        }
    }

    public function getStates()
    {
        foreach ($this->states as $key => $memento) {
            echo "$key : " . $memento->getStateInfo() . "<br />";
        }
    }

}