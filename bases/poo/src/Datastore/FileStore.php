<?php

class FileStore implements StoreHandler
{
    private $filename = '';

    public function __construct(string $filename)
    {
        $this->setFilename($filename);
    }

    public function write(string $text)
    {
        file_put_contents($this->getFilename(), $text);
    }

    public function read(): string
    {
        return file_get_contents($this->getFilename());
    }

    public function setFilename(string $filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }
}
