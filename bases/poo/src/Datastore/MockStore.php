<?php

class MockStore implements StoreHandler {
    private $text = '';

    public function write(string $text)
    {
        $this->text = $text;
    }

    public function read(): string
    {
        return $this->text;
    }
}