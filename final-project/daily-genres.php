<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include('config.php');
include('includes/header.php');

?>
    <div id="wrapper">
        <div id="dayheader"><?= $dayheader ?></div>
        <div id="content">
            <main>
            <p><?php echo $content;?></p>
            </main>
            <aside id="<?php echo $class;?>">
            <figure>
                    <img src="images/<?=$pic?>" alt="<?=$alt?>">
                    <figcaption><?=$cap ?></figcaption>
                </figure>
                <div id="days">
                <h3>Check out the other genres</h3>
                <ul>
                    <li><a class="link" href="daily-genres.php?today=Sunday">R&B</a></li>
                    <li><a class="link" href="daily-genres.php?today=Monday">Pop</a></li>
                    <li><a class="link" href="daily-genres.php?today=Tuesday">Rock</a></li>
                    <li><a class="link" href="daily-genres.php?today=Wednesday">Hip-Hop</a></li>
                    <li><a class="link" href="daily-genres.php?today=Thursday">EDM</a></li>
                    <li><a class="link" href="daily-genres.php?today=Friday">Country</a></li>
                    <li><a class="link" href="daily-genres.php?today=Saturday">Metal</a></li>
                </ul>
            </div>
            </aside>
        </div>
    </div> <!--end of wrapper-->

    <?php
    include('includes/footer.php');
    ?>