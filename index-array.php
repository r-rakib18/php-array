<?php 

//Example 0ne
$colors = array("red", "blue", "green", "yellow");
echo $colors[0]. "<br>";
echo $colors[1]. "<br>";
echo $colors[2]. "<br>";
echo $colors[3]. "<br>";

//Example Two
$data =array("yellow", 10, 'green', 20.56);
echo $data[0]. "<br>";
echo $data[1]. "<br>";
echo $data[2]. "<br>";
echo $data[3]. "<br>";

//Example Three
$city = ['Dhaka', 'Comilla', 'Sylhet', 'Barisal'];
echo $city[0]. "<br>";
echo $city[1]. "<br>";
echo $city[2]. "<br>";
echo $city[3]. "<br>"; 

//Example Four
$sports[0] = 'Cricket';
$sports[1] = 'Football';
$sports[2] = 'Tennis';

echo "<pre>";
print_r($sports);
echo "</pre>";

//Index array loop through Example one
for($i=0; $i<4; $i++)
{
	echo $colors[$i]. "<br>";
}

//Index array loop through Example Two
echo "<ul>";
for($i=0; $i<4; $i++)
{
	echo "<li>$colors[$i]</li>";
}
echo "</ul>";


?>