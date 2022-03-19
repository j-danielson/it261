<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    ob_start();
    define('DEBUG', 'TRUE'); 
    include('credentials.php');
// we need to define the page that we are on as the page

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        $css = 'home';
        break;

    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to the Daily Page';
        $css = 'daily';
        break;

    case 'contact.php':
        $title = 'Our Contact Page';
        $body = 'contact inner';
        $headline = 'Record of the Month';
        $css = 'daily';
        break;
    
    case 'gallery.php':
        $title = 'Our Gallery Page';
        $body = 'gallery inner';
        $headline = 'Album Gallery';
        break;
    
    case 'project.php':
        $title = 'Our Video Game Page';
        $body = 'vg inner';
        $headline = 'Video Game List';
        break;

    case 'project-view.php':
        $title = 'Our Video Game Page';
        $body = 'vg inner';
        $headline = 'Video Game Info';
        break;

    case 'about.php':
        $title = 'Our Table page';
        $body = 'about inner';
        $headline = 'Video Game Table Screenshot';
        break;

    case 'thx.php':
        $title = 'Our Thank You Page';
        $body = 'thx inner';
        $headline = 'RotM';
        break;
}

// my navigation and my function!!

$nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['project.php'] = 'Video Games';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    function make_links($nav) {
        $my_return = '';
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key){
                $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a> </li>';
        } else {
            $my_return .= '<li><a class="headNav" href="'.$key.'">'.$value.'</a> </li>';
        }
    
    
        } // end foreach
        return $my_return;
    } // end function

// daily php below
    if(isset($_GET['today'])) {
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }
    
    switch($today){
        case 'Sunday' : 
            $album = '<h2>Sunday is Dreamland Day!</h2>';
                $pic = 'dreamland.png';
                $alt = 'Glass Animals - Dreamland';
                $content ="Dreamland recently became an important album in life. It was released about halfway through 2020; which at the time my workplace let go of my only support and left me to work 50+ hours a week. The chill flow and vibes of the whole album helped me relax and get through each day at a time. <br> <br><b>Recommended Songs:</b> <br>Heat Waves <br> Space Ghost Coast to Coast <br> Tokyo Drifting ";
                $class = 'sunday';
            break;
    
        case 'Monday' : 
            $album = '<h2>Monday is Plastic Beach Day!</h2>';
            $pic = 'plasticbeach.jpg';
            $alt = 'Gorillaz - Plastic Beach';
            $content ="Gorillaz has always been one of my favorite bands, but Plastic Beach was when they were able to truly show their wide range style. Teaming up with various artists from different genres - including Snoop Dog, Little Dragon, and even Lou Reed - They were able to combine alternative rock, indie, and hip hop into a beautiful albume from beginning to end. <br> <br><b>Recommended Songs:</b> <br> To Binge <br> Some Kind of Nature <br> Stylo";
            $class = 'monday';
            break;
    
        case 'Tuesday' : 
            $album = '<h2>Tuesday is good kid, m.A.A.d city Day!</h2>';
            $pic = 'maadcity.jpg';
            $alt = 'Kendrick Lamar - good kid, m.A.A.d city';
            $content ="I've alwaysed enjoyed hip hop, but Kendrick Lamar opened my mind and proved to me that rap is art with his album good kid, m.A..A.d city. Kendrick talks about how it was growing up in his neighbor and bringing attention to a lot of social issues that we overlook, while others suffer. Kendrick continues to dig into these issues with his later albums, it's always great to go back and listen to his raw beats and rhymes in m.A.A.d city. <br> <br><b>Recommended Songs:</b> <br> The Art of Peer Pressure <br> Backseat Freestyle <br> m.A.A.d city";
            $class = 'tuesday';
            break;
    
        case 'Wednesday' : 
            $album = '<h2>Monday is Animals Day!</h2>';
            $pic = 'animals.jpg';
            $alt = 'Pink Floyd - Animals';
            $content ="Pink Floyd was a large influence in my life growing up. While they have so many great albums, I keep coming back to Animals. Only 5 songs long, the flow of the album plays likes a 42 minutes long, beautiful song. If you ever need to focus on a task or lay down to decompress, listening to this album will both and everything in-between. <br> <br><b>Recommended Songs:</b> <br> Pigs on the Wing 1 <br> Dogs <br> Pigs (Three Different Ones) <br> Sheep <br> Pigs on the wing 2";
            $class = 'wednesday';
            break;
    
        case 'Thursday' : 
        $album = '<h2>Thursday is The Rise and Fall of Ziggy Stardust and the Spiders from Mars Day!</h2>';
        $pic = 'ziggystardust.jpg';
        $alt = 'David Bowie - Ziggy Stardust';
        $content = "When you think of David Bowie everyone thinks of a different album depending on the decade when they were growing up. While not my favorite album(The Man Who Sold the World), The Rise and Fall of Ziggy Stardust and the Spiders from Mars is the album that you can say was he breakthrough album as he experimented with his sound and helped define glam rock back in the 70's. From this album he continues to experiment and changes with each generation with albums like Let's Dance(80's - dance-rock) and Earthling(90's - techno). <br> <br><b>Recommended Songs:</b> <br> Moonage Daydream <br> It Ain't Easy <br> Ziggy Stardust";
        $class = 'thursday';
        break;
    
        case 'Friday' : 
            $album = '<h2>Friday is 808s & Heartbreak Day!</h2>';
                $pic = '808s-and-heartbreak.webp';
                $alt = 'Kanye West - 808s & Heartbreak';
                $content ="By 2008, Kanye West had already broke many of the norms of the hip hop scene and sale records with his latest album Gradutation. However, after it's release, Kanye went through multiple tragic events in his life. Kanye had to handle with the death of his mother, Donda, who he was really close with and the seperation of his long term fiance, all while dealing with his newfound superstar fame. A year after Gradutation, Kanye released 808s & Heartbreak - a completely different style that no one expected. He experminted with his own beats (hence 808s) when before he was a mastermind with sampling beats for his own albums. He also included heavy use of auto-tune, before it became mainstream. He stated the album was form of therapy for him as he went through these recent events and felt that his emotions could not be fully expressed simply through rapping, which he said had limitations. There were 'melodies that were in me. What was in me I couldn't stop'. Now a decade later, this album is considered the biggest influence in today's hip hop scene! <br> <br><b>Recommended Songs:</b> <br> Welcome To Heartbreak <br> Love Lockdown <br> Paranoid <br> Street Lights";
                $class = 'friday';
            break;
    
        case 'Saturday' : 
            $album = '<h2>Saturday is our Voices Day!</h2>';
                $pic = 'voices.jpg';
                $alt = 'Phantogram - Voices';
                $content = "This album will always hold a special place in my heart. While on vacation in Seattle, I was visiting various neighborhoods and ended up in Alaska Junction in West Seattle. I saw that Easy Street Records had different albums painted on the side of it's building and simply took a quick photo for social media. After sharing the picture, a buddy commented and said that one of the albums, Voices, was amazing and I should give it a listen. Well, not even a month later, Phantogram became one of my favorite artists and I continued to listen to Voices on repeat for months - even after moving to Seattle. <br> <br><b>Recommended Songs:</b> <br> Black Out Days <br> The Day You Died <br> Bill Murray <br> Celebrating Nothing";
                $class = 'saturday';
            break;
    }

    // below is my form PHP



    $name = '';
    $email = '';
    $phone = '';
    $genre = '';
    $adds = [];
    $sub = '';
    $privacy = '';
    $name_err ='';
    $email_err = '';
    $genre_err = '';
    $adds_err = '';
    $sub_err = '';
    $phone_err = '';
    $privacy_err = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $name_err = 'Please enter your full name';
        } else {
            $name = $_POST['name'];
        }

        if(empty($_POST['email'])) {
            $email_err = 'Please enter your email';
        } else {
            $email = $_POST['email'];
        }

        if(empty($_POST['sub'])) {
            $sub_err = 'Please select a subscription length';
        } else {
            $sub = $_POST['sub'];
        }

        if(empty($_POST['phone'])) { // if empty, type in your number
            $phone_err = 'Please enter your phone number';
            } elseif(array_key_exists('phone', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format';
            } else{
            $phone = $_POST['phone'];
            } // end else
            } // end main if
        if(empty($_POST['adds'])) {
            $adds_err = 'test';
        } else {
            $adds = $_POST['adds'];
        }
        if($_POST['genre'] == NULL) {
            $genre_err = 'Please select a genre';
        } else {
            $genre = $_POST['genre'];
        }
        if(empty($_POST['privacy'])) {
            $privacy_err = 'Please agree to our privacy policy';
        } else {
            $privacy = $_POST['privacy'];
        }

        // our wines function!!
        function list_addons($adds) {
            $my_return = '';
            if(!empty($_POST['adds'])) {
                $my_return = implode(', ', $_POST['adds']);
            }else {
                $my_return = 'None';
            }
            return $my_return;
        } // end function

        if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['phone'], $_POST['sub'], $_POST['privacy'])) {
            $to = 'szemeo@mystudentswa.com.';
            $subject = 'Test Subscription Confirmation ' .date('m/d/y, h i A');
            $body = '
                Thank you '.$name.', for subscriping! '.PHP_EOL.'
                Please review the information below to make sure it\'s correct '.PHP_EOL.'
                Email : '.$email.' '.PHP_EOL.'
                Phone Number : '.$phone.' '.PHP_EOL.'
                Subscription Length : '.$sub.' '.PHP_EOL.'
                Genre : '.$genre.' '.PHP_EOL.'
                First Box Additions : '.list_addons($adds).' '.PHP_EOL.'
            ';

            if(!empty($name && $email && $genre && $phone && $sub && $privacy) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

                $headers = array(
                    'From' => 'noreply@joshuadanielson.me',
                    'Reply to: ' => ''.$email.' '
                );
                mail($to, $subject, $body, $headers);
                header('Location:thx.php');
            } //close if not empty statement
        }

    } // end server request

    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function random_images($photos) {
        $my_return = '';
        $i = rand(0, 4);
        $selected_image = ''.$photos[$i].'.jpg ';
        $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
        return $my_return;
    }
function myError($myFile, $myLine, $errorMsg){
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
