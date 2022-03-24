<?php

session_start();
include('config.php');

include('includes/header.php');
?>

<div id="wrapper">
    <div id="main">
        <h1>Want To Learn More About Me?</h1>
        <P style="margin-bottom: 10px;">While I would normally use this page to talk about how I was simply a man with a dream and the ambition to make it all true (plus a $500k loan from my father that I don't mention), sadly I need to use this page for some screenshots. Enjoy!</P>
        <figure>
            <img class="screenshot" src="images/userbd.jpg" alt="user database">
            <figcaption>My user database</figcaption>
        </figure>
        <figure>
            <img class="screenshot" src="images/tvdb.jpg" alt="top vinyl database">
            <figcaption>My top vinyl database</figcaption>
        </figure>
    </div>
    <!-- <div id="recorddiv"><img id="record"src="images/record.jpg"></div> -->
</div>
<!-- End wrapper -->
<?php
include('includes/footer.php');
?>