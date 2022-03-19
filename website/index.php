<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');
?>
    <div id="wrapper">
        <div id="hero">
            <div id="about-me">
                <h2>Welcome to our Home page of our IT261 Website!</h2>
            </div>
        </div> <!--end hero-->
        <main id="mainmain">
            <h3>Random Images!</h3>
        <p><?php echo random_images($photos); ?></p>   
        </main>
        <aside>
            <h3>The one true aside</h3>
        </aside>
    </div> <!--end of wrapper-->
<?php
    include('includes/footer.php');
?>