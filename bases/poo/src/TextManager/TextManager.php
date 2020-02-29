<?php

/**
 * Class TextManager
 */
class TextManager
{
    /**
     * @var StoreInterface
     */
    private $store;

    /**
     * @var string
     */
    private $content = '';

    /**
     * TextManager constructor.
     * @param StoreInterface $store
     */
    public function __construct(StoreInterface $store)
    {
        $this->setStoreHandler($store);
        $this->setContent($this->getStoreHandler()->read());
    }

    /**
     * @param StoreInterface $store
     * @return $this
     */
    public function setStoreHandler(StoreInterface $store): self
    {
        $this->store = $store;
        return $this;
    }

    /**
     * @return StoreInterface
     */
    public function getStoreHandler(): StoreInterface
    {
        return $this->store;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Save saves content in the store.
     */
    public function save()
    {
        return $this->store->write($this->getContent());
    }
}
