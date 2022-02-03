<?php
//the logic - if i do not enter anything inside the field, something will show up
// values == frist_name last_name email comments

if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['comments'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    if (empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['comments'])) {
        echo 'Please fill out the fields!';
        echo '<p><a href="">RESET</a></p>';
    } else {
        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
    }
} else {
    echo '
    <form action="" method="post">
        <label>First Name</label>
        <input type="text" name="first_name">
        
        <label>Last Name</label>
        <input type="text" name="last_name">   

        <label>Email Address</label>
        <input type="email" name="email">   

        <label>Comments</label>
        <textarea name="comments"></textarea>   

        <input type="submit" value="Confirm">
    </form>

    <p><a href="">RESET</a></p>
    ';
}
?>