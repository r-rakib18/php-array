<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/13/2022
 * Time: 9:21 PM
 */

$number_one = 55;
$number_two = 44;
$number_three = 99;

$large = $number_one > $number_two ? ($number_one > $number_three ? $number_one : $number_three) : ($number_two > $number_three ? $number_two : $number_three);

echo $large;