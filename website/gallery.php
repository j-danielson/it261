<?php
$music['Kanye_West'] = '808s_&_Heartbreaks';
$music['Pink_Floyd'] = 'animals';
$music['Glass_Animals'] = 'dreamland';
$music['Kendrick_Lamar'] = 'good_Kid,_M.A.A.D_City';
$music['Gorillaz'] = 'plastic_Beach';
$music['Alabama_Shakes'] = 'sound_&_Color';
$music['Phantogram'] = 'voices';
$music['David_Bowie'] = 'the_Rise_and_Fall_of_Ziggy_Stardust';
// variable key Value
// $name        $image

include('config.php');
include('includes/header.php')
?>
    <div id="wrapper">
    <table>
        <tr>
            <td><h3>Album Cover</h3></td>
            <td><h3>Album</h3></td>
            <td><h3>Artist</h3></td>
        </tr>
        <?php foreach($music as $artist => $album)    :?>
        <tr>    
            <td><img src="images/galleryimg/<?php echo substr($album, 0, 5)  ;?>.jpeg" alt="<?php echo $album ;?>"></td>
            <td><?php echo ucfirst(str_replace('_', ' ', $album));?></td>
            <td><?php echo str_replace('_', ' ', $artist) ;?></td>
        </tr>
        <?php endforeach ; ?>
    </table>
    </div> <!--end of wrapper-->
<?php
    include('includes/footer.php');
?>