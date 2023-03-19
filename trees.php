<?php


class Tree {
    private int $regNumber = 0;

    public function setRegNumber(int $number) {
        $this->regNumber = $number;
    }

    public function getRegNumber(int $number) {
        return $this->regNumber;
    }
}


class AppleTree extends Tree {
    //
}

class PearTree extends Tree {
    //
}

?>