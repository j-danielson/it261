<?php

//our index page which must show the session_start()

session_start();
include('config.php');

//did the user log in correctly, and if not the user will receive a message and will be directed bcak to the log in page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'you must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');
?>

<div id="wrapper">
    <div id="main">
        <h1>RECORD OF THE MONTH</h1>
        <h3>We bring the magic while you build your collection. </h3>
        <P>Receive a vinyl each month from a genre of your choice. Each one handpicked by our group of music fanatics! <br> Sounds right up your alley? <a class="link" href="form.php">Sign Up Now!</a></P>
    </div>
    <!-- <div id="recorddiv"><img id="record"src="images/record.jpg"></div> -->
</div>
<!-- End wrapper -->
<?php
include('includes/footer.php');
?>