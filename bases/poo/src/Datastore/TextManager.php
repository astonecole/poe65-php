<?php

class TextManager {
    private $storeHandler;
    private $content;

    public function __construct(StoreHandler $storeHandler)
    {
        $this->setStoreHandler($storeHandler);
        $this->setContent($this->getStoreHandler()->read());
    }

    public function setStoreHandler(StoreHandler $storeHandler)
    {
        $this->storeHandler = $storeHandler;
    }

    public function getStoreHandler(): StoreHandler
    {
        return $this->storeHandler;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save()
    {
        $this->storeHandler->write($this->getContent());
    }
}
