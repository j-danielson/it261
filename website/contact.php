<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');

function sayHello($greeting) {
    echo"Hello $greeting";
    }

?>
    <div id="wrapper">
        <main>
            <?php include('includes/form.php') ;?>
        </main>
    </div> <!--end of wrapper-->

<?php
include('includes/footer.php');
?>