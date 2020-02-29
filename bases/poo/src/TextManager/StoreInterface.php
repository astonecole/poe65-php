<?php

/**
 * Interface StoreInterface
 */
interface StoreInterface {

    /**
     * @param string $text
     * @return mixed int|bool
     */
    public function write(string $text);

    /**
     * @return string
     */
    public function read(): string;
}
