<?php

abstract class Fruits {
    abstract public function getCountFruits();
}


class Apples extends Fruits {
    private int $countApples = 0;

    public function __construct() {
        $this->countApples = mt_rand(40, 50);
    }

    public function getCountFruits() {
        return $this->countApples;
    }
}


class Pears extends Fruits {
    private int $countPears = 0;

    public function __construct() {
        $this->countPears = mt_rand(0, 20);
    }

    public function getCountFruits() {
        return $this->countPears;
    }
}

?>