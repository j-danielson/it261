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
            <div id="welcome">
                <h1><?php echo $headline ?></h1>
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