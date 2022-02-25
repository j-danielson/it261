<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');

?>
    <div id="wrapper">
        <main>

            <?php include('includes/form.php') ;?>
        </main>
        <aside id="<?php echo $class;?>">

        </aside>

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