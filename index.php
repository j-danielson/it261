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
            <div id="welcome">
                <h1>Welcome To My Portal Page!</h1>
            </div>  
            <nav>
                <ul>
                    <li><a class="headNav" href="website/index.php">Home</a></li>
                    <li><a class="headNav" href="website/daily.php">Switch</a></li>
                    <li><a class="headNav" href="website/adder.php">Troubleshoot</a></li>
                    <li><a class="headNav" href="">Project</a></li>
                    <li><a class="headNav" href="website/calculator.php">Calculator</a></li>
                    <li><a class="headNav" href="website/gallery.php">Gallery</a></li>
                    <li><a class="headNav" href="">Database</a></li>
                </ul>
            </nav>
        </div> <!---end inner header-->
    </header>
    <div id="wrapper">
        <div id="hero">
            <div id="profile">
            <img id="my-photo" src="images/profilephoto.jpg" alt="Me">
            <div id="about-me">
                
                <h2>A little about me...</h2>
                <p>I grew up on farm in a tiny town in Iowa and moved to Seattle in 2013. I've always been interested in programming and problem-solving, and finally decided to pulled the trigger to enroll in SCC's web development program at 29 years old. 
                    Outside of school and work, I mostly spend my time chilling with friends, playing video games, and walking my corgi Porkchop!
                </p>
            </div>
            </div>
            <main>
            <p style="margin-left: 40px">MAMP Scrrenshot! <br> <img id="mamp-screenshot" src="images/mampscreenshot.png" alt="MAMP"></p>
            <p style="margin-left: 40px">MAMP Error Scrrenshot! <br> <img id="error-screenshot" src="images/mamperror.png" alt="ERROR"></p>
            </main>
        </div> <!--end hero-->
        <aside>
            <h3>Weekly Assignments</h3>
            <button id="week2btn" type="button">WEEK 2</button>
            <button id="week3btn" type="button">WEEK 3</button>
            <button id="week4btn" type="button">WEEK 4</button>
            <button id="week5btn" type="button">WEEK 5</button>
            <button id="week6btn" type="button">WEEK 6</button>
            <button id="week7btn" type="button">WEEK 7</button>
        </aside>

        <div id="week2modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week2/currency.php"style="margin: 10px">currency.php</a> <br>
            <a href="weeks/week2/currency-logic.php" style="margin: 10px">currency-logic.php</a><br>
            <a href="weeks/week2/heredoc.php" style="margin: 10px">heredoc.php</a><br>
            <a href="weeks/week2/var.php" style="margin: 10px">var.php</a><br>
            </div>
        </div>

        <div id="week3modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week3/arrays.php"style="margin: 10px">arrays.php</a> <br>
            <a href="weeks/week3/date.php" style="margin: 10px">date.php</a><br>
            <a href="weeks/week3/for-loop.php" style="margin: 10px">for-loop.php</a><br>
            <a href="weeks/week3/if-else.php" style="margin: 10px">if-else.php</a><br>
            <a href="weeks/week3/index.php" style="margin: 10px">index.php</a><br>
            <a href="weeks/week3/switch.php" style="margin: 10px">switch.php</a><br>
            </div>
        </div>

        <div id="week4modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week4/form1.php"style="margin: 10px">form1.php</a> <br>
            <a href="weeks/week4/form2.php" style="margin: 10px">form2.php</a><br>
            <a href="weeks/week4/form3.php" style="margin: 10px">form3.php</a><br>
            <a href="weeks/week4/form-get.php" style="margin: 10px">form-get.php</a><br>
            <a href="weeks/week4/celcius.php" style="margin: 10px">celcius.php</a><br>
            <a href="weeks/week4/arithmetic-form.php" style="margin: 10px">arithmetic-form.php</a><br>
            </div>
        </div>
        <div id="week5modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week5/currency.php"style="margin: 10px"> currency.php</a> <br>
            <a href="weeks/week5/currency2.php" style="margin: 10px">currency2.php</a><br>
            <a href="weeks/week5/null.php" style="margin: 10px">null.php</a><br>
            </div>
        </div>
        <div id="week6modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week6/form.php"style="margin: 10px">form.php</a> <br>
            <a href="weeks/week6/form2.php" style="margin: 10px">form2.php</a><br>
            <a href="weeks/week6/functions.php" style="margin: 10px">functions.php</a><br>
            <a href="weeks/week6/thx.php" style="margin: 10px">thx.php</a><br>
            </div>
        </div>
        <div id="week7modal" class="modal">
            <div class="weeklist"><span class="close">&times;</span>
            <a href="weeks/week7/form3.php"style="margin: 10px">form3.php</a> <br>
            <a href="weeks/week7/pictures.php"style="margin: 10px">pictures.php</a> <br>
            <a href="weeks/week7/random.php"style="margin: 10px">random.php</a> <br>
            <a href="weeks/week7/strings.php"style="margin: 10px">strings.php</a> <br>
            </div>
        </div>
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

        var span2 = document.getElementsByClassName("close")[0];
        var span3 = document.getElementsByClassName("close")[1];
        var span4 = document.getElementsByClassName("close")[2];
        var span5 = document.getElementsByClassName("close")[3];
        var span6 = document.getElementsByClassName("close")[4];
        var span7 = document.getElementsByClassName("close")[5];

        week2btn.onclick = function() {
        week2modal.style.display = "block";
        }
        week3btn.onclick = function() {
        week3modal.style.display = "block";
        }
        week4btn.onclick = function() {
        week4modal.style.display = "block";
        }
        week5btn.onclick = function() {
        week5modal.style.display = "block";
        }
        week6btn.onclick = function() {
        week6modal.style.display = "block";
        }
        week7btn.onclick = function() {
        week7modal.style.display = "block";
        }
        span2.onclick = function() {
        week2modal.style.display = "none";
        }
        span3.onclick = function() {
        week3modal.style.display = "none";
        }
        span4.onclick = function() {
        week4modal.style.display = "none";
        }
        span5.onclick = function() {
        week5modal.style.display = "none";
        }
        span6.onclick = function() {
        week6modal.style.display = "none";
        }
        span7.onclick = function() {
        week7modal.style.display = "none";
        }
        window.onclick = function(event) {
        if (event.target == week2modal) {
            week2modal.style.display = "none";
            }
        }
        window.onclick = function(event) {
        if (event.target == week3modal) {
            week3modal.style.display = "none";
            }
        } 
        window.onclick = function(event) {
        if (event.target == week4modal) {
            week4modal.style.display = "none";
            }
        }  
        window.onclick = function(event) {
        if (event.target == week5modal) {
            week5modal.style.display = "none";
            }
        }
        window.onclick = function(event) {
        if (event.target == week6modal) {
            week6modal.style.display = "none";
            }
        }
        window.onclick = function(event) {
        if (event.target == week7modal) {
            week7modal.style.display = "none";
            }
        }
    </script>
</body>
</html>