<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="css/styles.css" type ="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="inner-header">
             <!-- <a href="index.php">
            <img id="logo" src="images/logo.jpg" alt="logo">
            </a>   SAVING INCASE I WANT AN IMAGE --> 
            <!-- </a> -->
            <nav>
                <h1>Welcome To My Portal Page!</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="daily.php">Daily</a></li>
                    <li><a href="project.php">Project</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </nav>
        </div> <!---end inner header-->
    </header>
    <div id="wrapper">
        <div id="hero">
            <img id="my-photo" src="images/profilephoto.jpg" alt="Me">
            <div id="about-me">
                
                <h2>A little about me...</h2>
                <p>I grew up on farm in a tiny town in Iowa and moved to Seattle in 2013. I've always been interested in programming and problem-solving, and finally decided to pulled the trigger to enroll in SCC's web development program at 29 years old. 
                    Outside of school and work, I mostly spend my time chilling with friends, playing video games, and walking my corgi Porkchop!
                </p>
            </div>
        </div> <!--end hero-->
        <main>
            <p style="margin-left: 40px">MAMP Scrrenshot! <br> <img id="mamp-screenshot" src="images/mampscreenshot.png" alt="MAMP"></p>
            <p style="margin-left: 40px">MAMP Error Scrrenshot! <br> <img id="error-screenshot" src="images/mamperror.png" alt="ERROR"></p>
        </main>
        <aside>
            <h3>Weekly Assignments</h3>
            <form action="weeks/week2/index.php">
                <input type="submit" value="WEEK 2" />
            </form>
            <form action="weeks/week3/home.php">
                <input type="submit" value="WEEK 3" />
            </form>
            <!-- <a href="weeks/week2/">Week 2</a> -->
        </aside>
    </div> <!--end of wrapper-->

    <footer>
        <div id="inner-footer">
        <ul>
            <li>Copyright &copy;</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Josh</a></li>
            <li><a id="html-checker" href="">HTML Validation</a></li>
            <li><a id="css-checker" href="">CSS Validation</a></li>
        </ul>
        </div> <!--end inner-footer-->
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
</html>