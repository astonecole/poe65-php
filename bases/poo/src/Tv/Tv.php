<?php

/**
 * Class Tv
 */
class Tv
{
    protected const VOLUME_MIN = 0;
    protected const VOLUME_MAX = 50;

    /**
     * @var int
     */
    private $volume = 0;

    /**
     * Increase volume.
     */
    public function increaseVol(): void
    {
        if ($this->getVolume() < self::VOLUME_MAX) {
            $this->volume++;
        }
    }

    /**
     * Decrease volume.
     */
    public function decreaseVol(): void
    {
        if ($this->getVolume() > self::VOLUME_MIN) {
            $this->volume--;
        }
    }

    /**
     * Get current volume.
     *
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }
}
