<?php
//Array

$cars = array('toyota','sedan','honda');
//echo gettype($cars);

$cars[] = 'premeo';
$cars[8] = 'suzuki';
$cars[] = 'bajaj';
$cars['c'] = 'cdi';
$cars[] = 'ferari';


echo "<pre>";
print_r($cars);
echo "</pre>";

//associative array

$fruits = array('a'=>'apple', 'b'=>'ball');

$fruits[] = 'this is the last value';

echo "<pre>";
print_r($fruits);
echo "</pre>";
$arr2D = array($cars,$fruits); //parent array
echo "<pre>";
print_r($arr2DS);
echo "</pre>";


?>