<?php

abstract class Animal {
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    public abstract function speak();
}
