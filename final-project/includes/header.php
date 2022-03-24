<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles.css" type ="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
    <title>Temporary title</title>
</head>
<body>
    <header>
        <div id="inner-header">
            <div id="logo">
                <h2 style="font-family: 'Alfa Slab One', cursive;">RotM</h2>
            </div>
            <div class="bottom">
            <nav>
                <ul id="navul">
                <?php
                    echo make_links($nav);
                ?>
                </ul>
            </nav>
            </div>
            <div class="bottom">
            <?php if(isset($_SESSION['success'])) :?>
            <div class="success">
                <h3>
                    <?php echo $_SESSION['success'];
                    unset($_SESSION['success']) ;?>
                </h3>
            </div> 
            <!-- close success div -->
            <?php endif; ?>
            <?php if(isset($_SESSION['username'])) :?>
            <div id="welcome-logout" style="margin-bottom: 0px;">
                <h3> Welcome, 
                <?= $_SESSION['username'] ?>
                </h3>
                <p><a id="logout" href="index.php?logout='1'">Logout</a></p>
                </div>
                <?php endif; ?>
            </div>
        </div> <!---end inner header-->
    </header>