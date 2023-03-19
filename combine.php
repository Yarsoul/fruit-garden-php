<?php 

include "fruits.php";


class Combine {
    const MESSAGE_COOLECT_FRUITS = "Собираем урожай...";
    const MESSAGE_APPLE_PROCESSED = "Итого яблонь обработано: ";
    const MESSAGE_PEAR_PROCESSED = "Итого груш обработано: ";
    const MESSAGE_APPLES= "Итого собрано яблок (шт.): ";
    const MESSAGE_PEARS = "Итого собрано груш (шт.): ";
    private int $countApples = 0;
    private int $countPears =  0;

    public function collectFruits(array $arrTrees) {
        echo self::MESSAGE_COOLECT_FRUITS."\n";
        $countAppleTrees = 0;
        $countPearTrees = 0;
        foreach ($arrTrees as $numberTree => $classTree) {
            if ($classTree instanceof AppleTree) {
                $apples = new Apples;
                $this->countApples += $apples->getCountFruits();
                $countAppleTrees++;
            } elseif ($classTree instanceof PearTree) {
                $pears = new Pears;
                $this->countPears += $pears->getCountFruits();
                $countPearTrees++;
            }
        }
        echo self::MESSAGE_APPLE_PROCESSED.$countAppleTrees."\n";
        echo self::MESSAGE_PEAR_PROCESSED.$countPearTrees."\n";
    }

    public function getCountPears() {
        return $this->countPears;
    }

    public function getCountApples() {
        return $this->countApples;
    }

    public function printCountApples() {
        echo self::MESSAGE_APPLES.$this->countApples."\n";
    }

    public function printCountPears() {
        echo self::MESSAGE_PEARS.$this->countPears."\n";
    }
}

?>