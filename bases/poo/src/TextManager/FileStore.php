<?php

/**
 * Class FileStore
 */
class FileStore implements StoreInterface
{
    /**
     * @var string
     */
    private $filename = '';

    /**
     * FileStore constructor.
     *
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->setFilename($filename);
    }

    /**
     * @inheritDoc
     */
    public function write(string $text)
    {
        return file_put_contents($this->getFilename(), $text);
    }

    /**
     * @inheritDoc
     */
    public function read(): string
    {
        return file_get_contents($this->getFilename());
    }

    /**
     * @param string $filename
     * @return $this
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
}
