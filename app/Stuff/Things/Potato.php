<?php

namespace App\Stuff\Things;

class Potato
{
    private $timesWatered = 0;

    public function water() : Potato
    {
        $this->timesWatered += 1;
        return $this;
    }

    public function hasGrown() : Bool
    {
        return $this->timesWatered >= 5;
    }
}