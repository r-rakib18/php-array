<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/13/2022
 * Time: 9:46 PM
 */

$a = 'ABC';
$b = 7;

$temp = $a;
$a = $b;
$b = $temp;

echo "a = ". $a ."<br>";
echo "b = ". $b ."<br>";