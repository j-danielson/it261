<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles.css" type ="text/css" rel="stylesheet">
    <title>Temporary title</title>
</head>
<body>
    <header>
        <div id="inner-header">
            <div id="logo">
                <!-- <h1><?php echo $headline; ?></h1> -->
            </div>
            <nav>
                <ul>
                <?php
                    echo make_links($nav);
                ?>
                </ul>
            </nav>
        </div> <!---end inner header-->
    </header>