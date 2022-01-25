<?php
// Playing with our date function!!

echo date('l') . '<br>';
echo date('l, F j, Y h:i');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('l') . '<br>';
echo date('l, F j, Y h:i');

echo '<br>';
$our_date = date('H:i ');
echo '<br>';
echo $our_date;
if($our_date <= 11) {
    echo '<h1>Good Morning!</h1> <img';
} elseif($our_date <= 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}