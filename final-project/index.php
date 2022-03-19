<?php

//our index page which must show the session_start()

session_start();

include('config.php');

//did the user log in correctly, and if not the user will receive a message and will be directed bcak to the log in page

// if(!isset($_SESSION['username'])) {
//     $_SESSION['msg'] = 'you must login first';
//     header('Location:login.php');
// }

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');
?>

<div id="login_register">
    <?php

// logic - is our session success set?

if(isset($_SESSION['success'])) :?>
<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']) ;?>
    </h3>
</div> 
<!-- close success div -->
<?php endif; ?>

<?php // is our wonderful session username set?

if(isset($_SESSION['username'])) :?>
<div class="welcome-logout">
    <h3> Welcome, 
        <?= $_SESSION['username'] ?>
    </h3>
</div>
<p><a href="index.php?logout='1'">Logout</a></p>
<?php endif; ?>
</div>
<div id="wrapper">
    <div id="main">
        <p>I'm just adding some text here to make it look good</p>
    </div>
    <!-- <div id="recorddiv"><img id="record"src="images/record.jpg"></div>
</div> -->

<?php
include('includes/footer.php');