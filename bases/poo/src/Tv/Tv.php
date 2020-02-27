<?php

class Tv
{
    const VOLUME_MIN = 0;
    const VOLUME_MAX = 50;

    private $volume = 0;

    public function increaseVol()
    {
        if ($this->getVolume() < self::VOLUME_MAX) {
            $this->volume++;
        } 
    }

    public function decreaseVol()
    {
        if ($this->getVolume() > self::VOLUME_MIN) {
            $this->volume--;
        }
    }

    public function getVolume(): int
    {
        return $this->volume;
    }
}
