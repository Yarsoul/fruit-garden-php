<?php

include "trees.php";


class Garden {
    const MESSAGE_START_PLANT_APPLE_TREES = "Садим яблони...";
    const MESSAGE_START_PLANT_PEAR_TREES = "Садим груши...";
    const MESSAGE_FINISH_PLANT_APPLE_TREES = "Яблонь посажено: ";
    const MESSAGE_FINISH_PLANT_PEAR_TREES = "Груш посажено: ";
    const MESSAGE_FINISH_PLANT_ALL_TREES = "Итого деревьев посажено: ";
    private array $arrTrees = [];

    public function __construct(int $countAppleTrees, int $countPearTrees) {
        $this->addAppleTrees($countAppleTrees);
        $this->addPearTrees($countPearTrees);
    }

    public function addAppleTrees(int $countTrees) {
        echo self::MESSAGE_START_PLANT_APPLE_TREES."\n";
        $count = count($this->arrTrees)+1;
        for ($i = 0; $i < $countTrees; $i++) {
            $newTree = new AppleTree;
            $newTree->setRegNumber($count);
            $this->arrTrees[] = $newTree;
            $count++;
        }
        echo self::MESSAGE_FINISH_PLANT_APPLE_TREES.$countTrees."\n";
        echo self::MESSAGE_FINISH_PLANT_ALL_TREES.count($this->arrTrees)."\n";
    }

    public function addPearTrees(int $countTrees) {
        echo self::MESSAGE_START_PLANT_PEAR_TREES."\n";
        $count = count($this->arrTrees)+1;
        for ($i = 0; $i < $countTrees; $i++) {
            $newTree = new PearTree;
            $newTree->setRegNumber($count);
            $this->arrTrees[] = $newTree;
            $count++;  
        }
        echo self::MESSAGE_FINISH_PLANT_PEAR_TREES.$countTrees."\n";
        echo self::MESSAGE_FINISH_PLANT_ALL_TREES.count($this->arrTrees)."\n";
    }

    public function getArrTrees(Type $var = null) {
        return $this->arrTrees;
    }

    public function printAllTrees() {
        echo '<pre>';
        var_dump($this->arrTrees);
        echo '</pre>';
    }
}

?>