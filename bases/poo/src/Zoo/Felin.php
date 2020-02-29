<?php

/**
 * Class Felin
 */
abstract class Felin extends Animal
{
    /**
     * @inheritDoc
     */
    public function move(): string
    {
        return 'je me déplace comme un felin';
    }
}
