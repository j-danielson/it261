<?php
//people-view.php
session_start();
include('config.php');
//if id has been set!!

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:list.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM topvinyls WHERE v_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot output anything here
    while($row = mysqli_fetch_assoc($result)) {
        $v_name = stripslashes($row['v_name']);
        $v_artist = stripslashes($row['v_artist']);
        $v_release = stripslashes($row['v_release']);
        $v_genre = stripslashes($row['v_genre']);
        $v_rank = stripslashes($row['v_rank']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysqli_num_rows
    $feedback = 'Houtson, we have a problem!';
} //closing else

// we will place all of the php here BEFORE we call  out the header.php


include('includes/header.php');
?>
<div id="vvwrapper">
<main id="vmain">
<h1><?= $v_name ?>'s Page</h1>
<ul>
    <?php 
    echo '
    <li class="vgli"><b>Rank:</b> '.$v_rank.'</li>
    <li class="vgli"><b>Name:</b> '.$v_name.'</li>
    <li class="vgli"><b>Artist:</b> '.$v_artist.'</li>
    <li class="vgli"><b>Release:</b> '.$v_release.'</li>
    <li class="vgli"><b>Genre:</b> '.$v_genre.'</li>
    ';
    ?>
</ul>

<p><a class="link" href="top-vinyls.php">Return to the full list!</a></p>
</main>
<aside>
<h3>Cover Art</h3>
<figure>
    <img src="images/vinyls/vinylpic<?= $id ?>.jpg" alt="<?= $v_name ?>">
    <figcaption><?php echo ' '.$v_name.' by '.$v_artist.'';?></figcaption>
</figure>
</aside>
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');