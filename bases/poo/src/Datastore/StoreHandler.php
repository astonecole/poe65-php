<?php

interface StoreHandler {
    public function write(string $text);
    public function read(): string;
}
