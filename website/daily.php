<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');

?>
    <div id="wrapper">
        <main>
            <?php 
            echo $album;
            ?>
            <img src="images/dailyimg/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        </main>
        <aside id="<?php echo $class;?>">
            <h3><?php echo $alt?></h3>
            <p><?php echo $content;?></p>
            <!-- <a href="weeks/week2/">Week 2</a> -->
        </aside>
        <div id="days">
            <h3>Check out our daily albums</h3>
            <ul>
                <li><a href="daily.php?today=Sunday">Sunday</a></li>
                <li><a href="daily.php?today=Monday">Monday</a></li>
                <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily.php?today=Thursday">Thursday</a></li>
                <li><a href="daily.php?today=Friday">Friday</a></li>
                <li><a href="daily.php?today=Saturday">Saturday</a></li>
            </ul>
        </div>
    </div> <!--end of wrapper-->

    <?php
    include('includes/footer.php');
    ?>

    <!-- <footer>
        <div id="inner-footer">
        <ul>
            <li>Copyright &copy;</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Josh</a></li>
            <li><a id="html-checker" href="">HTML Validation</a></li>
            <li><a id="css-checker" href="">CSS Validation</a></li>
        </ul>
        </div> end inner-footer
    </footer>

    <script>
        document.getElementById
        ("html-checker").setAttribute
        ("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById
        ("css-checker").setAttribute
        ("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</body>
</html> -->