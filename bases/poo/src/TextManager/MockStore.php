<?php

/**
 * Class MockStore
 */
class MockStore implements StoreInterface
{
    /**
     * @var string
     */
    private $text = '';

    /**
     * @inheritDoc
     */
    public function write(string $text)
    {
        $this->text = $text;
        return strlen($this->text);
    }

    /**
     * @inheritDoc
     */
    public function read(): string
    {
        return $this->text;
    }
}