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

//Get Product value
try {
    echo $task->getProduct();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo '<br>';

}
//var_dump($task->data);

//Set new $data key value
try {
    $task->setCustomerID(241);
} catch (Exception $e) {
    echo $e->getMessage();
}
//var_dump($task->data);

//Check if $data['CustomerID'] value exists
try {
    echo $task->hasCustomerID() ? 'true' : 'false';
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo '<br>';
}

//Unset $data['CustomerID'] value
try {
    $task->unsCustomerID();
} catch (Exception $e) {
    echo $e->getMessage();
}
//var_dump($task->data);