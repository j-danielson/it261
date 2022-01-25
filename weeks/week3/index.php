<?php

// arrays reminds me of a catergory , a category of fruits, names,
//navigation

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$fruits = [
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
];
//index array
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pineapple';

// we cannot echo an array

// echo $fruits;

echo $fruits[2];
echo '<br>';

print_r($fruits);
echo '<br>';
var_dump($fruits);
echo '<br>';
echo '<pre>';
var_dump($fruits);
echo '</pre>';


$title = 'The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$book = array(
    'title' => 'The Handmaid\'s Tale',
    'author' => 'Margaret Atwood',
    'character' => 'June',
    'actor' => 'Elizabeth Moss'
);
// associative array
// $nav $key    value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// you can echo an associative array by using a foreach loop
echo '<br>';

foreach($nav as $key => $value) {
    echo ' Link '.$key.' Visual '.$value.' <br> ';

}

echo '<br>';

foreach($nav as $key => $value) {
    echo ' <a href="'.$key.'"> Visual '.$value.'</a> <br> ';
}

?>

<!-- if we are on the home page of our website, home will display differently -->
<!-- if we are on THIS_PAGE, we will be styling for this page
if THIS_PAGE == $key -->
<html>
    <head>
        <style>
            .current {
                color:red;
            }
        </style>
</head>
<body>
<nav>
    <ul>
    <?php
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key){
            echo '<li><a class="current" href="'.$key.'">'.$value.'</a> </li>';
            } else {
                echo '<li><a href="'.$key.'">'.$value.'</a> </li>';

            }
        } // end of foreach
    ?>
    </ul>
</nav>
    </body>
    </html>