<?php

/**
 * Class Telecommand
 */
class Telecommand
{
    /**
     * @var Tv
     */
    private $tv;

    /**
     * Telecommand constructor.
     *
     * @param Tv $tv
     */
    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    /**
     * Add volume.
     */
    public function volumeUp(): void
    {
        $this->tv->increaseVol();
    }

    /**
     * Remove volume.
     */
    public function volumeDown(): void
    {
        $this->tv->decreaseVol();
    }
}
