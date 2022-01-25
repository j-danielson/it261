<?php
// we need to define the page that we are on as the page

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        $css = 'home';
        break;

    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to the Daily Page';
        $css = 'daily';
}

$nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['project.php'] = 'Project';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <?php echo '<link href="css/'.$css.'styles.css" type ="text/css" rel="stylesheet">' ?>
</head>
<body>
    <header>
        <div id="inner-header">
             <!-- <a href="index.php">
            <img id="logo" src="images/logo.jpg" alt="logo">
            </a>   SAVING INCASE I WANT AN IMAGE --> 
            <!-- </a> -->
            <!-- <nav>
                <h1>Welcome To My Portal Page!</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="daily.php">Daily</a></li>
                    <li><a href="project.php">Project</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </nav> -->

    <nav>
        <h1><?php echo $headline ?></h1>
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

            <!-- <nav>
                <ul>
                    <?php
                    foreach($nav as $key => $value) {
                        echo '<li style="list-style-type:none;"><a style="text-decoration:none;" href="'.$key.'"> '.$value.'</a></li>';
                    }
                    ?>
                </u>
            </nav> -->
        </div> <!---end inner header-->
    </header>