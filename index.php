<?php

require 'Classes/Task1.php';
require 'Classes/Task2.php';

use Classes\Task1;
use Classes\Task2;

$a = new Task1();

$a->property1 = 'Setting property 1';
$a->property2 = 'Setting property 2';
echo 'property1 = ' . $a->property1 . '<br>';
echo 'property2 = ' . $a->property2 . '<br>';


$task = new Task2();

try {
    echo $task->getFirstName();
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}