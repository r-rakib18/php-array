<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/23/2022
 * Time: 12:25 AM
 */

$age = array(
    "A" => 38,
    "B" => 34,
    "C" => 25
);

echo $age["A"]. "<br>";
echo $age["B"]. "<br>";
echo $age["C"]. "<br>";

//difference between print_r and var_dump
$numbers  = [
    "steve" => 56,
    "elon" => 34,
    "bill" => 24,
];
echo '<pre>';
print_r($numbers);
echo  '</pre>';

echo '<pre>';
var_dump($numbers);

//replace value
$name = [
  101 => 'FF',
  201 => 'EE',
  301 => 'GG',
];

$name[201] = "ee";

echo '<pre>';
print_r($name);

//multiple data type
$random = [
    'a' => 23,
    "abcd" => 'Bangladesh',
    3 => 90.58
];

echo "<pre>";
var_dump($random);