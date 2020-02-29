<?php

/**
 * Class Parc
 */
class Parc
{
    /**
     * @var array
     */
    private $animals = [];

    /**
     * @param Animal $animal
     * @return $this
     */
    public function add(Animal $animal): self
    {
        $this->animals[] = $animal;
        return $this;
    }

    public function show(): void
    {
        foreach ($this->animals as $a) {
            echo $a->getName() . '<br>';
            echo $a->move() . '<br><br>';
        }
    }
}
