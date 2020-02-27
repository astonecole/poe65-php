<?php

// OCP
class Parc {
    private $animals = [];

    public function add(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function show()
    {
        foreach ($this->animals as $a) {
            echo $a->getName() . '<br>';
            echo $a->move() . '<br><br>';
        }
    }
}
