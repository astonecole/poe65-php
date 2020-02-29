<?php

class Store implements Countable
{
    public $products = ['Kiwi', 'Pomme', 'Banane'];

    public function count(): int
    {
        return count($this->products);
    }
}

class Company implements Countable
{
    public $employees = ['Jack', 'Martin', 'Miléna', 'Marta'];

    public function count(): int
    {
        return count($this->employees);
    }
}

function nbItems(Countable $data)
{
    return $data->count();
}

echo nbItems(new Store());
echo nbItems(new Company());
