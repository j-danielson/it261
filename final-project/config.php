<?php
// our config file!!!

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

//Header PHP

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch('THIS_PAGE') {
    case 'index.php':
        $title = 'Our Home Page';
        $body = 'home';
        $headline = 'Welcome to our Home Page';
        break;

    case 'daily-genres.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        $headline = 'Welcome to the Daily Page';
        break;

    case 'form.php':
        $title = 'Our Contact Page';
        $body = 'contact inner';
        $headline = 'Record of the Month';
        break;
    
    case 'list.php':
        $title = 'Our Gallery Page';
        $body = 'gallery inner';
        $headline = 'Album Gallery';
        break;
    
    case 'about.php':
        $title = 'Our Table page';
        $body = 'about inner';
        $headline = 'Video Game Table Screenshot';
        break;
}

// my navigation and my function!!

$nav['index.php'] = 'HOME';
    $nav['form.php'] = 'SUBSCRIBE NOW!';
    $nav['daily-genres.php'] = 'POPULAR GENRES';
    $nav['top-vinyls.php'] = 'TOP VINYLS';
    $nav['about.php'] = 'ABOUT US';

    function make_links($nav) {
        $my_return = '';
        foreach($nav as $key => $value) {
            if('THIS_PAGE' == $key){
                $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a> </li>';
        } else {
            $my_return .= '<li><a class="headNav" href="'.$key.'">'.$value.'</a> </li>';
        }
    
    
        } // end foreach
        return $my_return;
    } // end function
//end of header PHP

 $success = 'you have successfully logged on';

 $errors = [];

 // daily php below
//  I still need to do this part
//UPDATE THE DAYYYYYYSSSSS
 if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Sunday' : 
        $dayheader = '<h2>R&B</h2>';
            $pic = 'aretha_franklin.jpg';
            $alt = 'Aretha Franklin';
            $cap = 'Aretha Franklin (Queen of Soul) defined what R&B is today';
            $content ="<b>Rhythm and blues</b>, frequently abbreviated as <b>R&B</b> or <b>R'n'B</b>, is a genre of popular music that originated in African-American communities in the 1940s. The term was originally used by record companies to describe recordings marketed predominantly to urban African Americans, at a time when \"urbane, rocking, jazz based music with a heavy, insistent beat\" was becoming more popular. In the commercial rhythm and blues music typical of the 1950s through the 1970s, the bands usually consisted of piano, one or two guitars, bass, drums, one or more saxophones, and sometimes background vocalists. R&B lyrical themes often encapsulate the African-American experience of pain and the quest for freedom and joy, as well as triumphs and failures in terms of relationships, economics, and aspirations.<br> <br>
            The term \"rhythm and blues\" has undergone a number of shifts in meaning. In the early 1950s, it was frequently applied to blues records. Starting in the mid-1950s, after this style of music contributed to the development of rock and roll, the term \"R&B\" became used to refer to music styles that developed from and incorporated electric blues, as well as gospel and soul music. From 1960s to 1970s, several British R&B musicians such as Jimmy James and the Vagabonds, Geno Washington, Carl Douglas, and Hot Chocolate gained hits. Rock bands such as the Rolling Stones, the Who and the Animals were referred to and promoted as being R&B bands; posters for the Who's residency at the Marquee Club in 1964 contained the slogan, \"Maximum R&B\". By the end of the 1970s, the term  \"rhythm and blues\" had changed again and was used as a blanket term for soul and funk. In the late 1980s, a newer style of R&B developed, becoming known as \"contemporary R&B\". It combines rhythm and blues with elements of pop, soul, funk, disco, hip hop, and electronic music. <br>
            ";
            $class = 'R&B';
        break;

    case 'Monday' : 
        $dayheader = '<h2>Pop</h2>';
        $pic = 'the_beatles.png';
        $alt = 'The Beatles';
        $cap = 'The Beatles is consider one of the most influencial pop bands and helped defined the genre we know today';
        $content ="<b>Pop</b> is a genre of popular music that originated in its modern form during the mid-1950s in the United States and the United Kingdom. The terms <i>popular music</i> and <i>pop music</i> are often used interchangeably, although the former describes all music that is popular and includes many disparate styles. During the 1950s and 1960s, pop music encompassed rock and roll and the youth-oriented styles it influenced. <i>Rock</i> and <i>pop</i> music remained roughly synonymous until the late 1960s, after which pop became associated with music that was more commercial, ephemeral, and accessible. 
        Although much of the music that appears on record charts is seen as pop music, the genre is distinguished from chart music. Identifying factors usually include repeated choruses and hooks, short to medium-length songs written in a basic format (often the verse-chorus structure), and rhythms or tempos that can be easily danced to. Much pop music also borrows elements from other styles such as rock, urban, dance, Latin, and country. 
        ";
        $class = 'monday';
        break;

    case 'Tuesday' : 
        $dayheader = '<h2>Rock</h2>';
        $pic = 'rocket_88.jpg';
        $alt = 'Rocket 88';
        $cap = 'Rocket 88 by Ike Turner is a song label R&B but consider by many experts to be the first Rock n\' Roll song recorded';
        $content ="<b>Rock music</b> is a broad genre of popular music that originated as \"rock and roll\" in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and the United Kingdom. It has its roots in 1940s and 1950s rock and roll, a style that drew directly from the blues and rhythm and blues genres of African-American music and from country music. Rock music also drew strongly from a number of other genres such as electric blues and folk, and incorporated influences from jazz, classical, and other musical styles. For instrumentation, rock has centered on the electric guitar, usually as part of a rock group with electric bass, drums, and one or more singers. Usually, rock is song-based music with a 4/4 time signature using a verse–chorus form, but the genre has become extremely diverse. Like pop music, lyrics often stress romantic love but also address a wide variety of other themes that are frequently social or political. <br><br>
        Rock musicians in the mid-1960s began to advance the album ahead of the single as the dominant form of recorded music expression and consumption, with the Beatles at the forefront of this development. Their contributions lent the genre a cultural legitimacy in the mainstream and initiated a rock-informed album era in the music industry for the next several decades. By the late 1960s \"classic rock\" period, a number of distinct rock music subgenres had emerged, including hybrids like blues rock, folk rock, country rock, southern rock, raga rock, and jazz rock, many of which contributed to the development of psychedelic rock, which was influenced by the countercultural psychedelic and hippie scene. New genres that emerged included progressive rock, which extended the artistic elements, glam rock, which highlighted showmanship and visual style, and the diverse and enduring subgenre of heavy metal, which emphasized volume, power, and speed. In the second half of the 1970s, punk rock reacted by producing stripped-down, energetic social and political critiques. Punk was an influence in the 1980s on new wave, post-punk and eventually alternative rock. <br><br>
        From the 1990s, alternative rock began to dominate rock music and break into the mainstream in the form of grunge, Britpop, and indie rock. Further fusion subgenres have since emerged, including pop punk, electronic rock, rap rock, and rap metal, as well as conscious attempts to revisit rock's history, including the garage rock/post-punk and techno-pop revivals in the 2000s. The 2010s saw a slow decline in rock music's mainstream popularity and cultural relevancy, with hip hop surpassing it as the most popular genre in the United States. In the 2020s, the COVID-19 pandemic had a major impact on the rock scene, with many live performances being cancelled or postponed, and some artists resorting to online performances; the decade has also seen a revival of pop punk music. <br><br>
        Rock music has also embodied and served as the vehicle for cultural and social movements, leading to major subcultures including mods and rockers in the United Kingdom and the hippie counterculture that spread out from San Francisco in the US in the 1960s. Similarly, 1970s punk culture spawned the goth, punk, and emo subcultures. Inheriting the folk tradition of the protest song, rock music has been associated with political activism as well as changes in social attitudes to race, sex, and drug use, and is often seen as an expression of youth revolt against adult consumerism and conformity. At the same time, it has been commercially highly successful, leading to charges of selling out.
        ";
        $class = 'Rock';
        break;

    case 'Wednesday' : 
        $dayheader = '<h2>Hip-Hop</h2>';
        $pic = 'last_poets.png';
        $alt = 'The Last Poets';
        $cap = 'The Last Poets is the first group labeled Hip-Hop and was founded in 1978. They still make music to this day.';
        $content ="<b>Hip-hop</b> or <b>hip hop</b> is a culture and art movement that was created by African Americans, Latino Americans and Caribbean Americans in the Bronx, New York City. The origin of the name is often disputed. It is also argued as to whether hip hop started in the South or West Bronx. While the term hip hop is often used to refer exclusively to hip hop music (including rap), hip hop is characterized by four key elements: \"rapping\" (also called MCing or emceeing), a rhythmic vocal rhyming style (orality); DJing (and turntablism), which is the practice of making music with record players and DJ mixers (aural/sound and music creation); b-boying/b-girling/breakdancing (movement/dance); and graffiti. <br><br>
        Other elements are: hip hop culture and historical knowledge of the movement (intellectual/philosophical); beatboxing, a percussive vocal style; street entrepreneurship; hip hop language; and hip hop fashion and style, among others. The fifth element, although debated, is commonly considered either street knowledge, hip hop fashion, or beatboxing. <br><br>
        The Bronx hip hop scene emerged in the mid-1970s from neighborhood block parties thrown by the Black Spades, an African American group that has been described as being a gang, a club, and a music group. Brother-sister duo DJ Kool Herc and Cindy Campbell additionally hosted DJ parties in the Bronx and are credited for the rise in the genre. Hip hop culture has spread to both urban and suburban communities throughout the United States and subsequently the world.  These elements were adapted and developed considerably, particularly as the art forms spread to new continents and merged with local styles in the 1990s and subsequent decades. Even as the movement continues to expand globally and explore myriad styles and art forms, including hip hop theater and hip hop film, the four foundational elements provide coherence and a strong foundation for hip hop culture. <br><br>
        Hip hop is simultaneously a new and old phenomenon; the importance of sampling tracks, beats, and basslines from old records to the art form means that much of the culture has revolved around the idea of updating classic recordings, attitudes, and experiences for modern audiences. Sampling older culture and reusing it in a new context or a new format is called \"flipping\" in hip hop culture. Hip hop music follows in the footsteps of earlier African-American-rooted and Latino musical genres such as blues, jazz, rag-time, funk, salsa, and disco to become one of the most practiced genres worldwide. <br><br>
        In the 2000s, with the rise of new media platforms such as online music streaming services, fans discovered and downloaded or streamed hip hop music through social networking sites beginning with Blackplanet & Myspace, as well as from websites like YouTube, Worldstarhiphop, SoundCloud, and Spotify. <br>
        ";
        $class = 'Hip-Hop';
        break;

    case 'Thursday' : 
    $dayheader = '<h2>EDM</h2>';
    $pic = 'avicii.jpg';
    $alt = 'Avicii';
    $cap = 'Avicii is considered the most influential EDM artist by bringing EMD into mainstream culture';
    $content = "<b>Electronic dance music (EDM)</b>, also known as <b>dance music</b>, <b>club music</b>, or simply <b>dance</b>, is a broad range of percussive electronic music genres made largely for nightclubs, raves, and festivals. It is generally produced for playback by DJs who create seamless selections of tracks, called a DJ mix, by segueing from one recording to another. EDM producers also perform their music live in a concert or festival setting in what is sometimes called a live PA. <br><br>
    In the late 1980s and early 1990s, following the emergence of raving, pirate radio, PartyCrews, underground festivals and an upsurge of interest in club culture, EDM achieved mainstream popularity in Europe. In the United States, however, acceptance of rave culture was not universal outside of regional scenes in New York City, Florida, the Midwest, and California; although both electro and Chicago house music were influential both in Europe and the United States, mainstream media outlets and the record industry remained openly hostile to it. There was also a perceived association between EDM and drug culture, which led governments at state and city levels to enact laws and policies intended to halt the spread of rave culture. <br><br>
    Subsequently, in the new millennium, the popularity of EDM increased globally, particularly in the United States and Australia. By the early 2010s, the term \"electronic dance music\" and the initialism \"EDM\" was being pushed by the American music industry and music press in an effort to rebrand American rave culture. Despite the industry's attempt to create a specific EDM brand, the initialism remains in use as an umbrella term for multiple genres, including dance-pop, house, techno and electro, as well as their respective subgenres. <br> 
    ";
    $class = 'EDM';
    break;

    case 'Friday' : 
        $dayheader = '<h2>Country</h2>';
            $pic = 'johnny_cash.jpg';
            $alt = 'Johnny Cash';
            $cap = 'Johnny Cash helped bring popularity to Country music internationally "He has made country music not just music for our country but for the entire world" - Bill Clinton';
            $content ="<b>Country</b> (also called <b>country and western</b>) is a genre of popular music that originated with blues, church music such as Southern gospel and spirituals, old-time, and American folk music forms including Appalachian, Cajun, Creole, and the cowboy Western music styles of New Mexico, Red Dirt, Tejano, and Texas country. Its popularized roots originate in the Southern and Southwestern United States of the early 1920s. <br><br>
            Country music often consists of ballads and dance tunes with generally simple forms, folk lyrics, and harmonies often accompanied by string instruments such as banjos, electric and acoustic guitars, steel guitars (such as pedal steels and dobros), and fiddles as well as harmonicas. Blues modes have been used extensively throughout its recorded history.<br><br> 
            The term country music gained popularity in the 1940s in preference to hillbilly music; it came to encompass Western music, which evolved parallel to hillbilly music from similar roots, in the mid-20th century. In 2009, in the United States, country music was the most listened to rush hour radio genre during the evening commute, and second most popular in the morning commute. <br><br>
            The term <i>country music</i> is used today to describe many styles and subgenres. The origins of country music are found in the folk music of working class Americans and blue-collar American life. It has been inspired by American popular music, and American folk music which had its roots in Celtic music, early music of the British Isles, singing cowboys, corrido, ranchera, norteño, French folk music, African-American music, and other traditional folk music traditions.<br>";
            $class = 'Country';
        break;

    case 'Saturday' : 
        $dayheader = '<h2>Metal</h2>';
            $pic = 'led_zeppelin.jpg';
            $alt = 'Led Zeppelin';
            $cap = 'Led Zeppelin is one the "unholy trinity" that created the metal genre. The other two is Black Sabbath and Deep Purple';
            $content = "<b>Heavy metal</b> (or simply <b>metal</b>) is a genre of rock music that developed in the late 1960s and early 1970s, largely in the United Kingdom and United States. With roots in blues rock, psychedelic rock and acid rock, heavy metal bands developed a thick, monumental sound characterized by distortion, extended guitar solos, emphatic beats and loudness. The lyrics and performances are usually associated with aggression and machismo, an issue that has sometimes led to accusations of misogyny. <br><br>
            In 1968, three of the genre's most famous pioneers, Led Zeppelin, Black Sabbath and Deep Purple, were founded. Though they came to attract wide audiences, they were often derided by critics. Several American bands modified heavy metal into more accessible forms during the 1970s: the raw, sleazy sound and shock rock of Alice Cooper and Kiss; the blues-rooted rock of Aerosmith; and the flashy guitar leads and party rock of Van Halen. During the mid-1970s, Judas Priest helped spur the genre's evolution by discarding much of its blues influence, while Motörhead introduced a punk rock sensibility and an increasing emphasis on speed. Beginning in the late 1970s, bands in the new wave of British heavy metal such as Iron Maiden and Saxon followed in a similar vein. By the end of the decade, heavy metal fans became known as \"metalheads\" or \"headbangers\". <br><br>
            During the 1980s, glam metal became popular with groups such as Bon Jovi and Mötley Crüe. Meanwhile, however, underground scenes produced an array of more aggressive styles: thrash metal broke into the mainstream with bands such as Metallica, Slayer, Megadeth, and Anthrax, while other extreme subgenres such as death metal and black metal remain subcultural phenomena. Since the mid-1990s, popular styles have expanded the definition of the genre. These include groove metal and nu metal, the latter of which often incorporates elements of grunge and hip hop. <br><br>
            ";
            $class = 'Metal';
        break;
}

//FORM PHP
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
        $to = 'szemeo@mystudentswa.com';
        $subject = 'TEST Record of the Month Confirmation ' .date('m/d/y, h i A');
        $body = '
            Thank you '.$name.', for subscribing! '.PHP_EOL.'
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

 

 

 

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
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

