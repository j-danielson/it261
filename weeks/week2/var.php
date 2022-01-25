<?php
// introduction to our variables
// as well as syntax
// what is a varible ?? a veriable is a container


$name = 'Josh';
// the information between the single qoutes is a string
echo $name;
echo '<br>';
$name = 'Anthony';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo "My first name is $name";
echo '<br>';
// Use single qoutes because later we will be placing php inside html
echo 'My first name is '.$name.' ';
echo '<br>';
$temp = 45;
// another data type is integers
echo 'The temperature today was '.$temp.' degrees ';
echo '<br>';

$body_temp = 98.6;
// anything with a decimal is called a float
echo $body_temp;

// another data type is boolean = true or false
// another data type is NULL
// <select><option value="" Null>Select one </option> </select>

$vechile = 'truck';
echo '<br>';
$x = 20;
$y = 30;
$z = $x * $y;
echo $z;

// circumference of a circle 2PieR
echo '<br>';
$pie = 3.14;
$radius = 10;
$circumference = (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

$celcius = 4;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
// ceil is a function that will round up
// floor is a function that will round down
// 


$celcius = 4;
$far = ($celcius * 9/5) + 32;

// ceil is a function that will round up
// floor is a function that will round down
echo ceil($far);

$money = 100;
$divide = 7;
$amount = $money / $divide;
echo 'I now have <br>$'.number_format($amount, 2).' <br> ';
// number_format($amount, 2)
echo '<br>';
$friendly_amount = number_format($amount, 2);
echo 'I now have $'.$friendly_amount.' dollars!';

?>

<h1>Now we will be playing with the concatenation operator</h1>

<?php

$first_name = 'Josh';
$last_name = 'Danielson';
echo '<br>';
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';

$name = 'Josh';
$name .= ' Danielson';
echo $name;
echo '<br>';

$x = 30;
$y = 3;
$z = $x / $y;
echo $z;
echo '<br>';

$x = 30;
$x /= 3;
echo $x;

