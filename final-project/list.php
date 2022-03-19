<?php 
    include('config.php');
    include('includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to my video games page</h1>
    <?php 
        $sql = 'SELECT * FROM videogames';
        // then we are going to connect to the database!!!
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // we are asking if the number of rows is greater then zero, then we will be able to see the table...
        if(mysqli_num_rows($result) > 0) {
            // think about our one row being an array - an associative array $row['first_name']
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="gamebox">
                <h2>Information about '.$row['vg_name'].'</h2>
                <ul>
                <li class="vgli"><b>Name:</b> '.$row['vg_name'].'</li>
                <li class="vgli"><b>Developer:</b> '.$row['vg_developer'].'</li>
                <li class="vgli"><b>Release Date:</b> '.$row['vg_release'].'</li>
                </ul>
                <p>for more information about '.$row['vg_name'].' click <a href="list-view.php?id='.$row['vg_id'].'" >here</a></p>
                </div>
                ';
            }// close while loop
        } // close if statement
    ?>
</main>

<!-- <aside>
    <h3>This is my aside that will be displaying random images!</h3>
</aside> -->
</div>
<!-- end wrapper -->

<?php 
    include('./includes/footer.php');