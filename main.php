<?php

include "combine.php";
include "garden.php";


$garden = new Garden(10, 15);
$arrTrees = $garden->getArrTrees();

$combine = new Combine();
$combine->collectFruits($arrTrees);
$combine->printCountApples();
$combine->printCountPears();

?>