<?php

class Telecommand
{
    private $tv;

    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    public function volumeUp()
    {
        $this->tv->increaseVol();
    }

    public function volumeDown()
    {
        $this->tv->decreaseVol();
    }
}
