<?php 
session_start();
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
<main>
    <div id="top">
    <h1>Top 10 Selling Album of 2021</h1>
    <p>Even though we now able to to stream music from a cloud on our pocket sized computer, vinyl sales are still going strong. In 2021, vinyl sales accounted for <b>38%</b> of album sales! To get a sneak peek into what was selling last year, check out our top sold vinyls! </p>
    </div>
    <div id="rankings">
    <?php 
        $sql = 'SELECT * FROM topvinyls';
        // then we are going to connect to the database!!!
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // we are asking if the number of rows is greater then zero, then we will be able to see the table...
        if(mysqli_num_rows($result) > 0) {
            // think about our one row being an array - an associative array $row['first_name']
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="rank">
                <h2>Rank: '.$row['v_rank'].'</h2>
                <ul>
                <li class="vli"><b>Album:</b> '.$row['v_name'].'</li>
                <li class="vli"><b>Artist:</b> '.$row['v_artist'].'</li>
                <li class="vli"><b>Release Date:</b> '.$row['v_release'].'</li>
                </ul>
                <p>for more information about '.$row['v_name'].' <a class="link" href="vinyl-view.php?id='.$row['v_id'].'" >click here</a></p>
                </div>
                ';
            }// close while loop
        } // close if statement
    ?>
    </div>
</main>

<!-- <aside>
    <h3>This is my aside that will be displaying random images!</h3>
</aside> -->
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');