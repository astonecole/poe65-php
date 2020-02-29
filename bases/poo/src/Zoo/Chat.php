<?php

/**
 * Class Chat
 */
class Chat extends Felin
{
    /**
     * @inheritDoc
     */
    public function move(): string
    {
        return parent::move() . ' avec une patte en moins.';
    }
}
