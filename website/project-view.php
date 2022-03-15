<?php
//people-view.php
include('config.php');
//if id has been set!!

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM videogames WHERE vg_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot output anything here
    while($row = mysqli_fetch_assoc($result)) {
        $vg_name = stripslashes($row['vg_name']);
        $vg_developer = stripslashes($row['vg_developer']);
        $vg_publisher = stripslashes($row['vg_publisher']);
        $vg_genre = stripslashes($row['vg_genre']);
        $vg_release = stripslashes($row['vg_release']);
        $vg_details = stripslashes($row['vg_details']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysqli_num_rows
    $feedback = 'Houtson, we have a problem!';
} //closing else

// we will place all of the php here BEFORE we call  out the header.php


include('includes/header.php');
?>
<div id="wrapper">
<main id="vgmain">
<h1>Welcome to our Video Game View Page!</h1>
<h2>Welcome to <?= $vg_name ?>'s Page</h2>
<ul>
    <?php 
    echo '
    <li class="vgli"><b>Name:</b> '.$vg_name.'</li>
    <li class="vgli"><b>Developer:</b> '.$vg_developer.'</li>
    <li class="vgli"><b>Publisher:</b> '.$vg_publisher.'</li>
    <li class="vgli"><b>Genre:</b> '.$vg_genre.'</li>
    <li id="lastli"><b>Release Date:</b> '.$vg_release.'</li>
    <li>
    <p> '.$vg_details.' </p>
    </li>
    ';
    ?>
</ul>

<p><a href="project.php">Return to the full list!</a></p>
</main>
<aside>
<h3>The Game's Box Art</h3>
<figure>
    <img src="images/vgpic<?= $id ?>.jpg" alt="<?= $vg_name ?>">
    <figcaption><?php echo ' '.$vg_name.' by '.$vg_developer.'';?></figcaption>
</figure>
</aside>
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');