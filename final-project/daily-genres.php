<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');

?>
    <div id="wrapper">
        <main>
            <?= $dayheader ?>
            <p><?php echo $content;?></p>
        </main>
        <aside id="<?php echo $class;?>">
            <figure>
                <img src="images/<?=$pic?>" alt="<?=$alt?>">
                <figcaption></figcaption>
            </figure>
        </aside>
        <div id="days">
            <h3>Check out the other days</h3>
            <ul>
                <li><a href="daily-genres.php?today=Sunday">Sunday</a></li>
                <li><a href="daily-genres.php?today=Monday">Monday</a></li>
                <li><a href="daily-genres.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily-genres.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily-genres.php?today=Thursday">Thursday</a></li>
                <li><a href="daily-genres.php?today=Friday">Friday</a></li>
                <li><a href="daily-genres.php?today=Saturday">Saturday</a></li>
            </ul>
        </div>
    </div> <!--end of wrapper-->

    <?php
    include('includes/footer.php');
    ?>